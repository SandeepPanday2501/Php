
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem1</title>
</head>
<body>
<?php
function evaluate($name,$attendance,$hygiene,$rating)
{
  if($attendance<80 || $hygiene<50 || $rating<2)
  {
     echo $name ,"---You are fired from Rojan Kirana Pasal!!--- "; 
    
  }

  else
  {
      echo "Not fired for now!!!";
  }
}
$name="Kusal Karki";
$attendance=20;
$hygiene=70;
$rating=3;
evaluate($name,$attendance,$hygiene,$rating)
?> 
</body>
</html>