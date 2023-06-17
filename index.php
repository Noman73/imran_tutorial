<?php
 $arr=[
  [12,15,'xyz','imran'],
  [100,15,'rahman','imran',200],
  [12,5005,'hasib','imran',300,'1234'],
 
];
$xvalue='';
foreach($arr as $child_array){
  
  foreach($child_array as $value){
      $xvalue.=' '.strval($value);
  }
  $xvalue.='<br>';
}

echo $xvalue;

?>