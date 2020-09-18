<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
$tempfile = $_FILES['fname']['tmp_name'];
$filename = './' . $_FILES['fname']['name'];
 
if (is_uploaded_file($tempfile)) {
    if ( move_uploaded_file($tempfile , $filename )) {
	echo "あなたの動画IDは、".$filename . "です、皆の動画コーナーに掲載を希望されるならこちらを管理者にお伝えください.。ご利用ありがとうございました";
    } else {
        echo "ファイルをアップロードできません。";
    }
} else {
    echo "ファイルが選択されていません。";
} 




$file = 'pe.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $filename. '\n';
// 結果をファイルに書き出します
file_put_contents($file, $current);
?>