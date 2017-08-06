<?php
//setter, getter, read, write, flist, delete
class Myfile{
	private $fDir;
	private $imgDir;
	private $fileName;
	private $imgName;
	private $content;
	
	public function __construct(){
		$this->fDir = "contents";
		$this->imgDir = "imgs";
		if(!is_dir($this->fDir)){
			mkdir($this->fDir);
		}
		if(!is_dir($this->imgDir)){
			mkdir($this->imgDir);
		}
	}
	public function setFileName($fileName){
		$this->fileName = $fileName;
	}
	
	public function getFileName(){
		return $this->fileName;
	}
	
	public function setImgName($imgName){
		$this->imgName = $imgName;
	}
	
	public function getImgName(){
		return $this->imgName;
	}
	
	public function setContent($content){
		$this->content = $content;
	}
	public function getContent(){
		return $this->content;
	}

	public function flist($type){
		$dir = "";
		$files = array();						//파일 데이터 목록을 저장할 배열
		if($type==1){		//flist
			$dir = $this->fDir;
		}else if($type==2){		//imglist
			$dir = $this->imgDir;
		}
		$dirp = opendir($dir);
		while($file=readdir($dirp)){
			$fname =$file;
			if($fname!="." && $fname!=".."){
				$files [] = $fname;				//.,..제외한 파일 이름을 위에 files에 넣어줌
			}
		}
		closedir($dirp);
		return $files;
	}
	
	public function read(){
		$str = file_get_contents($this->fDir."/".$this->fileName);		//현재 소스파일과 위치가 다르기 때문에 경로를 지정하여
		$arr = explode("img=", $str);
		$this->content = $arr[0];
		$this->imgName = $arr[1];
	}

	public function write(){
		$result = $this->content."img=".$this->imgName;			//내용뿐만 아니라 컨텐트와 이미지이름을 $result 담는다
		file_put_contents($this->fDir."/".$this->fileName, $result);
	}
	
	public function delete(){
		$flag = $this->check();
		if($flag){
			unlink($this->fDir."/".$this->fileName);
		}
	}
	public function check(){		//체크함수(중복체크할 때도 사용하도록)
		$fname = ($this->fDir."/".$this->fileName);
		if(is_file($fname)){
			return true;
		}else{
			return false;
		}
	}	
}
?>