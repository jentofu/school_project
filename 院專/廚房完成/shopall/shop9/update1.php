<?php
	//接收資料
	$ID=$_GET['ID'];
	//check echo $zip.$name;
	
	
	// 建立連線－mysqli_connect("MySQL伺服器", "帳號", "密碼", "資料庫")
	$con = mysqli_connect("localhost","u112","239342","u112");
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
	$sql = "UPDATE `訂單` SET `出餐` = 1 WHERE 訂單編號 = $ID ";
	$result = mysqli_query($con, $sql);


	
	
	// 結束連線
	mysqli_close($con);
	header('Location: http://120.119.80.13/~u112/shop9/COOKCHAO2.html');
?>