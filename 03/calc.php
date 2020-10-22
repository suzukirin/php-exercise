<?php


$num1 =$_GET['num1'];
$num2 =$_GET['num2'];
$operator =$_GET['operator'];

switch ( $operator ){
    case 'addition':
    echo "{$num1} + {$num2}=",$num1+$num2;
    break;
        
    case 'subtraction': 
    echo "{$num1} - {$num2}=",$num1-$num2;    
    break;
          
    case 'multiplication':
    echo "{$num1} * {$num2}=",$num1*$num2;
    break;
                
    case 'division':  
    echo "{$num1} / {$num2}=",$num1/$num2;
    break;

    case 'xxxx':  
    echo '正しい演算子を指定してください';
    break;

    }








//echo $num1 % $num2;
//echo $num1 - $num2;    
//echo $num1+$num2;
//echo $num1 * $num2;