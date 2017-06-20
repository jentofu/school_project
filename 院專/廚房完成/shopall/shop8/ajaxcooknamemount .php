<?php header('Refresh: 10');
	// 建立連線－mysqli_connect("MySQL伺服器", "帳號", "密碼", "資料庫")
	$con = mysqli_connect("localhost","u112","239342","u112");
	mysqli_query($con, "SET NAMES UTF8");

	// 檢驗連線結果
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	


$sql = "SELECT `訂單編號` 
	FROM  `訂單` 
	WHERE  `訂單`.`商家編號` =8
	AND  `訂單`.`出餐` =0
	LIMIT 0 , 8";
	
if ($result = mysqli_query($con, $sql)) 
	
	{
		// 循環取出所有資料紀錄並存放於陣列
		while($row = mysqli_fetch_array($result))
		{				//array[0]         
			$array1[] = array($row['訂單編號']);
		}
		
		// 傳回JSON格式資料
		//echo json_encode($array1);

		// 釋放記憶體
		mysqli_free_result($result);
	}	






	
	$sql = 'SELECT `訂單明細`.`訂單編號`, `商品`.`名稱` , `訂單明細`.`數量`
FROM `訂單` join `訂單明細` on `訂單`.`訂單編號` = `訂單明細`.`訂單編號`
join `商品` on `訂單明細`.`商品編號` = `商品`.`商品編號`
where `訂單`.`商家編號` = 8 and `訂單`.`出餐` = 0';


	
if ($result = mysqli_query($con, $sql)) 
	
	{
		// 循環取出所有資料紀錄並存放於陣列
		while($row = mysqli_fetch_array($result))
		{				//array[0]         
			$array2[] = array($row['訂單編號'],$row['名稱'],$row['數量']);
		}
		
		$array3 = array($array1,$array2);
		
		// 傳回JSON格式資料
		echo json_encode($array3);

		// 釋放記憶體
		mysqli_free_result($result);
	}
	
	
	
	
	
	
	
	
	
	
	
	// 結束連線
	mysqli_close($con);
?>