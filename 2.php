<?php

echo "1";
print "2";

echo("3");
print("4");

echo "<h2>PHP는 재밌다.</h2>";
echo "Hello World! <br>";
echo "I'm about to learn PHP!<br>";


$txt1="Learn PHP";
$x=5;
$y=4;

//문자열 연결 연산자로 .사용
echo "<h2>".$txt1."</h2>";
echo $x+$y."<br>";

//var_dump로 형을 알수 있음.
$x1=3333;
var_dump($x);

$x2="한글"; //6bytes
var_dump($x2);

//문자열 bytes반환
$x_len = strlen("한글");
echo $x_len."<br>";

//단어 수 세기 한글x
echo str_word_count("hello world")."<br>";

//문자열 뒤집기
echo strrev("hello world")."<br>";

//위치 0부터 count, 보통 email @
$a = strpos("hello world", "world")."<br>";
echo $a;

$email = "aaa.gmail.com";

if(strpos($email,"@")){
    echo "이메일 형식에 맞음.";
}else{
    echo "이메일 형식이 잘못됨.";
}

?>