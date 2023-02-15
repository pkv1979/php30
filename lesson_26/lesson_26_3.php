<?php

class Math
{
  public const E = 2.71828182;

  private static $counter = 0;

  public static function getCounter()
  {
    return self::$counter;
  }

  public static function sin($x)
  {
    self::$counter++;

    return sin($x);
  }

  public static function cos($x)
  {
    self::$counter++;

    return cos($x);
  }

  public static function e2()
  {
    self::$counter++;

    return self::E ** 2;
  }
}

class User
{
  public $id;
  public $name;

  private static $counter = 0;

  public function __construct($name)
  {
    $this->name = $name;
    self::$counter++;
    $this->id = self::$counter;
  }

  public static function getCounter()
  {
    return self::$counter;
  }
}

echo Math::E . '<br>';
echo Math::e2() . '<br>';
echo Math::sin(5) . '<br>';
echo Math::sin(5) . '<br>';
echo Math::cos(5) . '<br>';
echo Math::getCounter() . '<br>';

$user_1 = new User('Alex');
$user_2 = new User('Oleg');
$user_3 = new User('Igor');

echo $user_1->id . '<br>';
echo $user_2->id . '<br>';
echo $user_3->id . '<br>';
echo User::getCounter() . '<br>';
