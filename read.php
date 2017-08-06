<?php
$fname=$_GET['fname'];
$ffname="content/".$fname;
$str=file_get_contents($ffname);
// $arr=explode("img=", $str);
// $img =$arr[1];
// $str =$arr[0];

$arr=explode("=", $str);
$img=$arr[1];
$str=str_replace('img', '', $arr[0]);
?>

<html>
<body>
<h3><?php print $fname;?></h3>
<img src="img/<?php print $img;?>" style="width:200;height:150"><br>
<textarea rows="15" cols="45"><?php print $str;?></textarea><br>
</body>
</html>
