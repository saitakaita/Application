<?php

class MiniBlogApplication extends Application
{
  protected $login_action = array('account', 'signin');
  
  public function getRootDir()
  {
    return dirname(__FILE__);
  }
  
  protected function registerRoutes()
  {
    return array(
      '/'
        => array('controller' => 'status', 'action' =>'index'),
      '/account'
        => array('controller' => 'account', 'action' =>'index'),
      '/account/:action'
        => array('controller' => 'account'),
    );
  }
  
  protected function configure()
  {
    $this->db_manager->connect('master', array(
      'dsn'      => 'mysql:dbname=test;host=localhost',
      'user'     => 'yamada',
      'password' => 'yamada10',
    ));
  }
  
}