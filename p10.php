<html>
<head><title>string</title></head>
<body>
<center>
     
    <form method="POST">
		<center><h1>String Operations</h1></center>
		<br>
		<input type="text" name="string" placeholder="Enter Your String" required>
		<br>

		<select name="option">
    		<option value="" disabled selected>Choose your option</option>
    		<option value="1">Reverse the string</option>
   			<option value="2"> length of the string</option>
   			<option value="3">Substring operations</option>
   			<option value="4">Convert to uppercase</option>
   			<option value="5">Convert to lowercase</option>
   			<option value="6">Count
 the number of words.</option>
  </select>
  <br>
  <br>
  <center><input type="submit" name="submit" value="Submit"></center>
	</form>
 
<?php
 
// Checking submit condition
if(isset($_POST['submit'])) {
 
    // Taking first number from the
    // form data to variable 'a'
    $string1 = $_POST['string'];
 
    // Taking option from the form
    // data to a variable 'ch'
    $ch = $_POST['option'];
 
    switch($ch) {
        case 1:
 
            // Execute addition operation
            // when option 1 is given
           echo "Reversed string of the $string1 is " .strrev( $string1 );
            break;
 
        case 2:
 
            // Executing subtraction operation
            // when option 2 is given
            echo "length of the string  $string1 is " .strlen( $string1 );
            break;
 
        case 3:
 
            // Executing multiplication operation
            // when option 3 is given
            echo "substring of the string $string1 is " .substr($string1,3);
            break;
 
        case 4:
 
            // Executing division operation
            // when option 4 is given
           echo "uppercase of the string  $string1 is " .strtoupper( $string1 );
            break;
 
	case 5:
 
            // Executing division operation
            // when option 4 is given
           echo "lowercase of the string  $string1 is " .strtolower( $string1 );
            break;
	 
	case 6:
 
            // Executing division operation
            // when option 4 is given
           echo "number of words in the string  $string1 is " .str_word_count( $string1 );
            break;
	default:
		echo "invalid option";
		break;
    }
     
    return 0;
}
?>
</body>
</html>