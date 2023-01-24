<?php

define('FILE_COMMENTS', 'Lesson_23_1.txt');

$comment = $_REQUEST['comment'] ?? '';
if (is_string($comment)) {
  $comment = htmlspecialchars($comment);
  // $comment = strip_tags($comment, '<b><i><u>');
  $comment = str_replace("\r\n", '<br>', $comment);

  if ($comment) {
    file_put_contents(FILE_COMMENTS, file_get_contents(FILE_COMMENTS) . $comment . "\r\n");
  }
}

$comments = file_get_contents(FILE_COMMENTS);
$comments = explode("\r\n", $comments);

print_r($comments);

?>

<form name="myform" action="" method="get">
  <label>Ваш комментарий:</label>
  <br>
  <textarea name="comment"></textarea>
  <br>
  <br>
  <input type="submit" value="Отправить">
</form>

<?php
foreach ($comments as $comment) {
  if ($comment) {
?>
    <p><?= $comment; ?></p>
<?php
  }
}
?>