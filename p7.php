

<!DOCTYPE html>
<head>
	<title>Electricity Bill</title>
</head>
<body>
	<h1>Electricity Bill</h1>

<form action="" method="post">
Enter current reading: <br/><input type="text" name="cur"/><br/>
Enter previous reading :<br/><input type="text" name="prev"/><br/>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
if(isset($_POST['submit']))
{
$cu = $_POST['cur'];
$pu = $_POST['prev'];
$units=$cu-$pu;

if ($units<100)
                $bill = $units*3;

else if($units>=100 && $units<200)
		$bill = $units*4;
else if($units>=200 && $units<300)
		$bill = $units*5;
else
		$bill = $units*6;
echo "Electricity bill: ".$bill;

}
?>
</body>
</html>