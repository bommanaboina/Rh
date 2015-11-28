<?php

$connect=mysql_connect("localhost","root","");
mysql_select_db("zoom4web",$connect);
$sql="create table if not exists Marks (`id` int(3) primary key auto_increment,`subject1` varchar(40) not null,`subject2` varchar(40)  not null,`subject3` varchar(40)  not null,`subject4` varchar(40) not null,`subject5` varchar(50) not null,`subject6` varchar(40) not null,`customerid` int(10) not null)";
$query=mysql_query($sql);
?>