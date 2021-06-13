<html>
<head>
<title>Item Bill</title>
</head>
<body>
<form action="p11bill.php" method="post">
<table border="1">
<tr>
	<th colspan="2">Item Store</th>
</tr>
<tr>
	<td>Enter the item names:</td>
	<td><input type="text" name="item" required></td>
</tr>
<tr>
	<td>Enter the item price:</td>
	<td><input type="text" name="price" required></td>
</tr>
<tr>
	<td><input type="submit" name="store" value="Store"></td>
	<td><input type="reset" value="Reset"></td>
</tr>
</table>
</form>
</body>
</html>