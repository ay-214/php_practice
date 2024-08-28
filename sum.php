<?php
/*関数*/ 

 /*仮引数と引数 */
/*厳密な関数の定義
function 関数名(仮引数) {
  実行する処理
}*/
function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }

    return $result;
}
echo sum(100); 
echo "\n";

/*ビルトイン関数*/
/*strlen : 文字の長さを取得する*/
$string = "ABCDEF";
echo strlen($string);
echo "\n";

/*str_replace : 文字列を置換する*/
$string = "I Love Ruby!";
$new_string = str_replace("Ruby","PHP",$string);
echo $new_string;
echo "\n";

/*count : 配列の要素の個数を取得する*/
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);
echo "\n";

/*asort, arsort : 配列をソート（並び替え）する*/
$array = array(2,5,9,7,3,1,8,6,4);
// 配列を昇順（小さい順）にソートする
asort($array);
print_r($array);
echo "\n";
// $array を降順(大きい順)にソートする
arsort($array);
// print_rで表示する
print_r($array);