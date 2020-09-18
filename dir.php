<?php
$d = opendir('.');

while (($file = readdir($d)) !== false) {
    if ($file === '.' || $file === '..') {
        continue;
    }
    echo "<a href='" . $file . "'>" . $file . "</a><hr>";
}

closedir($d);
?>
<h3>
  ファイル消去
</h3>
<form action="res.php" method="post">
  <input type="textarea" name="file" value=""><br>
  <input type="submit" value="送信">
</form>