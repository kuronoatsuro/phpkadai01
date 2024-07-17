<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $mbti = htmlspecialchars($_POST['mbti'], ENT_QUOTES, 'UTF-8');
    $date = htmlspecialchars(date('Y-m-d H:i:s'), ENT_QUOTES, 'UTF-8');

    $file = fopen("./data/data.csv", "a");
    fputcsv($file, [$name, $mbti, $date]);
    fclose($file);
}?>

<a href="read.php">結果を見る</a>
