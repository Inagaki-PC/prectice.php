<?php
//課題1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function b($a) {
  return $a * 2;
}
echo b(8);
echo "\n";

//※課題1の別計算式
function d($c) {
  echo $c * 2;
}
d(8);
echo "\n";

//課題2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
//参考）引数は下記のように指定すると、複数の仮引数を使うことができます。
function f($aa,$bb) {
  $z = $aa + $bb;
  return $z;
}
echo f(10,20);
echo "\n";

//※課題2の別計算式
function ff($cc,$dd) {
  echo $cc + $dd;
}
ff(3,4);
echo "\n";
//課題3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function e($arr) {
  $h = 1;
  foreach($arr as $g){
  $h *= $g;
  }
  return $h;
}
echo e(array(1, 3, 5, 7, 9));
echo "\n";

//※課題3の別計算式
$array = [1, 3, 5, 7, 9];//※$arrr = array(1, 3, 5, 7, 9)とし、#51をecho ee($arrr)としてもよい
function ee($arrr) {
  $gg = 1;
  for ($i = 0; $i < count($arrr); $i++){
    $gg = $gg * $arrr[$i];
  }
  return $gg;
}
echo ee($array);
echo "\n";

//課題4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
$array = [2, 4, 12, 10 ,6];
function max_array($arrrr) {

$max_number = $arrrr[0];
  foreach($arrrr as $aaa){
    //どうしたらいいかわからない・・・・
    if ($max_number < $aaa) {
    $max_number = $aaa;
    }
  }
return $max_number;
}
echo max_array($array);
echo "\n";
?>