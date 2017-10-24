<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
 function filtersAarr($field,$modelid,$diyarr = array()) {
	
	$fields = getcache('model_field_'.$modelid,'model');
	
	$options = empty($diyarr) ? array_filter( explode("\n",$fields[$field]['options'])) : $diyarr;

	$field_value = intval($_GET[$field]);
	foreach($options as $_k) {
		$v = array_filter(explode("|",$_k));
		$k = trim($v[1]);
		$option[$k]['name'] = $v[0];
		$option[$k]['value'] = $k;
		$option[$k]['url'] = structure_filters_url($field,array($field=>$k),2,$modelid);
		
		$option[$k]['menu'] = $field_value == $k ? '<li class="fl"><a href=javascript:; class="hover">'.$v[0]."</a></li>" : '<li class="fl"><a href='.$option[$k]['url'].'>'.$v[0].'</a></li>' ;
	}
	//$all['name'] = '全部';
	//$all['url'] = structure_filters_url($field,array($field=>''),2,$modelid);
	//$all['menu'] = $field_value == '' ? '<li class="fl"><a href="javascript:;" class="hover">'.$all['name'].'</a></li>' : '<li class="fl" ><a href='.$all['url'].'>'.$all['name'].'</a></li>';

	array_unshift($option,$all);
	return $option;
}

function fieldArr($fieldid){
        $model_field = pc_base::load_model('model_field_model');
        $m = $model_field->get_one(array('fieldid'=>$fieldid)); 
          if(empty($m)) return "0";
          eval("\$setting_m = ".$m[setting].'; ');
          $shuxing = $setting_m[options];
          $shuxing_arr = explode("\n",$shuxing);
          $return=array();
           foreach($shuxing_arr as $_k) {
              $v = explode("|",$_k);
              $k = trim($v[1]);
              $option[$k] = $v[0];
              $return[$k]=  $option[$k];
            }
          return $return;
}
?>