<?php
$str = "<h1> hello World!</h1>";
echo "Today" .$str;
echo ("\n");

$result_str = strip_tags($str);
echo "Today" .$result_str;
echo ("\n");

$animals=array("ネコ","ウサギ","イヌ","ハムスター");
array_push ($animals,"ハリネズミ","シカ");
print_r($animals);
echo ("\n");

$array1 = ['Day of Week: ', 'Sunday', 'Monday', 'Tuesday'];
$array2 = ['Wednesday', 'Thursday'];
$array3 = ['Friday', 'Saturday'];

$array = array_merge($array1, $array2, $array3);

print_r($array);
echo ("\n");


$time = mktime(8, 20, 15, 11, 13, 2035);
var_dump(date('Y年m月d日h時i分s秒', $time));
echo ("\n");

/*今の日付 */
echo date('Y/m/d');
echo ("\n");

/*指定の日時 */
echo date('2007-1-26 5:34:33');
echo ("\n");
echo date('2025年4月7日 9時12分4秒');
echo ("\n");

function multiplication($arr){
    $result =1;
    foreach ($arr as $num) {
    echo $arr *= $num;
   }
   return $result;
   }
   
   echo multiplication($array(1, 3, 5 ,7, 9));