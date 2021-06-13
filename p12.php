<?php
$msg = '';
$item_sl = $item_name = $item_price = $item_code = '';
	if(isset($_POST['submit'])) {
		$option = $_POST['option'];
		if($option == '1')
		{
			$item_sl = '101';
			$item_name = 'Book';
			$item_price = '50';
			$item_code = 'i101';
		}
		elseif ($option == '2') {
			$item_sl = '102';
			$item_name = 'Pen';
			$item_price = '10';
			$item_code = 'i102';
		}
		elseif ($option == '3') {
			$item_sl = '103';
			$item_name = 'Mask';
			$item_price = '150';
			$item_code = 'i103';
		}
	}
?>
<?php
$qty = '';
$item_total = '';
	if(isset($_POST['bill'])) {
		$qty = $_POST['qty'];
		$item_sl = $_POST['sl_num'];
		$item_name = $_POST['item_name'];
		$item_price = $_POST['item_price'];
		$item_code = $_POST['item_code'];
		$item_total = $qty * $item_price;
	}
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>bill</title>
</head>
<body>
	
		<form  method="POST">
			<h2>Choose your Item</h2>
			<select  name="option">
    		<option value="" disabled selected>Choose your option</option>
    		<option value="1">Book</option>
   			<option value="2">Pen</option>
   			<option value="3">Mask</option>
  </select>
  <br>
  <br>
  <input  type="submit" name="submit">
  <br>
  <br>
  <br>
		</form>
	
	
				<h2>Item Info</h2>

		<table border="1">
			<tr >
				<td>Description</td>
				<td>Values</td>
			</tr>
			<tr>
			<td>SL.Number</td>
			<form method="POST">
			<td>
				<input  type="text" name="sl_num" value="<?php echo $item_sl; ?>" readonly>
			</td>

			</tr>
			<tr>
				<td>Item Name</td>
				<td><input  type="text" name="item_name" value="<?php echo $item_name; ?>" readonly></td>
			</tr>
			<tr>
			<td>Item Price</td>
				<td>
				<input  type="text" name="item_price" value="<?php echo $item_price; ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Item Code</td>
				<td><input  type="text" name="item_code" value="<?php echo $item_code; ?>" readonly></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input  type="text" name="qty"></td>
			</tr>
			<br>
		</table>
		<br>
		<input  type="submit" name="bill" value="bill">
		<br><br><br>
		</form>
	

	<h2>Bill</h2>
		<table border="1">
			<tr >
				<th>Item Name</th>
				<th>Item Code</th>
				<th>Item Price</th>
				<th>Quantity</th>
				<th>Date of purchase</th>
				<th>Total Amount</th>
			</tr>
			<tr>
				<td><?php echo $item_name; ?></td>
				<td><?php echo $item_code; ?></td>
				<td><?php echo $item_price; ?></td>
				<td><?php echo $qty; ?></td>
				<td><?php echo date("Y/m/d"); ?></td>
				<td><?php echo $item_total; ?></td>
			</tr>
		</table>
		<br>
		<br>
	
	<br>
	<br>
	<br>
	<br>
</body>	
</html>


