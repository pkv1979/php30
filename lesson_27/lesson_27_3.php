<?php

class Test
{
  public $x = 15;
}

class Point
{
  public $x;
  public $y;
  public $t;

  public function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $this->t = new Test();
  }

  public function __toString()
  {
    return "Точка ($this->x; $this->y) t = {$this->t->x}<br>";
  }

  public function __clone()
  {
    $this->t = clone $this->t;
    echo 'Клонирование<br>';
  }
}

function testChange($obj)
{
  $obj->x = -100;
}

$p_1 = new Point(10, 20);
echo $p_1;

$p_2 = $p_1;
echo $p_2;

$p_1->x = 15;
echo $p_2;

$p_2->y = 5;
echo $p_1;
echo $p_2;

$p_3 = clone $p_1;
echo $p_3;
$p_3->x = 30;
echo $p_1;
echo $p_3;
echo '---------------------<br>';

$p_3->t->x = 25;
echo $p_1;
echo $p_3;

testChange(($p_3));
echo $p_3;