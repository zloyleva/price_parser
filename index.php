<?php include_once 'parser_row.php';?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
$handel_file = fopen('price/full_price.txt', 'rt');

if($handel_file):
  echo "<h3>File is opened</h3>";
  $match = [];
  while(!feof($handel_file)):
    $row = fgets($handel_file);
    $back_row = parser_row($row);
    if('' == $back_row) continue;
    $match[] = $back_row;
  endwhile;
else:
  echo "Error open file";
endif;

   foreach ($match as $value){
       print_r($value);
       echo "<br>";
   }

?>
</body>
</html>
