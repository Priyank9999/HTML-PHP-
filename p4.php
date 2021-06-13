<html>  
<body>  
 <form method="post">  
 Enter the Number:  
   <input type="number" name="number">  
   <input type="submit" value="Submit">  
  </form>  
</body>  
</html>  
<?php
if($_POST)  
{
$num = $_POST['number'];
$x = $num;  
$total = 0;    
while( $x != 0 )  
{  
$rem = $x % 10;  
$total = $total + ( $rem * $rem * $rem );  
$x = $x / 10;  
}  
if( $num == $total )  
{  
echo "Yes $num is an Armstrong number";  
}  
else  
{  
echo "No $num is not an armstrong number";  
} 
} 
?> 