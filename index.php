<?php
$dirName = ["content", "img"];
for($i=0;$i<count($dirName);$i++){
	if(!is_dir($dirName[$i])){
		mkdir($dirName[$i]);
	}
}

$dirp = opendir($dirName[0]);				//$dirName=["content","img"]에서 content는 배열의 0위치이므로 content폴더를 의미
print "<h3>그림일기</h3>";
print "<a href=write.php>일기쓰기</a><br><br>";
while($file=readdir($dirp)){
 	$fname =$file;
 	if($fname!="." && $fname!=".."){		//Run했을시에 '.','..'을 제외한 것들만 출력
 		print "<a href=read.php?fname=$fname </a>".$fname."<br>";		
 		//$fname의 파일명을 가지고 fname의 링크를 걸어 get방식으로 보내요   
	}
 }
 closedir($dirp);
?>
