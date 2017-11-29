<?php

// $arr = array(23,45,21,56,78,34);
// $num = count($arr);
// for($i=0; $i < $num-1; $i++){
// 	for($j=0;$j<$num-$i-1;$j++){
// 		if($arr[$j] > $arr[$j+1] ){
// 			$tmp = $arr[$j+1];
// 			$arr[$j+1] = $arr[$j];
// 			$arr[$j] =$tmp;
// 		}
// 	}
// }
// var_dump($arr);

// $arr=array(23,5,26,4,9,85,10,2,55,44,21,39,11,16,55,88,421,226,588);
// $n =count($arr);
// //echo $n;
// for($h=0;$h<$n-1;$h++){//外层循环n-1 
// 	for($i=0;$i<$n-$h-1;$i++){  
// 		if($arr[$i]>$arr[$i+1]){//判断数组大小，颠倒位置 
// 		    $kong=$arr[$i+1];  
// 			$arr[$i+1]=$arr[$i]; 
// 			$arr[$i]=$kong; 
// 		} 
// 	}
// }
// var_dump($arr);


$con = mysql_connect('localhost','root','root');
mysql_select_db('db');
$res = mysql_query('select * from user where id = 1');
while($res = mysql_fetch_array($res)){
	echo $res['id'].$res['username'];
}



