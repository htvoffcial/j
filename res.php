<meta http-equiv="refresh" content="0.5;URL=dir.php">
<?php
$fileName = $_POST["file"];
// glob() でヒットしたファイルのリストを取得
foreach ( glob($fileName) as $val ) {
    // ファイルの削除
    unlink($val);
}