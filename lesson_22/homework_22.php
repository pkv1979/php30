<?php
// Задание 7
$text = $_POST['text'] ?? '';

// Задание 8
$arr = mb_str_split($text);

// Задание 9.
$result = '';
for ($i = 0; $i < count($arr); $i++) {
  if ($i % 2 !== 0) {
    $result .= $arr[$i];
  }
}

?>

<!-- Задание 1, 2 -->
<ul>
  <li>
    <a href="?size=20">Крупный текст</a>
  </li>
  <li>
    <a href="?size=14">Нормальный текст</a>
  </li>
  <li>
    <a href="?size=8">Мелкий текст</a>
  </li>
</ul>

<!-- Задание 3, 4 -->
<p <?php if (isset($_GET['size'])) { ?> style="font-size: <?= $_GET['size']; ?>pt;" <?php } ?>>
  Далеко-далеко за словесными горами в стране гласных, и согласных живут рыбные тексты. Агентство пор послушавшись он
  продолжил. Которой, деревни вершину переписывается необходимыми великий однажды коварный даль правилами всеми себя
  своих составитель единственное?
  Послушавшись lorem инициал коварный предложения запятых пунктуация живет наш пор рукопись, ручеек безопасную одна себя
  если диких ipsum, даже переписывается, мир злых правилами маленькая. Первую безопасную сих подзаголовок мир
  использовало.
  Буквенных власти послушавшись букв? Свое родного пор необходимыми города не приставка использовало взобравшись лучше
  залетают которое даль назад ты если, дороге силуэт грамматики дорогу? Языкового прямо над предупреждал бросил лучше!
  Рекламных подзаголовок свое первую домах гор маленькая использовало курсивных вопроса, правилами однажды своего, даже
  одна большой коварный продолжил? Моей рукописи снова взгляд коварных журчит образ семь одна щеке? Безопасную,
  буквоград.
  Которое свой буквоград большого подзаголовок до. До жаренные, семантика ipsum страна гор эта. Текстов продолжил
  напоивший мир переписывается даль, коварных предупреждал повстречался заманивший, страна решила заголовок собрал.
  Жизни, океана напоивший.
</p>
<p <?php if (isset($_GET['size'])) { ?> style="font-size: <?= $_GET['size']; ?>pt;" <?php } ?>>
  Далеко-далеко за, словесными горами в стране гласных и согласных живут рыбные тексты. Первую проектах даже которое
  рыбными возвращайся имеет пояс на берегу своих реторический журчит страну большой, большого, грамматики прямо
  послушавшись точках деревни.
  Он о, пустился lorem продолжил домах большого пояс текстов курсивных злых однажды, жизни пор ручеек океана имени диких
  это всемогущая путь гор! Рукописи, заманивший путь своего текста ее собрал буквоград!
  Живет эта океана его меня использовало последний подзаголовок моей встретил пояс lorem домах предложения рот правилами
  рыбными проектах, оксмокс города толку языком курсивных, вершину повстречался переулка приставка ее! Взобравшись,
  дорогу.
</p>
<p <?php if (isset($_GET['size'])) { ?> style="font-size: <?= $_GET['size']; ?>pt;" <?php } ?>>
  Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Алфавит буквенных курсивных
  семантика повстречался образ путь парадигматическая коварный которой большой осталось, страна что раз эта семь ты
  заголовок рыбного?
  Себя последний жаренные буквоград которой встретил. Над великий возвращайся буквенных первую за! Грамматики строчка
  снова пунктуация своего диких языком вопрос на берегу послушавшись но ему эта реторический, по всей щеке над
  агентство!
</p>

<!-- Задание 5, 6, 10 -->
<form action="" method="post">
  <textarea name="text"><?= $result; ?></textarea>
  <br>
  <button type="submit">Отправить</button>
</form>