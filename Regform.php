<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body bgcolor="pink">  

<?php
// define variables and set to empty values
$firstnameErr = $secondnameErr = $emailErr = $genderErr = $departmentErr = $colorErr = "";
$firstname = $secondname = $email = $gender = $department = $color = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "Firstname is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if firstname only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }
  
  
    if (empty($_POST["secondname"])) {
      $secondnameErr = "Secondname is required";
    } else {
      $secondname = test_input($_POST["secondname"]);
      // check if secondname only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$secondname)) {
        $secondnameErr = "Only letters and white space allowed";
      }
    }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["department"])) {
    $departmentErr = "Department is required";
  } else {
    $department = test_input($_POST["department"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>WeJapa Sign Up</h1>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  First Name: <input type="text" name="firstname" value="<?php echo $firstname;?>">
  <span class="error">* <?php echo $firstnameErr;?></span>
  <br><br>
  Second Name: <input type="text" name="secondname" value="<?php echo $secondname;?>">
  <span class="error">* <?php echo $secondnameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

 Date of Birth <div>
        <select name="dobDay">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>
        <!-- Birth Month -->
        <select name="dobMonth">
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
        <!-- Birth Year -->
        <select name='dobYear'>
            <option value='1947'>1947</option>
            <option value='1948'>1948</option>
            <option value='1949'>1949</option>
            <option value='1950'>1950</option>
            <option value='1951'>1951</option>
            <option value='1952'>1952</option>
            <option value='1953'>1953</option>
            <option value='1954'>1954</option>
            <option value='1955'>1955</option>
            <option value='1956'>1956</option>
            <option value='1957'>1957</option>
            <option value='1958'>1958</option>
            <option value='1959'>1959</option>
            <option value='1960'>1960</option>
            <option value='1961'>1961</option>
            <option value='1962'>1962</option>
            <option value='1963'>1963</option>
            <option value='1964'>1964</option>
            <option value='1965'>1965</option>
            <option value='1966'>1966</option>
            <option value='1967'>1967</option>
            <option value='1968'>1968</option>
            <option value='1969'>1969</option>
            <option value='1970'>1970</option>
            <option value='1971'>1971</option>
            <option value='1972'>1972</option>
            <option value='1973'>1973</option>
            <option value='1974'>1974</option>
            <option value='1975'>1975</option>
            <option value='1976'>1976</option>
            <option value='1977'>1977</option>
            <option value='1978'>1978</option>
            <option value='1979'>1979</option>
            <option value='1980'>1980</option>
            <option value='1981'>1981</option>
            <option value='1982'>1982</option>
            <option value='1983'>1983</option>
            <option value='1984'>1984</option>
            <option value='1985'>1985</option>
            <option value='1986'>1986</option>
            <option value='1987'>1987</option>
            <option value='1988'>1988</option>
            <option value='1989'>1989</option>
            <option value='1990'>1990</option>
            <option value='1991'>1991</option>
            <option value='1992'>1992</option>
            <option value='1993'>1993</option>
            <option value='1994'>1994</option>
            <option value='1995'>1995</option>
            <option value='1996'>1996</option>
            <option value='1997'>1997</option>
            <option value='1998'>1998</option>
            <option value='1999'>1999</option>
        </select>
   <br><br>

   Favorite Color: <input type="color" name="color" value="<?php echo $color;?>">
  <span class="error">* <?php echo $colorErr;?></span>
  <br><br>
  
  Gender:
  <input type="checkbox" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="checkbox" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="checkbox" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="checkbox">* <?php echo $genderErr;?></span>
  <br><br>
 
  Department :  
  <select>  
  <option value="IT">IT</option>}  
  <option value="HR">HR</option>  
  <option value="Stuff">Stuff</option>
  <br><br>

  Password : 
 <input type="password" name="pass" pattern="[A-Za-z][A-Za-z0-9]*[0-9]
 [A-Za-z0-9]*" title="A valid password is a set of characters, each consisting of an 
 upper or lower-case letter, or a digit. The password must begin with a letter and 
 contain at least one digit" required></p>
 <br><br

 <form action="/action_page.php">
  <label for="pwd">Password:</label>
  <input type="password" id="pwd" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{15,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least one specialcharacters">
  </form>

  <br><br>
 <form action="nextpage.php" method="POST">
       <input type="submit"/>  
 </form>
</form>

</body>
</html>