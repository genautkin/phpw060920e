<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">    
            <h1>Start PHP</h1>
            <?php $name = "HackerU" ?>
            <h2><?= $name ?></h2>
            <?php
 
 $protocol = 'http';
 $port = 80;
 $my_string = 'Hi';
 $format = '%3$s Request to %1$d protocol on port %2$s';
 $result = sprintf($format, $port, $protocol, $my_string);
  
 // output Request to http protocol on port 80
 printf($format, $port, $protocol, $my_string);
 $test = 'Request';
 $test = 1234;

 $y = (bool) 18;
echo '<br>';
 
// output 1
echo $y;

echo '<br>';

$y = (bool) 1;
 
// output 1
echo $y;
echo '<br>';
  
$y = (bool) 0;
 
// output 1
echo $y;

echo '<hr>';
 
$x = (int) 5.99998999;
echo $x;
// output 5


 
define('MY_SERVER_URL', 'domain.com');
 
// output domain.com
echo MY_SERVER_URL; 
 
echo '<hr>';

 
define('APP_KEY', 456);
 
// output 456
echo APP_KEY; 
 
echo '<hr>';
 
$name = 'HOST';
$value = 'localhost';
define($name, $value);
 
// output localhost 
echo HOST;

echo PHP_VERSION;
$num = 16;
 
// output Your number is: 16
echo 'Your number is: ' . $num; 
 
echo '<hr>';
 
$str = 'whats up?';
$out = 'Hi, ' . $str;
 
// output Hi, whats up?
echo $out; 
 
echo '<hr>';
 
$x = 2;
$y = 3;
 
// output 23
echo $x + $y;
 
// output random number...
echo rand(); 
 
echo '<hr>';
 
// output random number between 1 to 6
echo rand(1, 6); 
 
echo '<hr>';
 
$min = 3;
$max = 15;
 
// output random number between 3 to 15
echo rand(0.1, 0.9);
echo '-';
 
// output whats up
echo ltrim(' whats up'); 
 
echo '<hr>';
 
// output hi
echo ltrim('?hi', '?'); 
 
echo '<hr>';
 
// output whats up
echo rtrim('whats up '); 
echo '-';
 
echo '<hr>';
 
// output hi
echo rtrim('hi?', '?');

$var = null;

echo '<hr>';

$x = false;
 
if($x === true){
   
  echo 'in if';
   
} elseif (false){
   
  echo 'in elseif';
   
} else {
    echo 'in elseif2';
}

  


 


echo '<hr>';
echo "Test:";
if (empty($isNull)) {
    echo "Is empty";
}


echo '<hr>';
 $num = 5;
$str = ($num > 0 || $num === 0 ) ?  (function () {  return "Pos"; })() : 'neg';
  echo $str;


  for ($x = 0; $x < 10; $x++) {
   
    echo 'code execute, $x is now: ' . $x;
    echo '<br>';

     
  }

?>
    
</body>
</html>