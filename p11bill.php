
<html>
<head>
<title>ITEM BILL</title>
</head>
<body>
<?php
     if($_POST)  
    {   
        $names = $_POST['item']; 
        $price = $_POST['price'];
        $nme = explode(',',$names);
        $x = count($nme);
        $prc = explode(',',$price);

        echo '<body><table border="1">
            <tr>
                <th>Item Name</th>
		<th>Item Price</th>
            </tr>';
            for($i=0;$i<$x;$i++){
    		echo "<tr>";
        	echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
    }
    echo "<tr>";
    echo "</table>";
        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }
        echo 'Total : '.$total;
        $mx= max($prc);
        $ky = array_search($mx, $prc);
        echo '<br>';
        echo 'Costliest Item is: '.$nme[$ky];
        $mn= min($prc);
        $key = array_search($mn, $prc);
        echo '<br>';
        echo 'Cheapest Item is: '.$nme[$key];
}     
?>
<br>
</form>
</body>
</html>
