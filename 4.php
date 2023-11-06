<script>
    const GREETING="안녕하세요!<br>"
    document.write(GREETING)

</script>


<?php
//abs() 절대값
$a=-33;
$b=abs($a);


//sqrt() 루트
$b1=sqrt(4);
echo $b1."<br>";

//round 반올림
$a2 = -2.75;
$b=round($a);
echo $b."<br>";

//rand() 난수 , 범위
$a3=rand(10,12);

echo $a3."<br>";

//define()

define("GREETING","안녕하세요");

//상수는 변경할 수 없음.
//Parse error: syntax error, unexpected token "=" in C:\xampp\htdocs\4.php on line 33
//GREETING="DDD";

echo GREETING."<br>";
?>