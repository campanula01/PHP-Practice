<script>
    const arr1 = ["자동차", "비행기","요트"];
    const arr2 = [...arr1];

    arr1.pop();

</script>


<?php
//내장함수
//사용자 정의함수

/*
$money=3000;
//3번째 자리 ,
echo number_format($money);

function getString(){
    echo '구문';

    return 3;
}

$a = getString();

echo $a;

function addNumber($a, $b){
    return $a+$b;
}

echo "<h2>" . addNumber(3,5) . "</h2>";
echo "<h2>" . addNumber(13,5) . "</h2>";
echo "<h2>" . addNumber(3,15) . "</h2>";
echo "<h2>" . addNumber(23,5) . "</h2>";
*/
//declare 맨 처음에 정의되어야한다. 타입 제한
//declare(strict_types=1);

function addNumber1(int $a, int $b) : int{
    return $a+$b;
}

$c = addNumber1(5,4);
echo $c;

//배열
$car = array("자동차", "비행기", "요트");
$car2 = $car;

$car2[0] = "비행선";

print_r($car2);
print_r($car);


//print_r($_SERVER);

echo $_SERVER['PHP_SELF'];

$ag = $_SERVER['HTTP_USER_AGENT'];

if(strpos($ag, 'Chrome')){
    echo '크롬 유저시군요';
}else{
    echo '크롬 유저가 아니시군요';
}


echo "당신의 IP는 ".$_SERVER['REMOTE_ADDR']."입니다.";

print_r($_GET);

echo "name : ".$_GET['name'];
echo "<br>";
echo "company:".$_GET['company'];


echo "name : ".$_REQUEST['name'];
echo "<br>";
echo "company:".$_REQUEST['company'];

print_r($_POST);
print_r($_REQUEST);


?>

<a href="<?=$_SERVER['PHP_SELF']; ?>?a=b">b값을 가져오기</a>
