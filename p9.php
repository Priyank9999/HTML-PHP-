<html>
<head>
    <title>EMPLOYEE</title>
    <script type="text/javascript">
function findselected(val) { 
    var cat = val;
   if (cat == "part_time") {
      document.getElementById("hours").disabled = false;
   } else {
     document.getElementById("hours").disabled=true;
   }
} 
</script> 
</head>
<body>
<center>
     <h1>
        Employee form
    </h1>
     
    <form method="post" enctype="multipart/form-data" action="p9.php">
        <table border="1">            
            <tr>
                <td>Photo</td><td><input type="file" name="file" required /></td>
            </tr>
            <tr>
                <td>Employee No</td><td><input type="text" name="eno" required /></td>
            </tr>
            <tr>
                <td>First Name</td><td><input type="text" name="fname" required/></td>
            </tr>
            <tr>
                <td>Last Name</td><td><input type="text" name="lname" required /></td>
            </tr>
            <tr>
                <td>Address</td><td><textarea name="address" required></textarea></td>
            </tr>
            <tr>
                <td>Gender</td><td><input type="radio" name="gender"  value="male"/>Male
                    <input type="radio" name="gender"  value="female"/>Female</td>
            </tr>
            <tr>
                <td>Designation</td><td><input type="text" name="desig" required/></td>
            </tr>
            <tr>
                <td>Contact Number</td><td><input type="number" name="phone" required/></td>
            </tr>
            <tr>
                <td>Employee Category</td><td><input type="radio" name="cat" id="cat" value="part_time"  onChange="findselected(this.value)"/>Part Time
                    <input type="radio" name="cat"  id="cat" value="full_time"  onChange="findselected(this.value)" />Full Time
                    <input type="radio" name="cat"  id="cat" value="contract"   onChange="findselected(this.value)"/>Contract</td>
            </tr>
            <tr id="hrs" >
                <td>Number Of Hours</td><td><input type="text" name="hours"  id="hours" value="0"  disabled /></td>
            </tr>
            <tr>
                <td>Basic Salary</td><td><input type="number" name="salary" required/></td>
            </tr>
            <tr>
              
<td> <input type="submit" name="submit" value="Submit"/>
		<input type="reset" name="reset" value="reset"/></td>
            </tr>
        </table>
    </form>
<center><h2>Employee Details</h2></center>
		

<?php
$photo = '';   

    if(isset($_POST['submit']))  
    {   
		$filepath="image/" .$_FILES["file"]["name"];
 	  if(move_uploaded_file($_FILES["file"]["tmp_name"],$filepath))
	  {
		echo"<img src=".$filepath." height=200 width=300/>";
	  }
	  else
	  {
		  echo "Error!!";
}
        $cat = $_POST['cat']; 
        $basic = $_POST['salary'];
	 $eno = $_POST['eno'];


	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	
	 $address = $_POST['address'];
	 $desig = $_POST['desig'];
        $salary=0;  
        $da=0;
        $hra=0;
        $pf=0;
        $tax=0;
        if ($cat == 'part_time')
        {

        $hrs = $_POST['hours'];
            $salary = $hrs * 100;
        }
        elseif ($cat == 'full_time')
        {
            
            if($basic < 1000){

            $da= $basic * 0.45;
            $hra= $basic * 0.10;
            $pf=$basic * 0;
            $tax=$basic * 0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            elseif($basic < 5000 and $basic >=1000){
                            
            $da= $basic * 0.75;
            $hra= $basic * 0.20;
            $pf=1200;
            $tax=$basic * 0.05;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            elseif($basic > 5000){
                            
            $da= $basic * 0.90;
            $hra= $basic * 0.30;
            $pf=$basic * 0.05;
            $tax=$basic * 0.15;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
        }
        elseif ($cat == 'contract')
        {
            
            if($basic < 5000){

            $da= 200;
            $hra= 0;
            $tax=0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $tax;
            }
            elseif($basic > 5000 and $basic <=25000){
                            
            $da= $basic * 0.15;
            $hra= 1000;
            $tax=$basic * 0.03;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
            elseif($basic > 25000){
                            
            $da= $basic * 0.20;
            $hra= $basic * 0.00;
            $tax=$basic * 0.09;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
        }
        if($cat == 'part_time'){
	echo "</br>";
	echo "Employee number: $eno";
	echo "</br>";
	echo "First name: $fname";
	echo "</br>";
	echo "Last name: $lname";
	echo "</br>";
	echo "address: $address";
	echo "</br>";
	echo "Designation: $desig";
	echo "</br>";
        echo "Basic Salary is $basic"; 
        echo "</br>";
        echo " Salary is $salary";          
        }
        elseif($cat == 'full_time'){
	echo "</br>";
	echo "Employee number: $eno";
	echo "</br>";
	echo "First name: $fname";
	echo "</br>";
	echo "Last name: $lname";
	echo "</br>";
	echo "address: $address";
	echo "</br>";
	echo "Designation: $desig";
	echo "</br>";
        echo " Basic Salary is $basic"; 
        echo "</br>";
        echo " DA is $da"; 
        echo "</br>";        
        echo " HRA is $hra"; 
        echo "</br>";
        echo " PF is $pf"; 
        echo "</br>";
        echo " Tax is $tax"; 
        echo "</br>";
        echo " Gross Salary is $gross"; 
        echo "</br>";
        echo " Net Salary is $salary"; 
        echo "</br>";            
        }
        elseif($cat == 'contract'){
	echo "</br>";
	echo "Employee number: $eno";
	echo "</br>";
	echo "First name: $fname";
	echo "</br>";
	echo "Last name: $lname";
	echo "</br>";
	echo "address: $address";
	echo "</br>";
	echo "Designation: $desig";
	echo "</br>";
        echo " Basic Salary is $basic"; 
        echo "</br>";
        echo " DA is $da"; 
        echo "</br>";        
        echo " HRA is $hra"; 
        echo "</br>";
        echo " Tax is $tax"; 
        echo "</br>";
        echo " Gross Salary is $gross"; 
        echo "</br>";
        echo " Net Salary is $salary"; 
        echo "</br>";            
        }
    }     
?> 
</center>
</body>
</html>

