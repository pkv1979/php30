<?php

class User
{
  public $id = 0; // Доступ есть откуда угодно
  protected $name = 'User'; // Доступ есть из этого класса и из дочерних классов
  private $email; // Доступ есть только из этого класса

  public function __construct($name = false, $email = false)
  {
    $this->id = $this->getId();
    if ($name) {
      $this->name = $name;
    }
    if ($email) {
      $this->email = $email;
    }
  }

  private function getId()
  {
    return uniqid();
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
echo $user->id . '<br>';
// echo $user->name . '<br>'; // Ошибка
// echo $user->email . '<br>'; // Ошибка
echo $user->getName() . '<br>';
