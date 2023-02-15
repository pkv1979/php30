<?php

class User
{
  public $name = 'User';
  public $email;

  public function __construct($name = false, $email = false)
  {
    if ($name) {
      $this->name = $name;
    }
    if ($email) {
      $this->email = $email;
    }
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function __destruct()
  {
    echo 'Удаляем объект: ' . $this->name . '<br>';
  }
}

$user = new User();
print_r($user);
echo '<br>';

$user = new User('Kostiantyn', 'test@test.com');
print_r($user);
echo '<br>';
echo $user->name . '<br>';
echo $user->email . '<br>';

echo $user->getName() . '<br>';
echo $user->getEmail() . '<br>';

$user->setName('Oleg');
$user->setEmail('test2@test.com');

$user1 = new User();
unset($user1);

echo $user->getName() . '<br>';
echo $user->getEmail() . '<br>';
