<?php
	//接收資料
	$zip=$_POST['zip'];
	$name=$_POST['name'];
	//check echo $zip.$name;
	
	
	// 建立連線－mysqli_connect("MySQL伺服器", "帳號", "密碼", "資料庫")
	$con = mysqli_connect("localhost","test","test","test");
	mysqli_query($con, "SET NAMES UTF8");

	// 檢驗連線結果
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	// SQL查詢
	// KAOHSIUNG資料表：
	// +-------+--------+
	// |欄位名 |欄位說明|
	// +-------+--------+
	// |SECTION|行政區  |
	// +-------+--------+	
	// |ZIP    |郵遞區號|
	// +-------+--------+	
	$sql = "INSERT INTO `KAOHSIUNG`(`ZIP`, `SECTION`) VALUES ('$zip','$name')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	
	
	// 結束連線
	mysqli_close($con);
?>