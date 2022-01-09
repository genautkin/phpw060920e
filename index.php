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
<?php

 $name = 'Moshe Levi';
 $phone = '0509998877';
  
 $message = <<<'EOT'
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="#">$name</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Link</a>
     </li>
     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Dropdown
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="#">Action</a>
         <a class="dropdown-item" href="#">Another action</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="#">Something else here</a>
       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link disabled" href="#">Disabled</a>
     </li>
   </ul>
   <form class="form-inline my-2 my-lg-0">
     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   </form>
 </div>
</nav>
EOT;
 echo $message;
 $mails = 'ad@gmail.com isr@walla.com m12@gmail.net';
$emails = explode(' ', $mails);
 
foreach($emails as $mail){
  echo '<br />';
  echo $mail . '
';
   
}

 date_default_timezone_set('Asia/Jerusalem');
 $date = date("Y-m-d H:i:s");
 echo ($date);
 echo '<br>';
 echo strtotime($date);
echo '<br>';
 echo 'Test $name';
$unixtime = time();
echo $unixtime;
echo '<br />';
$date = date("Y-m-d H:i:s");
echo $date;
 
echo '<hr>';
$milliseconds = round(microtime(true) * 1000);
echo $milliseconds;
 ?>
    
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

<?php
 
$nums = [10, 20, 30, true];
 
echo '<pre>';
var_dump($nums);
echo '</pre>';
?>


    
</body>
</html>