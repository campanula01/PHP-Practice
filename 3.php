<?php

$str = "나는 자랑스러운 미국인이다.";

//str_replace("바꿀문자열","바뀔문자열","대상문자열");
$str1 = str_replace("미국인", "한국인",$str);
echo $str1."<br>";

//is_int 정수, is_float 실수
//is_numeric
//"3"일 때는 정수가 아닙니다로 나옴.
$x = 3;

var_dump(is_int($x));
if(is_int($x)){
    echo "x는 정수입니다."."<br>";
}else{
    echo "x는 정수가 아닙니다."."<br>";
}

//"3"도 숫자로 판단
$x2="3";

if(is_numeric($x2)){
    echo "숫자입니다."."<br>";
}else{
    echo "숫자가 아닙니다."."<br>";
}

echo(pi())."<br>";

echo(max(0,1,2,333,12,1));
?>