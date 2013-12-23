<?php
 
include_once(WWWROOT.'\libs\Smarty.class.php');
class basicmodel{
public $smarty;
function basicmodel(){
	  $this->TPM = new Smarty();  //建立smarty实例对象$smarty
      //$smarty->templates("./templates"); //设置模板目录
     // $smarty->templates_c("./templates_c"); //设置编译目录
      
      //----------------------------------------------------
      //左右边界符，默认为{}，但实际应用当中容易与JavaScript
      //相冲突，所以建议设成<{}>或其它。
      //----------------------------------------------------
     // $smarty->left_delimiter = "{"; 
     // $smarty->right_delimiter = "}";

      //$smarty->assign("name", "李晓军"); //进行模板变量替换
      
      //编译并显示位于./templates下的index.tpl模板
     // $smarty->display("index.tpl"); 


}

}
?>