<?php
session_start();
$GLOBALS['config'] = array(
  'db' => array(
    'host' => 'localhost',
    'name' => 'todo',
    'user' => 'root',
    'pass' => 'toor'
  )
);


spl_autoload_register(function($class){
  require_once "classes/{$class}.php";
});
