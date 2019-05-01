<?php include 'above.php';
?>

<head>
<style>
.error {color: #FF0000;}
p{margin-left: 40px;}
.span2{margin-left: 40px;
      color: #FF0000;}
form{margin-left: 100px;}
</style>
</head>
<body>  

<?php 
// define variables and set to empty values
$nameErr = $rollErr = $yearErr = $courseErr = $organisationErr = $P_organisationErr = $websiteErr = $emailErr = "";
$name = $roll = $year = $course =$organisation = $P_organisation = $website = $email = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
  { 
    //name
    if (empty($_POST["name"])) 
      { $nameErr = "Name is required";  } 
    else 
      { $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
          { $nameErr = "Only letters and white space allowed";  }
      }
    //Roll no.
    if (empty($_POST["roll"])) 
      { $rollErr = "";  } 
    else 
      { $roll = test_input($_POST["roll"]); }
    //Graduating Year
    if (empty($_POST["year"])) 
      { $yearErr = "Graduation year is required";  } 
    else 
      { $year = test_input($_POST["year"]); }
    //Course Attended
    if (empty($_POST["course"])) 
      { $courseErr = "course is required";  } 
    else 
      { $course = test_input($_POST["course"]); }
    //Current Organisation
    if (empty($_POST["organisation"])) 
      { $organisationErr = "";  } 
    else 
      { $organisation = test_input($_POST["organisation"]); }
    //Post in Current Organisation
    if (empty($_POST["P_organisation"])) 
      { $P_organisationErr = "";  } 
    else 
      { $P_organisation = test_input($_POST["P_organisation"]); }
    //website
    if (empty($_POST["website"])) 
      { $website = "";  } 
    else 
      { $website = test_input($_POST["website"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
        { $websiteErr = "Invalid URL";  }    
      }
      //E-mail
    if (empty($_POST["email"])) 
      { $emailErr = "Email is required";  } 
    else 
      { $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        { $emailErr = "Invalid email format"; }
      }
      //Address
    if (empty($_POST["address"])) 
      { $address = "";  } 
    else 
      { $address = test_input($_POST["address"]); }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<p>&nbsp;</p>
<h2>Alumni Registration Form</h2>
<p>We are working with a vision of bringing the alumni and student communities of IITB together to create a synergy of ideas, respect, knowledge and everything that our Institute stands for....</p>
<p>&nbsp;</p>

<?php
if (empty($_POST))
{ echo '
<form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">  
  Name: <br> <input type="text" name="name">
  <span class="error">* '.$nameErr.'</span>
  <br><br>
  Roll no.: <br> <input type="text" name="roll">
  <span class="error">'.$rollErr.'</span>
  <br><br>
  Graduating Year: <br> <input type="text" name="year">
  <span class="error">*'.$yearErr.'</span>
  <br><br>
  Courses Attended: <br>  <input type="text" name="course">
  <span class="error">*'.$courseErr.'</span>
  <br><br>
  Current Organisation/Institute: <br>  <input type="text" name="organisation">
  <span class="error">'.$organisationErr.'</span>
  <br><br>
  Post in Current Organisation/Institute: <br>  <input type="text" name="P_organisation">
  <span class="error">'.$P_organisationErr.'</span>
  <br><br>
  Website: <br>  <input type="text" name="website">
  <span class="error">'.$websiteErr.'</span>
  <br><br>
  E-mail: <br>  <input type="text" name="email">
  <span class="error">*'.$emailErr.'</span>
  <br><br>
  Present Address: <br>  <textarea name="address" rows="5" cols="40"></textarea>
  <br><br>  
  <input type="submit" name="submit" value="Submit">  
</form>
  <p><span class="error">* required field</span></p>';
}

else if(empty($name)||empty($year)||empty($course)||empty($email))
{
    if(empty($name))
    echo '<span class="span2">ERROR: '.$nameErr.'</span><br><br>';

    if(empty($year))
    echo '<span class="span2">ERROR: '.$yearErr.'</span><br><br>';

    if(empty($course))
    echo '<span class="span2">ERROR: '.$courseErr.'</span><br><br>';

    if(empty($email))
    echo '<span class="span2">ERROR: '.$emailErr.'</span><br><br>';
}

else
{ echo "<h2>You Registered Successfully</h2>";
  echo '<span class="span2">Name: '.$name.'</span><br><br>
        <span class="span2">Roll No: '.$roll.'</span><br><br>
        <span class="span2">Graduating Year: '.$year.'</span><br><br>
        <span class="span2">Courses: '.$course.'</span><br><br>
        <span class="span2">Current Organisation: '.$organisation.'</span><br><br>
        <span class="span2">Post in current organisation: '.$P_organisation.'</span><br><br>
        <span class="span2">Website: '.$website.'</span><br><br>
        <span class="span2">E-mail: '.$email.'</span><br><br>
        <span class="span2">Present Address: '.$address.'</span><br><br>';
  $file=$_SERVER['DOCUMENT_ROOT'] ."/alumni_form/".$year.".txt";
  $txt="\n".$name."_".$roll."_".$year."_".$course."_".$organisation."_".$P_organisation."_".$website."_".$email."_".$address."\n";
  file_put_contents($file, $txt, FILE_APPEND);
  chmod($file, 0777);
}

?>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</body>

<?php include 'below.php';
?>