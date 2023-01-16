<?php
echo "your response has been submitted";
$name=$_POST["name"];
?>

<?php
$file=fopen("formdata.txt", "a");
fwrite($file,$name);
fclose($file);
?>
