<?php

$group[] = array('id'=>1,'name'=>'Admin');
$group[] = array('id'=>2,'name'=>'Manager');
$group[] = array('id'=>3,'name'=>'Member');


$member[] = array('id'=> 1,'username' => 'Nguyen Van A','group_id'=>1);
$member[] = array('id'=> 2,'username' => 'Nguyen Van B','group_id'=>1);
$member[] = array('id'=> 3,'username' => 'Nguyen Van C','group_id'=>1);

$member[] = array('id'=> 4,'username' => 'Nguyen Van D','group_id'=>2);
$member[] = array('id'=> 5,'username' => 'Nguyen Van E','group_id'=>2);
$member[] = array('id'=> 6,'username' => 'Nguyen Van F','group_id'=>2);

$member[] = array('id'=> 7,'username' => 'Nguyen Van G','group_id'=>3);
$member[] = array('id'=> 8,'username' => 'Nguyen Van H','group_id'=>3);
$member[] = array('id'=> 9,'username' => 'Nguyen Van I','group_id'=>3); 

$newArr = array();

foreach ($group as $key => $val){
	$newArr[$val['name']] = array();
	foreach($member as $key1 => $info){
		if($val['id'] == $info['group_id']){
			$newArr[$val['name']][] = $info;
		}
	}
	
}

echo "<pre>";
print_r($newArr);
echo "</pre>";