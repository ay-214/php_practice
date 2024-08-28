<?php
/*php phplaravel04.php */
/*1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください */
function doblenumber($max){
  $result = $max * 2;
  return $result;
    }
echo doblenumber(50);
echo ("\n");


/*2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください */
function plus($a,$b){
  $result = $a + $b;
  return $result;
}
echo plus(3,8);
echo ("\n");


/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください */
function multiplication($arr){
  $result = 1;
  foreach ($arr as $num) {
    $result *= $num;
  }
  return $result;
}
echo multiplication([1, 3, 5 ,7, 9]);
echo ("\n");


/*4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください */
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
      // ここで配列の中の1番大きい値を探したい
      if ($max_number < $a) {
        $max_number = $a;
      }
    }
  
    return $max_number;
  }

  echo max_array(array(0,1,10,100));
  echo ("\n");


  /*5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください*/
/*strip_tags 文字列から HTML および PHP タグを取り除く*/
$str = "<h1> hello World!</h1>";
echo "Today" .$str;
echo ("\n");

$result_str = strip_tags($str);
echo "Today" .$result_str;
echo ("\n");

/*array_push =配列に要素を追加したい時に使う*/
$animals=array("ネコ","ウサギ","イヌ","ハムスター");
array_push ($animals,"ハリネズミ","シカ");
print_r($animals);
echo ("\n");

/*array_merge =ひとつまたは複数の配列をマージする*/
$array1 = ['Day of Week: ', 'Sunday', 'Monday', 'Tuesday'];
$array2 = ['Wednesday', 'Thursday'];
$array3 = ['Friday', 'Saturday'];

$array = array_merge($array1, $array2, $array3);

print_r($array);
echo ("\n");

/*time, mktime =指定した日時のタイムスタンプを取得する*/
$time = mktime(8, 20, 15, 11, 13, 2035);
var_dump(date('Y年m月d日h時i分s秒', $time));
echo ("\n");

/*date =指定された日時を任意の形式でフォーマットし、日付文字列を返す*/
/*今の日付 */
echo date('Y/m/d');
echo ("\n");

/*指定の日時*/
echo date('2007-1-26 5:34:33');
echo ("\n");
echo date('2025年4月7日 9時12分4秒');

echo ("\n");
