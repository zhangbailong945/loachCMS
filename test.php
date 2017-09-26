<?php

$strArray=array('yytyys','abcabccaa','uuuxyy','mommentem');
$countArray=array();
for($i=0;$i<count($strArray);$i++)
{
	//分割数组中的字符串
    $arr=str_split($strArray[$i]);
    //统计不重复字符的次数
    $arr=array_count_values($arr);
    $countArray[]=$arr;
}

function sortArray($array)
{
	for($j=0;$j<count($countArray);$j++)
	{
		
	}	
}


?>