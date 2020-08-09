<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body bgcolor="pink">
   <form method='POST'>
   <h2>Wejapa SignUp:</h2>
 First Name: <input type="text" name="firstname"> 
 <br><br>
 Second Name: <input type="text" name="secondname">
 <br><br>
 Email: <input type="text" name="email">
 <br><br>
 Date of Birth: <input type="date" name="dob">
 <br><br>
 Gender:
  <input type="checkbox" name="gender" value="female">Female
  <input type="checkbox" name="gender" value="male">Male
  <input type="checkbox" name="gender" value="other">Other  
 <br><br>
 Department:  
  <select name="department">  
  <option value="IT">IT</option>}  
  <option value="HR">HR</option>  
  <option value="Stuff">Stuff</option>
  <br><br>
  <label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="15" />
  <br><br>
 <input type="submit" value="Submit Form">

 </form>
 <br><br>
<?php
//Retrieve name from query string and store to a local variable
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$email = $_POST['email'];
$dob = date('Y-m-d', strtotime($_POST['dob']));

 
echo "<h2>Your Profile:</h2>";
echo "Name: <br>" . $firstname;
echo $secondname;
echo "<br><br>";
echo "Email: <br>" . $email;
echo "<br><br>";
echo "Date of birth: <br>" . $dob;
echo "<br><br>";
$gender=$_POST['gender'];
if (isset($gender) && $gender=="female") echo " <br>";
if (isset($gender) && $gender=="male") echo  " <br>";
if (isset($gender) && $gender=="other") echo " <br>";
echo "Sex: <br>" . $gender;
echo "<br><br>";
$department = $_POST['department'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_POST['department']) && ($_POST['department'] == 'department')) {
echo $department;
}
}
echo "Department:<br>" . $department

?>
</body>
</html>