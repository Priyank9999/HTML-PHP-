
<?php
$msg = '';
$dis = '';
$photo = '';
	if(isset($_POST['submit'])) {
	$filepath="image/" .$_FILES["file"]["name"];
 	  if(move_uploaded_file($_FILES["file"]["tmp_name"],$filepath))
	  {
		echo"<img src=".$filepath." height=200 width=300/>";
	  }
	  else
	  {
		  echo "Error!!";
	}
		
		$first_name = $_POST['first_name'];
		$mid_name = $_POST['mid_name'];
		$last_name = $_POST['last_name'];
		$father_name = $_POST['father_name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$percent = $_POST['percent'];
		$hobbies = $_POST['hobbies'];
		$institute = $_POST['institute'];
		$course_std = $_POST['course_std'];
		$course_now = $_POST['course_now'];
		$dis1 = '<tr><td>First Name: </td>
									  <td>' . $first_name . '</td></tr>
									  <tr><td>Mid Name: </td>
									  <td>' . $mid_name . '</td></tr>
									  <tr><td>Last Name: </td>
									  <td>' . $last_name . '</td></tr>
									  <tr><td>Father Name: </td>
									  <td>' . $father_name . '</td></tr>
									  <tr><td>Address: </td>
									  <td>' . $address . '</td></tr>
									  <tr><td>Email: </td>
									  <td>' . $email . '</td></tr>
									  <tr><td>Contact Number: </td>
									  <td>' . $contact . '</td></tr>
									  <tr><td>DOB: </td>
									  <td>' . $dob . '</td></tr>
									  <tr><td>Gender: </td>
									  <td>' . $gender . '</td></tr>
									  <tr><td>Percentage: </td>
									  <td>' . $percent . '</td></tr>
									  <tr><td>Hobbies: </td>
									  <td>' . $hobbies . '</td></tr>
									  <tr><td>Previous Institute: </td>
									  <td>' . $institute . '</td></tr>
									  <tr><td>Previous Course: </td>
									  <td>' . $course_std . '</td></tr>
									  <tr><td>Course selected: </td>
									  <td>' . $course_now . '</td></tr>';
		if ($course_now == 'MTECH') {
			if($percent > 70)
			{
				if($course_now == 'MTECH' && $course_std == 'BE')
				{
					$dis = $dis1;
				}
				else
				{
					$msg = 'Previous course must be BE';
				}

			}
			else
			{
				$msg = 'Percentage should be more than 70% for ' . $course_now;
			}
		}
		elseif ($course_now == 'MCA') {
			if($percent > 70)
			{
				if($course_now == 'MCA' && ($course_std == 'BSC' || $course_std == 'BCA'))
				{
					$dis = $dis1;
				}
				else
				{
					$msg = 'Previous course must be BCA or BSC ';
				}
			}	
			else
			{
				$msg = 'Percentage should be more than 70% for ' . $course_now;
			}
		}
		elseif($course_now == 'MBA')
		{
			if($percent > 60)
			{
				$dis = $dis1;

			}
			else
			{
				$msg = 'Percentage should be more than 60% for MBA';
			}
		}
		elseif($course_now == 'MSC')
		{
			if($percent > 40)
			{
				if($course_now == 'MSC' && ($course_std == 'BSC' || $course_std == 'BCA' ))
				{
					$dis = $dis1;
				}
				else
				{
					$msg = 'Previous course must be BSC or BCA ';
				}
			}
			else
			{
				$msg = 'Percentage should be more than 40% for MSC';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student details</title>
</head>
<body>
		<form  method="POST" enctype="multipart/form-data" action="p8.php">
			<h2>Fill the form</h2>
	<table border="1">
		<tr>
			<td>First name:</td><td><input  type="text" name="first_name"  required></td>
			</tr>
		<tr>
			<td>Middle name:</td><td>
			<input  type="text" name="mid_name"  required></td>
			</tr>
		<tr>
			<td>Last name:</td><td>
			<input  type="text" name="last_name"  required></td>
			</tr>
		<tr>
			<td>Photo:</td><td>
			<input  type="file" name="file" required></td>
			</tr>
		<tr>
			<td>Father name:</td><td>
			<input  type="text" name="father_name" required></td>
			</tr>
		<tr>
			<td>Address:</td><td>
			<textarea  type="text" name="address"  required></textarea></td>
			</tr>
		<tr>
			<td>Phone number:</td><td>
			<input  type="text" name="contact"  required></td>
			</tr>
		<tr>
			<td>Email-id:</td><td>
			<input  type="email" name="email"  required></td>
			</tr>
		<tr>
			<td>Date of birth:</td><td>
			<input  type="date" name="dob" required></td>
			</tr>
		<tr>
                <td>Gender</td><td><input type="radio" name="gender"  value="male"/>Male
                    <input type="radio" name="gender"  value="female"/>Female</td>
               </tr>
		<tr>
			<td>Percentage:</td><td>
			<input  type="text" name="percent"  required></td>
			</tr>
		<tr>
			<td>Hobbies:</td><td>
			<input  type="checkbox" name="hobbies" value="Drawing">
			<label>drawing</label>
			<input  type="checkbox" name="hobbies" value="cooking">
			<label>cooking</label>
			<input type="checkbox" name="hobbies" value="Dancing">
			<label>Dancing</label></td>
			</tr>
		<tr>
			<td>studied institution:</td><td>
			<input  type="text" name="institute" ></td>
			</tr>
		<tr>
			<td>Course studied:</td><td>
			<input  type="radio" name="course_std" value="BCA">
			<label>BCA</label>
			<input  type="radio" name="course_std" value="BSC">
			<label>BSC</label>
			<input  type="radio" name="course_std" value="BCOM">
			<label>BCOM</label>
			<input  type="radio" name="course_std" value="BE">
			<label>BE</label></td>
		</tr>
		<tr>
			<td>Course offered:</td><td>
			<input  type="radio" name="course_now" value="MCA">
			<label>MCA</label>
			<input  type="radio" name="course_now" value="MBA">
			<label>MBA</label>
			<input  type="radio" name="course_now" value="MTECH">
			<label>MTECH</label>
			<input  type="radio" name="course_now" value="MSC">
			<label>MSC</label></td>
		<tr>
			<td>
			<input  type="reset" name="" value="Reset">
			<input  type="submit" name="submit"></td>
			</tr>
		</form>
	</table>
		<h2>Student Details</h2>

		<table border="1">
				<?php echo $dis; ?>
		</table>
		<h2><?php echo $msg; ?></h2>
</body>
</html>

