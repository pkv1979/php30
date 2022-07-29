<?php

// include 'lib/functions1.php';
// include 'lib/functions.php';

// require 'lib/functions1.php';
// require 'lib/functions.php';

// include_once 'lib/functions.php';

require_once 'lib/functions.php';

echo sum(11, 7) . '<br>';
echo sub(11, 7) . '<br>';
echo mult(11, 7) . '<br>';
echo div(11, 7) . '<br>';

$header = 'Заголовок';
$content = 'Какой-нибудь текст...';

require_once 'html/page.php';