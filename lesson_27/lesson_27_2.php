<?php

class User
{
  public $email;
  public $password;
  public $weakup_time;
  private static $secret = 'asdf8ds';

  public function __construct($email, $password)
  {
    $this->email = $email;
    $this->password = md5($password . self::$secret);
  }

  public function __sleep()
  {
    return ['email', 'password'];
  }

  public function __wakeup()
  {
    $this->weakup_time = time();
  }
}

$user = new User('user@test.com', '1234qwerTY');
print_r($user);

$str = serialize($user);
echo '<br>' . $str . '<br>';
$fp = fopen($user->email, 'w');
fwrite($fp, $str);
fclose($fp);

$str = file_get_contents($user->email);
$u = unserialize($str);
print_r($u);