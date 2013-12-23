<?php
include_once(WWWROOT.'\model\basicmodel.class.php');
class home extends basicmodel{
 
function index(){

      $this->TPM->assign("name", "李==军"); //进行模板变量替换
      
      //编译并显示位于./templates下的index.tpl模板
      $this->TPM->display("index.tpl"); 


}
function test(){
 
	   
      $this->TPM->assign("name", "李=军"); //进行模板变量替换
      
      //编译并显示位于./templates下的index.tpl模板
      $this->TPM->display("index.tpl"); 
	  
}

}
?>