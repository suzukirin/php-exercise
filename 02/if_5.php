<?php 
$num =10;

$a=true;
for ($i =2; $i  <$num; $i++){
  if($num % $i ==0){
$a=false;
  break;
}
}

    if($a) {
    echo $num.'は素数です';
}else{
    echo $num .'は素数ではありません';
}
