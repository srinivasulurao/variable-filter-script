<?php

 $post=array("fdsf09ia8'fds9 '-- mcsad<script>alert('hh');</script>",32,4,5,5,56,65,6);
 
 $post=array_map("filter",$post);
 
 function filter($message){
	 
	 $message=htmlentities($message, ENT_COMPAT, 'UTF-8');
	 $search  = array(
'||A11||', '||a22||', '||Ac1||', '||ae1||', '||Ac2||',
'||ae2||', '||Ac3||', '||ae3||', '||Ac4||', '||ae4||',
'||Ac5||', '||ae5||', '||Ac6||', '||ae6||', '||Cc7||',
'||ce7||', '||Ec8||', '||ee8||', '||Ec9||', '||ee9||',
'||Eca||', '||eea||', '||Ecb||', '||eeb||', '||Icc||', 
'||iec||', '||Icd||', '||ied||', '||Ice||', '||iee||',
'||Icf||', '||ief||', '||Nd1||', '||nf1||', '||Od2||', 
'||of2||', '||Od3||', '||of3||', '||Od4||', '||of4||', 
'||Od5||', '||of5||', '||Od6||', '||of6||', '||Od8||',
'||of8||', '||S8a||', '||s9a||', '||Ud9||', '||uf9||', 
'||Uda||', '||ufa||', '||Udb||', '||ufb||', '||Udc||', 
'||ufc||', '||Y9f||', '||yff||', '||Ydd||', '||yfd||', 
'||Z8e||', '||z9e||', '||!a1||', '||?bf||', '||OE8c||', 
'||oe9c||', '||Dd0||', '||df0||','||Pde||', '||pfe||', '||ox151||'
);

$replace = array(
'&#xC0;', '&#xE0;', '&#xC1;', '&#xE1;', '&#xC2;', 
'&#xE2;', '&#xC3;', '&#xE3;', '&#xC4;', '&#xE4;',
'&#xC5;', '&#xE5;', '&#xC6;', '&#xE6;', '&#xC7;', 
'&#xE7;', '&#xC8;', '&#xE8;', '&#xC9;', '&#xE9;', 
'&#xCA;', '&#xEA;', '&#xCB;', '&#xEB;', '&#xCC;', 
'&#xEC;', '&#xCD;', '&#xED;', '&#xCE;', '&#xEE;', 
'&#xCF;', '&#xEF;', '&#xD1;', '&#xF1;', '&#xD2;', 
'&#xF2;', '&#xD3;', '&#xF3;', '&#xD4;', '&#xF4;', 
'&#xD5;', '&#xF5;', '&#xD6;', '&#xF6;', '&#xD8;',
'&#xF8;', '&#x8A;', '&#x9A;', '&#xD9;', '&#xF9;', 
'&#xDA;', '&#xFA;', '&#xDB;', '&#xFB;', '&#xDC;',
'&#xFC;', '&#x9F;', '&#xFF;', '&#xDD;', '&#xFD;', 
'&#x8E;', '&#x9E;', '&#xA1;', '&#xBF;', '&#x8C;', 
'&#x9C;', '&#xD0;', '&#xF0;', '&#xDE;', '&#xFE;', '&#x151;'
);


$message = str_replace($search,$replace,$message);
$message=mysql_real_escape_string($message);

return $message;

}

 echo"<pre>";
 print_r($post);
 echo"<pre>";

 ?>