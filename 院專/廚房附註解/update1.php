<?php
	//上傳 出餐=1的值給SQL 收尋出指定的訂單編號

	//接收資料
	$ID=$_GET['ID'];
	
	
	
	// 建立連線－mysqli_connect("MySQL伺服器", "帳號", "密碼", "資料庫")
	$con = mysqli_connect("localhost","u112","239342","u112");
	mysqli_query($con, "SET NAMES UTF8");

	// 檢驗連線結果
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	
	$sql = "UPDATE `訂單` SET `出餐` = 1 WHERE 訂單編號 = $ID ";//傳回資料庫  變數是ID值
	$result = mysqli_query($con, $sql);


	
	
	// 結束連線
	mysqli_close($con);
	header('Location: http://120.119.80.13/~u112/COOKCHAO2.html');
?>