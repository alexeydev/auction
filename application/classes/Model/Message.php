<?php
class Model_Message extends ORM
{

    /*
     * Table name
     * @var string
     */
    protected $_table_name = 'messages';

    protected $_belongs_to = array(
      'user'  => array(
               'model'       => 'user',
               'foreign_key' => 'user_id',
          )
    );
}
