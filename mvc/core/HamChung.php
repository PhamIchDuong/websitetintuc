<?php
function stripUnicode($str){
	if(!$str) return false;
	$unicode = array(
		'a'=> 'á|à|ã|ạ|ả|ắ|ằ|ẵ|ẳ|ặ|ấ|ầ|ẫ|ẩ|ậ|ă|â',
		'A'=> 'Á|À|Ã|Ạ|Ả|Ắ|Ằ|Ẵ|Ẳ|Ặ|Ấ|Ầ|Ẫ|Ẩ|Ậ|Ă|Â',
		'D'=>'Đ',
		'E'=>'É|È|Ẻ|Ẹ|Ẽ|Ế|Ề|Ễ|Ể|Ệ|Ê',
		'I'=>'Í|Ì|Ỉ|Ị|Ĩ',
		'O'=> 'Ó|Ò|Õ|Ọ|Ỏ|Ớ|Ờ|Ỡ|Ở|Ợ|Ố|Ồ|Ỗ|Ổ|Ộ|Ơ|Ô',
		'U'=>'Ú|Ù|Ũ|Ủ|Ụ|Ứ|Ừ|Ữ|Ử|Ự|Ư',
		'Y'=>'Ý|Ỳ|Ỷ|Ỵ|Ỹ',
		'd'=>'đ',
		'e'=>'é|è|ẻ|ẹ|ẽ|ế|ề|ễ|ể|ệ|ê',
		'i'=>'í|ì|ỉ|ị|ĩ',
		'o'=> 'ó|ò|õ|ọ|ỏ|ớ|ờ|ỡ|ở|ợ|ố|ồ|ỗ|ổ|ộ|ơ|ô',
		'u'=>'ú|ù|ũ|ủ|ụ|ứ|ừ|ữ|ử|ự|ư',
		'y'=>'ý|ỳ|ỷ|ỵ|ỹ'
	);
	foreach ($unicode as $khongdau => $codau) {
		# code...
		$arr = explode("|", $codau);
		$str = str_replace($arr, $khongdau, $str);
	}
	return $str;
}

function changeTitle($str){
	$str = trim($str);
	if($str=="") return "";
	$str = str_replace('"', '', $str);
	$str = str_replace("'", '', $str);
	$str = stripUnicode($str);
	$str = mb_convert_case($str,MB_CASE_TITLE,'utf-8');
	$str = str_replace(' ', '-', $str);
	return $str;
}

?>