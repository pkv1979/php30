<?php

// Задание 1
class Point
{
  // Задание 8
  private static $counter = 0;

  private $x;
  private $y;

  public function __construct($x, $y)
  {
    // Задание 2
    $this->x = $x;
    $this->y = $y;

    // Задание 9
    self::$counter++;
  }

  // Задание 10
  public static function getCounter()
  {
    return self::$counter;
  }

  // Задание 3
  public function getX()
  {
    return $this->x;
  }

  public function setX($value)
  {
    $this->x = $value;
  }

  public function getY()
  {
    return $this->y;
  }

  public function setY($value)
  {
    $this->y = $value;
  }
}

// Задание 4, 7
$obj = new Point(2, 14);

echo $obj->getX() . '<br>';
$obj->setX(254);
echo $obj->getX() . '<br>';

echo $obj->getY() . '<br>';
$obj->setY(-15);
echo $obj->getY() . '<br>';

// Задание 6
// $obj->x;

// Задание 11
$obj_2 = new Point(2, 14);
$obj_3 = new Point(2, 14);

echo Point::getCounter();
