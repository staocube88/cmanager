<?php
$host="db";
		$uname="root";
		$pas="";
		$db_name="cman";
		$tbl_name="admin";
		
		@mysqli_connect("$host","$uname","$pas") or die ("cannot connect");
		mysqli_select_db("$db_name") or die ("cannot select db");
		?>