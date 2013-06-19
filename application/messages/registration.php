<?php

return array(
    'username' => array
     (
        'not_empty' => 'Вы не ввели имя пользователя',
        'exist_user' => 'Пользователь с таким именем уже существует',
     ),
    'confirm' => array
     (
        'not_empty' => 'Нужно подтвердить пароль',
     ),
     'password' => array
     (
        'not_empty' => 'Вы не ввели пароль',
        'matches' => 'Введенные пароли не совпадают'
     ),
);
