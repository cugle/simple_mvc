<?php
include_once(WWWROOT.'\model\basicmodel.class.php');
class home extends basicmodel{
 
function index(){

      $this->TPM->assign("name", "��==��"); //����ģ������滻
      
      //���벢��ʾλ��./templates�µ�index.tplģ��
      $this->TPM->display("index.tpl"); 


}
function test(){
 
	   
      $this->TPM->assign("name", "��=��"); //����ģ������滻
      
      //���벢��ʾλ��./templates�µ�index.tplģ��
      $this->TPM->display("index.tpl"); 
	  
}

}
?>