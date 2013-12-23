<?php
class mvc{
public $contrl;
public $action;
function run(){
$this->analisys();
if(!file_exists(WWWROOT."\\model\\".$this->contrl.".class.php")){exit("类文件不存在");}
require(WWWROOT."\\model\\".$this->contrl.".class.php");
$contrl=$this->contrl;
$action=$this->action;
$model=new $contrl();
$model->$action();
}
function analisys(){
global $c;
if(!isset($_GET['contrl'])){
$this->contrl=$_GET['contrl']=$c['contrl'];
}else{
$this->contrl=$_GET['contrl'];
}
if(!isset($_GET['action'])){
$this->action=$_GET['action']=$c['action'];
}else{
$this->action=$_GET['action'];
}
}
}

?>