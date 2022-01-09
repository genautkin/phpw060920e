<?php 
 
$for_time = time() + 60 * 60 * 24 * 30;
setcookie('stay_connected', 1, $for_time);

?>
<?php
$user = [
    'name' => 'Avi Cohen',
    'age' => 26,
    'email' => 'avi@gmail.com',
    '0' => 'test'
];
 
?>
 
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>
  <body>
    <h2>- User details -</h2>
    <ul>
      <li>Name: <?= $user['name']; ?></li>
      <li>Age: <?= $user['age']; ?></li>
      <li>Email: <?= $user['email']; ?></li>
      <?php
 
 $names1 = [
     'a' => 'avi',
     'b' => 'beni',
 ];
  
 $names2 = [
     'a' => 'carl',
     'd' => 'dana',
 ];
  
 $all_names = array_merge($names1, $names2, $user);
  
 $names = [
  'a' => 'avi',
  'b' => 'beni',
  'c' => 'carl',
  'd' => 'dana',
];

function my_add($n)
{
    return $n.' !';
}


$result = array_map(fn($value): string => $value.' !', $names);

echo '<pre>';
print_r($result);
echo '</pre>';

echo '<pre>';
print_r($names);
echo '</pre>';
 ?>
    </ul>
  </body>
</html>
    
</body>
</html>