<?php
	$conn = mysql_connect("localhost","root","root");
	mysql_select_db("jc",$conn);
	$a = $_POST["news"];
	$sql ="insert into base(title) values('$a')";
	$result = mysql_query($sql);
	if($result > 0)
	{
		echo "1";
	}
?>
