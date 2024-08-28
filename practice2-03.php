<?php
/*PHP/Laravel 03 課題１　答え*/
$name = "Ayumi";
if ($name == "Ayumi"){
    echo "私はAyumi です。";
} else  {
    echo "Ayumi ではありません。";
}
/*PHP/Laravel 03 課題２　答え*/
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo "\n";
echo $total;
/*PHP/Laravel 03 課題３　答え*/
$fruits = array("Apple","Peach","Cherry","Strawberry","Orange");
foreach($fruits as $fruits){
  echo "\n";
  echo "要素は" . $fruits;
}
/*PHP/Laravel 03 課題４　答え*/
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 105;

for($i = $start; $i < $end; $i++){

  /*PHP/Laravel 03 課題４の出力結果*/
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo "\n";
    echo $i;
  }
}
echo "\n";
