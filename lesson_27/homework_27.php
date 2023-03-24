<?php

class Point
{
  private static $counter = 0;

  private $x;
  private $y;

  public function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;

    self::$counter++;
  }

  // Задание 1
  public function __toString()
  {
    return "Точка с координатами ($this->x, $this->y)<br>";
  }

  public static function getCounter()
  {
    return self::$counter;
  }

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

// Задание 2
$point_1 = new Point(12, 45);
$point_2 = new Point(212, -45);
$point_3 = new Point(231, 512);

echo $point_1;
echo $point_2;
echo $point_3;