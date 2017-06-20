<?php
	//接收資料
	$t101b=$_POST['t101b'];
	$t102b=$_POST['t102b'];
	$t103b=$_POST['t103b'];
	$t104b=$_POST['t104b'];
	$t105b=$_POST['t105b'];
	$t106b=$_POST['t106b'];
	$t107b=$_POST['t107b'];
	$t108b=$_POST['t108b'];
	$t109b=$_POST['t109b'];
	$t110b=$_POST['t110b'];
	$t111b=$_POST['t111b'];
	$t112b=$_POST['t112b'];
	$t201b=$_POST['t201b'];
	$t202b=$_POST['t202b'];
	$t203b=$_POST['t203b'];
	$t204b=$_POST['t204b'];
	$t205b=$_POST['t205b'];
	$t206b=$_POST['t206b'];
	$t207b=$_POST['t207b'];
	$t208b=$_POST['t208b'];
	$t209b=$_POST['t209b'];
	$t210b=$_POST['t210b'];
	$t211b=$_POST['t211b'];
	$t212b=$_POST['t212b'];
	$t301b=$_POST['t301b'];
	$t302b=$_POST['t302b'];
	$t303b=$_POST['t303b'];
	$t304b=$_POST['t304b'];
	$t305b=$_POST['t305b'];
	$t306b=$_POST['t306b'];
	$t307b=$_POST['t307b'];
	$t308b=$_POST['t308b'];
	$t309b=$_POST['t309b'];
	$t310b=$_POST['t310b'];
	$t311b=$_POST['t311b'];
	$t312b=$_POST['t312b'];
	$t401b=$_POST['t401b'];
	$t402b=$_POST['t402b'];
	$t403b=$_POST['t403b'];
	$t404b=$_POST['t404b'];
	$t405b=$_POST['t405b'];
	$t406b=$_POST['t406b'];
	$t407b=$_POST['t407b'];
	$t408b=$_POST['t408b'];
	$t409b=$_POST['t409b'];
	$t410b=$_POST['t410b'];
	$t411b=$_POST['t411b'];
	$t412b=$_POST['t412b'];
	$t501b=$_POST['t501b'];
	$t502b=$_POST['t502b'];
	$t503b=$_POST['t503b'];
	$t504b=$_POST['t504b'];
	$t505b=$_POST['t505b'];
	$t506b=$_POST['t506b'];
	$t507b=$_POST['t507b'];
	$t508b=$_POST['t508b'];
	$t509b=$_POST['t509b'];
	$t510b=$_POST['t510b'];
	$t511b=$_POST['t511b'];
	$t512b=$_POST['t512b'];
	$t601b=$_POST['t601b'];
	$t602b=$_POST['t602b'];
	$t603b=$_POST['t603b'];
	$t604b=$_POST['t604b'];
	$t605b=$_POST['t605b'];
	$t606b=$_POST['t606b'];
	$t607b=$_POST['t607b'];
	$t608b=$_POST['t608b'];
	$t609b=$_POST['t609b'];
	$t610b=$_POST['t610b'];
	$t611b=$_POST['t611b'];
	$t612b=$_POST['t612b'];
	$t701b=$_POST['t701b'];
	$t702b=$_POST['t702b'];
	$t703b=$_POST['t703b'];
	$t704b=$_POST['t704b'];
	$t705b=$_POST['t705b'];
	$t706b=$_POST['t706b'];
	$t707b=$_POST['t707b'];
	$t708b=$_POST['t708b'];
	$t709b=$_POST['t709b'];
	$t710b=$_POST['t710b'];
	$t711b=$_POST['t711b'];
	$t712b=$_POST['t712b'];
	$t801b=$_POST['t801b'];
	$t802b=$_POST['t802b'];
	$t803b=$_POST['t803b'];
	$t804b=$_POST['t804b'];
	$t805b=$_POST['t805b'];
	$t806b=$_POST['t806b'];
	$t807b=$_POST['t807b'];
	$t808b=$_POST['t808b'];
	$t809b=$_POST['t809b'];
	$t810b=$_POST['t810b'];
	$t811b=$_POST['t811b'];
	$t812b=$_POST['t812b'];
	$t901b=$_POST['t901b'];
	$t902b=$_POST['t902b'];
	$t903b=$_POST['t903b'];
	$t904b=$_POST['t904b'];
	$t905b=$_POST['t905b'];
	$t906b=$_POST['t906b'];
	$t907b=$_POST['t907b'];
	$t908b=$_POST['t908b'];
	$t909b=$_POST['t909b'];
	$t910b=$_POST['t910b'];
	$t911b=$_POST['t911b'];
	$t912b=$_POST['t912b'];
	
	
	
	 echo $t101b.$t102b.$t103b.$t104b.$t105b.$t106b.$t107b.$t108b.$t109b.$t110b.$t111b.$t112b;
	
	
	// 建立連線－mysqli_connect("MySQL伺服器", "帳號", "密碼", "資料庫")
	$con = mysqli_connect("localhost","u112","239342","u112");
	mysqli_query($con, "SET NAMES UTF8");

	// 檢驗連線結果
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	// 置入
	// 顧客訂單`資料表：


  
    if($t101b>0)																		//商品1
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t101b','滷排骨便當')";	
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t102b>0)
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t102b','鱈魚便當')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	 if($t103b>0)
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t103b','鯖魚便當')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t104b>0)
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t104b','蔬食便當')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t105b>0)
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t105b','炸排骨便當')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t106b>0)
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t106b','香雞排便當')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t107b>0)
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t107b','炸蝦便當')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t108b>0)
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t108b','控肉便當')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t109b>0)
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t109b','肉燥便當')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t110b>0)
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t110b','三杯雞便當')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t111b>0)
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t111b','炸小雞腿便當')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t112b>0)
	{
	$sql = "INSERT INTO `顧客訂單1`(`數量`,`商品名稱`) VALUES ('$t112b','炸大雞腿便當')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t201b>0)																		//商品2
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t201b','綜合炒飯')";	
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t202b>0)
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t202b','肉絲炒飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t203b>0)
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t203b','蝦仁炒飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t204b>0)
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t204b','蛋炒飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t205b>0)
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t205b','韓式泡菜炒飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t206b>0)
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t206b','鮪魚炒飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t207b>0)
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t207b','沙茶雞肉炒飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t208b>0)
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t208b','沙茶豬肉炒飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t209b>0)
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t209b','沙茶牛肉炒飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t210b>0)
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t210b','咖哩炒飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t211b>0)
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t211b','雞排炒飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t212b>0)
	{
	$sql = "INSERT INTO `顧客訂單2`(`數量`,`商品名稱`) VALUES ('$t212b','火腿蛋炒飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t301b>0)																			//商品3
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t301b','醬油拉麵')";	
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t302b>0)
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t302b','叉燒拉麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t303b>0)
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t303b','豚骨拉麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t304b>0)
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t304b','蔥燒拉麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t305b>0)
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t305b','地獄拉麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t306b>0)
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t306b','味噌拉麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t307b>0)
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t307b','番茄拉麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t308b>0)
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t308b','鹽味拉麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t309b>0)
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t309b','招牌拉麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t310b>0)
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t310b','雞腿拉麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t311b>0)
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t311b','天婦羅拉麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t312b>0)
	{
	$sql = "INSERT INTO `顧客訂單3`(`數量`,`商品名稱`) VALUES ('$t312b','蔬菜拉麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t401b>0)																					//商品4	
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t401b','單層牛肉漢堡套餐')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t402b>0)
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t402b','雙層牛肉漢堡套餐')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t403b>0)
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t403b','炸雞漢堡')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t404b>0)
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t404b','烤雞漢堡')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t405b>0)
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t405b','豬排漢堡')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t406b>0)
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t406b','火腿漢堡')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t407b>0)
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t407b','總匯漢堡')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t408b>0)
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t408b','洋蔥圈')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t409b>0)
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t409b','波浪薯條')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t410b>0)
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t410b','烤雞翅')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t411b>0)
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t411b','雪碧')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t412b>0)
	{
	$sql = "INSERT INTO `顧客訂單4`(`數量`,`商品名稱`) VALUES ('$t412b','可樂')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t501b>0)																					//商品5
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t501b','紅茶')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t502b>0)
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t502b','綠茶')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t503b>0)
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t503b','青茶')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t504b>0)
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t504b','冬瓜茶')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t505b>0)
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t505b','仙草干茶')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t506b>0)
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t506b','珍珠奶茶')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t507b>0)
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t507b','多多綠茶')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t508b>0)
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t508b','烏龍茶')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t509b>0)
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t509b','荔枝奶茶')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t510b>0)
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t510b','豆漿紅茶')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t511b>0)
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t511b','紅茶拿鐵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t512b>0)
	{
	$sql = "INSERT INTO `顧客訂單5`(`數量`,`商品名稱`) VALUES ('$t512b','台灣高山茶')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t601b>0)																		//商品6
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t601b','經典肉醬義大利麵')";	
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t602b>0)
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t602b','青醬蛤蠣義大利麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	 if($t603b>0)
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t603b','白醬蘑菇義大利麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t604b>0)
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t604b','番茄鮮蝦義大利麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t605b>0)
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t605b','燻腸肉醬義大利麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t606b>0)
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t606b','鮮魚青醬義大利麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t607b>0)
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t607b','焗烤肉醬千層麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t608b>0)
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t608b','奶油蔬菜千層麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t609b>0)
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t609b','墨魚義大利麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t610b>0)
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t610b','香蒜培根義大利麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t611b>0)
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t611b','紅醬肉丸義大利麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t612b>0)
	{
	$sql = "INSERT INTO `顧客訂單6`(`數量`,`商品名稱`) VALUES ('$t612b','鮮蝦海鮮燉飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t701b>0)																		//商品7
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t701b','肉燥飯')";	
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t702b>0)
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t702b','雞肉飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	 if($t703b>0)
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t703b','控肉飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t704b>0)
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t704b','筒仔米糕')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t705b>0)
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t705b','碗粿')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t706b>0)
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t706b','清燙空心菜')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t707b>0)
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t707b','蒜泥白肉')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t708b>0)
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t708b','客家小炒')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t709b>0)
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t709b','白斬雞')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t710b>0)
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t710b','高粱香腸')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t711b>0)
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t711b','苦瓜排骨湯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t712b>0)
	{
	$sql = "INSERT INTO `顧客訂單7`(`數量`,`商品名稱`) VALUES ('$t712b','冬瓜蛤蠣湯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t801b>0)																		//商品8
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t801b','鍋燒意麵')";	
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t802b>0)
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t802b','鍋燒雞絲麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t803b>0)
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t803b','鍋燒泡麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t804b>0)
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t804b','肉燥乾麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t805b>0)
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t805b','炸醬拌麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t806b>0)
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t806b','餛飩湯麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t807b>0)
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t807b','鮮肉水餃')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t808b>0)
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t808b','酥香煎餃')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t809b>0)
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t809b','台式小火鍋')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t810b>0)
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t810b','海鮮小火鍋')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t811b>0)
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t811b','泡菜小火鍋')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t812b>0)
	{
	$sql = "INSERT INTO `顧客訂單8`(`數量`,`商品名稱`) VALUES ('$t812b','蔬食小火鍋')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t901b>0)																		//商品9
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t901b','豬肉石鍋拌飯')";	
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t902b>0)
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t902b','雞肉石鍋拌飯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t903b>0)
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t903b','泡菜冷麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t904b>0)
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t904b','炸醬麵')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t905b>0)
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t905b','星星炸雞')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t906b>0)
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t906b','辣炒年糕')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t907b>0)
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t907b','泡菜燒肉片')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t908b>0)
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t908b','海鮮煎餅')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t909b>0)
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t909b','泡麵部隊鍋')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t910b>0)
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t910b','泡菜豆腐鍋')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t911b>0)
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t911b','人參雞湯')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	if($t912b>0)
	{
	$sql = "INSERT INTO `顧客訂單9`(`數量`,`商品名稱`) VALUES ('$t912b','綜合泡菜盤')";
	echo $sql;
	$result = mysqli_query($con, $sql);
	echo $result;
	};
	
	
	
	
	

	
	// 結束連線
	mysqli_close($con);
?>