<?php
 
include_once(WWWROOT.'\libs\Smarty.class.php');
class basicmodel{
public $smarty;
function basicmodel(){
	  $this->TPM = new Smarty();  //����smartyʵ������$smarty
      //$smarty->templates("./templates"); //����ģ��Ŀ¼
     // $smarty->templates_c("./templates_c"); //���ñ���Ŀ¼
      
      //----------------------------------------------------
      //���ұ߽����Ĭ��Ϊ{}����ʵ��Ӧ�õ���������JavaScript
      //���ͻ�����Խ������<{}>��������
      //----------------------------------------------------
     // $smarty->left_delimiter = "{"; 
     // $smarty->right_delimiter = "}";

      //$smarty->assign("name", "������"); //����ģ������滻
      
      //���벢��ʾλ��./templates�µ�index.tplģ��
     // $smarty->display("index.tpl"); 


}

}
?>