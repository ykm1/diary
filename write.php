<html>
<head>
<script type="text/javascript">
function a(){
	var win=window.open("new.php","","width=150,height=150");		//window.open(URL, name, specs, replace) :팝업창
	alert(window.document.f1.d.value);
	win.document.forms[0].elements[0].value=window.document.f1.d.value;
}
</script>
</head>
<body>
<h3>일기쓰기</h3>
<form name="f1" action="controll.php" method="post">
날짜:<input type="text" name="d">
<input type="button" value="중복체크" onclick="a()"><br><br>
<?php 
$dirp = opendir("img");
while($file=readdir($dirp)){
	$fname =$file;
	if($fname!="." && $fname!=".."){	
	print "<input type=radio name=imgs value=".$fname.">";
	print "<img src=img/".$fname." style='width:30;height:30;'>";
	}
}
closedir($dirp);
?>
<br><br>내용<br>
<textarea name="content" rows="15" cols="45"></textarea>
<input type="submit" value="save">
</form>	
</body>
</html>