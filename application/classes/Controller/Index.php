<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {

	public function action_index()
	{
            $content = View::factory('index');
            $data = $this->request->post();
            $errors = array();
            if ($data)
            {
                if (trim($data['body']))
                {
                    $message = new Model_Message();
                    $message->body = $data['body'];
                    $message->user_id = Auth::instance()->get_user()->id;
                    $message->save();
                } else {
                    $errors['empty_message'] =  Kohana::message('message', 'empty_message');
                }
            }
            $content->messages = ORM::factory('message')->find_all();
            $content->errors = $errors;
            $this->template->content = $content;
	}    

        public function action_regsuccess()
	{            
            $this->template->content = View::factory('regsuccess');
	}


        public function action_login()
	{
            $data = $this->request->post();
            $content = View::factory('login');

            $errors = array();
            if ($data)
            {               
                $user = Auth::instance()->login($data['username'], $data['password'], isset($data['remember']));
                if ($user)
                {
                    $this->redirect('/');
                } else
                {
                    $errors['login_error'] = Kohana::message('login', 'login_error');
                }   
            }
            $content->errors = $errors;
            $this->template->content = $content;
	}

        public function action_registration()
	{
            $data = $this->request->post();
            $errors = array();
            if ($data)
            {
                $valid = Validation::factory($data);
                $valid->rule(TRUE, 'not_empty')
                      ->rule('password',  'matches', array(':validation', 'password', 'confirm'));
                $existUser = false;
                if ($data['username'])
                {
                    $existUser = ORM::factory('user')->where('username', '=', $data['username'])->find()->loaded();
                }                
                if($valid->check() && !$existUser)
                {                   
                    $user = ORM::factory('user');
                    $user->username = $data['username'];
                    $user->password = $data['password'];
                    $user->save();
                    $user->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
                    $this->redirect(Route::get('default')->uri(
                        array(
                            'controller' => 'index',
                            'action'     => 'regsuccess',
                        )
                    ));
                }
                else
                {
                    $valid->labels(array(
                        'username' => 'Имя пользователя',
                        'confirm' => 'Подтвержение пароля',
                        'password' => 'Пароль',
                    ));
                    $errors = $valid->errors('registration');
                    if ($existUser)
                    {
                        $errors['username'] = Kohana::message('registration', 'username.exist_user');
                    }
                }
                
            }
            $content = View::factory('registration');
            $content->errors = $errors;
            $this->template->content = $content;
	}

        public function action_logout()
        {
            Auth::instance()->logout();
            return $this->redirect('/');
        }

} // End Index
