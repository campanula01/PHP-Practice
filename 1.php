<?php
//xampp
/*웹서버, DB서버, PHP
Apache, Mariadb, PHP컴파일러
php.net*/

$txt="PHP";
echo "I LOVE $txt !";

#80포트 시 localhost만 입력해주면 된다.http://localhost/ = index.php

$txt1 = "안녕하세요";   //문자열
$x = 5; //정수
$y=10.5; //실수
$X=10;  

//변수는 대소문자를 구분한다.
echo "x= $x, X= $X";

//전역변수
//로컬변수(지역변수)

$x=5;

function myTest(){
    global $x;
    echo "변수 x의 출력값 $x";
    echo "<br>";
    $x++;
    echo "변수 x의 출력값 $x";
}

myTest();

echo "변수 x의 출력값 $x";