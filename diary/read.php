<html>
<body>
<h3><?php print $this->myfile->getFileName();?></h3>
<img src="imgs/<?php print $this->myfile->getimgName();?>" style="width:200;height:150"><br>
<textarea rows="15" cols="45"><?php print $this->myfile->getContent();?></textarea><br>
<a href="index.php?action=list">목록으로 돌아가기</a>
</body>
</html>