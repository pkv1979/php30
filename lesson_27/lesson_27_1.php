<?php

class Data
{
  private $data;

  public $a = 5;

  public function __construct()
  {
    $this->data = [];
  }

  public function __get($name)
  {
    if (isset($this->data[$name])) {
      return $this->data[$name];
    }
    return null;
  }

  public function __set($name, $value)
  {
    $this->data[$name] = $value;
  }

  public function __toString()
  {
    $s = '';

    foreach ($this->data as $k => $v) {
      $s .= "$k = $v; ";
    }

    return $s;
  }

  public function __isset($name)
  {
    return isset($this->data[$name]);
  }

  public function __unset($name)
  {
    unset($this->data[$name]);
  }

  public function __call($method, $args)
  {
    echo "Метод $method не существует!<br>";
    echo 'Переданные параметры: ' . print_r($args, true) . '<br>';
  }

  public static function __callStatic($method, $args)
  {
    echo "Статический метод $method не существует!<br>";
    echo 'Переданные параметры: ' . print_r($args, true) . '<br>';
  }
}

$data = new Data();
echo $data->data . '<br>';
echo $data->a . '<br>';
$data->a = 10;
echo $data->a . '<br>';
$data->data = 123;

$data->b = 20;
echo $data->b . '<br>';

echo $data . '<br>';
echo isset($data->b) . '<br>';
unset($data->b);
echo $data . '<br>';

$data->nonExistingMethod(1, 2, 3);
$data::nonExistingStaticMethod(1, 4, 5);