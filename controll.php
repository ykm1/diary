<?php
//날짜 입력값, 이미지, 내용 가져오기
// $fname=$_POST['d'];
// $img="img=".$_POST['imgs'];
// $content=$_POST['content'];

// $ffname="content/".$fname;

// $fp = fopen($ffname, "w");
// fwrite($fp,$content);
// fwrite($fp,$img);
// fclose($fp);
// header("Location:index.php");			

//페이지이동 
//-서버내에서)서버페이지에서 처리한 정보를 담았다 a태그나 location으로
//-클라이이언트한테 요청)header:리다이렉션으로 클라이언트에게 새 요청(계속적인 반복X)

$fname=$_POST['d'];
$imgName=$_POST['imgs'];
$content=$_POST['content'];
$content2=$content."img=".$imgName;
$ffname="content/".$fname;

$fp = fopen($ffname, "w");
fwrite($fp,$content2);
fclose($fp);
header("Location:index.php");
?>
