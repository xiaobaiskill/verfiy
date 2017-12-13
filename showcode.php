<?php
require_once 'VerfiyCode.class.php';
$verfiy = new VerfiyCode(array('noise_type'=>2,'use_zh'=>false,'use_line'=>true,'use_zh'=>true));

if($_GET)
{
	if($verfiy->check($_GET['code']))
	{
		echo 'ok';
	} else {
		echo 'no';
	}
}else{
	$verfiy->create();	
}

?>