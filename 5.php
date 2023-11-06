<?php
//PHP산술 연산자 +- /* 나머지 % **제곱
$a=2**3;
echo $a."<br>";


//php할당 연산자
$b = 5;
$a1 = $b;
$b--;
echo $b."<br>";


$y=10;
$x=5;

$x+=$y; //$x= $x+$y;

echo $x."<br>";


//비교 연산자 문자열과 숫자를 같게 판단
$a2 = 10;
$b2= "10";

if($a2 == $b2){
    echo "a2와 b2는 같다."."<br>";
}else{
    echo "a2와 b2는 다르다"."<br>";
}


$a3 = 10;
$b3= "10";

if($a3 === $b3){
    echo "a3와 b3는 같다."."<br>";
}else{
    echo "a3와 b3는 다르다"."<br>";
}

//!= 과 <>는 동일
var_dump($a3 != $b3);


//증감연산자 ++,--

//논리 연산자
//and, or, xor, &&, ||, !

$x=true;
$y=true;

//논리곱 
var_dump($x and $y); //1*1 = 1
var_dump($x && $y); //1*1 = 1


$x=true;
$y=false;
var_dump($x and $y); //1*0=0


//논리합
var_dump($x or $y); //둘 중 하나만 true여도 true
var_dump($x || $y); //둘 중 하나만 true여도 true


//xor
var_dump($x xor $y); //두 개의 값이 다를 때 true 같을때 false

//문자열 연산자

$a="안녕";
$a .="하세요";

echo $a;
?>