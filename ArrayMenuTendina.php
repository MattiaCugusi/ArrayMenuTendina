<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array menu a tendina</title>
</head>
<body>


<select name="film">

<?php
 $film=["Avatar","Titanic","Star Wars","Jurassic World","The Avengers"];

 for ($i=0; $i<count($film); $i++){
   echo "<option name='filmpreferito' value='f' . $i+1 . '>$film[$i]</option>";
 }

?>

</select>

    
</body>
</html>