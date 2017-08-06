<?php
$fname = $_POST['d'].".txt";
$dirp = opendir("content");
$flag = false;
while($file=readdir($dirp)){
	if($fname == $file){
		$flag = true;
	}
}
if($flag){
	print "중복된 파일명";
}else{
	print "사용가능한 파일명";
	print "<script> alert('".$fname."');opener.document.f1.d.value='".$fname."';self.close(); </script>";
}
closedir($dirp);
?>