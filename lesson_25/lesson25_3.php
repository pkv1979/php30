<?php

class User
{
  public $name = 'User';
  public $email;
}

$user_1 = new User();
echo $user_1->name . '<br>';
echo $user_1->email . '<br>';
$user_1->email = 'test@texst.com';
echo $user_1->email . '<br>';

$user_2 = new User();
$user_2->name = 'Kostiantyn';
$user_2->email = 'test2@texst.com';
echo $user_2->name . '<br>';
echo $user_2->email . '<br>';

echo '<pre>';
print_r($user_1);
echo '</pre>';

echo '<pre>';
print_r($user_2);
echo '</pre>';