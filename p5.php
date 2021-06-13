
<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic operations</title>
</head>
 
<body>
    <h1>
        ARITHMETIC OPERATIONS   </h1>
 
    <h3>Option-1 = Addition</h3>
    <h3>Option-2 = Subtraction</h3>
    <h3>Option-3 = Multiplication</h3>
    <h3>Option-4 = Division</h3>
     
    <form method="post">
        <table border="0">
            <tr>
                <!-- Taking value 1 in an text box -->
                <td> <input type="text" name="num1"
                    value="" placeholder="Enter value 1"/>
                </td>
            </tr>
 
            <tr>
            <!-- Taking value 1 in an text box -->
            <td> <input type="text" name="num2" value=""
                    placeholder="Enter value 2"/>
                </td>
            </tr>
 
            <tr>
                <!-- Taking option in an text box -->
                <td> <input type="text" name="option" value=""
                    placeholder="Enter option 1-4 only"/>
                </td>
            </tr>
 
            <tr>
                <td> <input type="submit" name="submit"
                    value="Submit"/>
                </td>
            </tr>
        </table>
    </form>
 
<?php
 
// Checking submit condition
if(isset($_POST['submit'])) {
 
    // Taking first number from the
    // form data to variable 'a'
    $a = $_POST['num1'];
 
    // Taking second number from the
    // form data to a variable 'b'
    $b = $_POST['num2'];
 
    // Taking option from the form
    // data to a variable 'ch'
    $ch = $_POST['option'];
 
    switch($ch) {
        case 1:
 
            // Execute addition operation
            // when option 1 is given
            $r = $a + $b;
            echo " Addition of two numbers = " . $r ;
            break;
 
        case 2:
 
            // Executing subtraction operation
            // when option 2 is given
            $r = $a - $b;
            echo " Subtraction  of two numbers= " . $r ;
            break;
 
        case 3:
 
            // Executing multiplication operation
            // when option 3 is given
            $r = $a * $b;
            echo " Multiplication of two numbers = " . $r ;
            break;
 
        case 4:
 
            // Executing division operation
            // when option 4 is given
            $r = $a / $b;
            echo " Division of two numbers = " . $r ;
            break;
 
        default:
 
            // When 1 to 4 option is not given
            // then this condition is executed
            echo ("invalid option\n");
    }
     
    return 0;
}
?>
</body>
</html>