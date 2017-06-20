<?php header('Refresh: 10');
	// 建立連線－mysqli_connect("MySQL伺服器", "帳號", "密碼", "資料庫")
	$con = mysqli_connect("localhost","u112","239342","u112");
	mysqli_query($con, "SET NAMES UTF8");

	// 檢驗連線結果
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	// SQL查詢
	// 商品 資料表：
	// +-------+--------+
	// |欄位名 |欄位說明|
	// +-------+--------+
	// |名稱   |滷排骨便當  |
	// +-------+--------+	
	// |價錢   |65      |
	// +-------+--------+	
	// |圖片檔 |http://120.119.80.13/~u112/image/t101.jpg|
	// +
	$sql = 'SELECT  `名稱`, `價錢`, `圖檔名稱` FROM `商品` WHERE 1';
	if ($result = mysqli_query($con, $sql)) 
	{
		// 循環取出所有資料紀錄並存放於陣列
		while($row = mysqli_fetch_array($result))
		{
			$array[] = array($row['名稱'], $row['價錢'],$row['圖檔名稱']);
		}
		
		// 傳回JSON格式資料
		echo json_encode($array);

		// 釋放記憶體
		mysqli_free_result($result);
	}
	
	// 結束連線
	mysqli_close($con);
?>