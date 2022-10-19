<?php
error_reporting(0);
$hasError=0;
$nameErr = "";
$name2Err = "";
$fnameErr = "";
$mnameErr = "";
$genderErr = "";
$dobErr = "";
$unameErr = "";
$passErr = "";
$cpassErr = "";
$preaddressErr = "";
$emailErr = "";
$nidErr = "";
$phnErr = "";
$fileErr = "";
$imgErr = "";
$filepath ="";
$imgpath ="";
$datasave="";
$presentaddress ="";
$gender=" ";
if(isset($_POST["Submit"]))
{
  $name = $_POST["fname"];
  $name2 = $_POST["lname"];
  $dateofbirth = $_POST["dateofbirth"];
  $fathername = $_POST["fathername"];
  $mothername = $_POST["mothername"];
  $username = $_POST["uname"];
  $password = $_POST["pass"];
  $confirmpassword =$_POST["cpass"];
  $postalcode = $_POST["postal"];
  $email = $_POST["email"];
  $nid = $_POST["nid"];
  $phone =$_POST["phone"];
  $currentDate = date("Y-m-d");
  $SSC_RESULT = $_POST["ssc"];
  $HSC_RESULT = $_POST["hsc"];
  $Undergraduate_RESULT = $_POST["hons"];

/*
<tr>
	<td> Profession : </td>
	<td><input type = "checkbox" name = "student" value = "student">Student
	<td><input type = "checkbox" name = "teacher" value = "teacher">Teacher
    <td><input type = "checkbox" name = "engineer" value = "engineer">Engineer
	</td>

	</tr>

    if (isset($_REQUEST["student"]) || isset($_REQUEST["teacher"]) || isset($_REQUEST["engineer"])) {

        if(isset($_REQUEST["student"])){
            echo "Student ";
 
        }if(isset($_REQUEST["teacher"])){
            echo "Teacher ";
 
        }if(isset($_REQUEST["engineer"])){
            echo "Engineer ";
        }
     }

     
     else
     {
        echo "Checkbox is empty.";
        echo "<br>";
     }

*/

    if($_REQUEST["fname"] == "")
    {
        echo "<br>";
        echo "First name is required";
        echo "<br>";
    }
    elseif($_REQUEST["lname"] == "")
    {
        echo "Last name is required";
        echo "<br>";
    }
    elseif(isset($_REQUEST["gender"]))
    {
        echo "<br>";
        if($_REQUEST["gender"] == "male" || "female")
        {
            echo "";
        }
        else {
            echo "Select your Gender";
        }
    }

    elseif($_REQUEST["fathername"] == "")
    {
        echo "Father name is required";
    }
    else if(is_numeric( $fathername))
      {
        $fnameErr ='Fathers Name can not be numeric';
        
      }
    elseif($_REQUEST["mothername"] == "")
    {
        echo "Mother name is required";
    }
    elseif($_REQUEST["address"] == "")
    {
        echo "Address is required";
    }

else
{
    echo "";
}
if($_REQUEST["ssc"] == "")
    {
        echo "SSC result is required";
    }
    elseif($_REQUEST["ssc"] > 5 )
    {
        echo "SSC result is not valid";
    }
    elseif($_REQUEST["ssc"] < 0)
    {
        echo "SSC result is not valid";
    }
if($_REQUEST["hsc"] == "")
    {
        echo "HSC result is required";
    }
    elseif($_REQUEST["hsc"] > 5 )
    {
        echo "HSC result is not valid";
    }
    elseif($_REQUEST["hsc"] < 0)
    {
        echo "HSC result is not valid";
    }
if($_REQUEST["hons"] == "")
    {
        echo "Undergraduate result is required";
    }
    elseif($_REQUEST["hons"] > 4 )
    {
        echo "Undergraduate result is not valid";
    }
    elseif($_REQUEST["hons"] < 0)
    {
        echo "Undergraduate result is not valid";
    }

    $age = date_diff(date_create($dateofbirth), date_create($currentDate));
    if(empty($dateofbirth))
    {
        $dobErr = "Date of Birth is Empty";
    }
    
    else if($age->format('%y')<18)
    {
        $dobErr ="Age less than 18";
    }
    else 
    {
        $dobErr ="Your Date of Birth is ". $dateofbirth;
    }
    #Password
    if(empty($password)||empty($confirmpassword))
    {
        $passErr="Password is empty";
        $cpassErr="Comfirm Password is empty";
    }
   
   else if(!preg_match('@[A-Z]@', $password)||!preg_match('@[a-z]@', $password)||!preg_match('@[0-9]@', $password)||!preg_match('@[^\w]@', $password)||strlen($password)<8)
    {
        $passErr='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }
    
   else if(!preg_match('@[A-Z]@', $confirmpassword)||!preg_match('@[a-z]@',$confirmpassword)||!preg_match('@[0-9]@',$confirmpassword)||!preg_match('@[^\w]@', $confirmpassword)||strlen($confirmpassword)<8)
    {
        $cpassErr='Confirm Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }
   
   else if(strcmp($password,$confirmpassword))
    {
        $cpassErr="Password and Confrim Password doesn't match";
    }
    else{
    
        
        $cpassErr= 'Strong password.';
        
    }

if(empty($phone))    
{
$phnErr = "Enter Phone Number";
}
else if(!preg_match("/^[0-9]{5}-[0-9]{6}$/", $phone))
{
    $phnErr = "Phone Number format incorrect. Phone Number must be numeric";

}
else{
    $phnErr ="Valid Phone Number";
}

if(!isset($_POST["gender"])) 
{
    $genderErr = 'selected any Gender';
}
    if (isset($_POST["gender"]) )
        {
        if ($_POST["gender"]=="male") {
            $genderErr = 'You selected Male ';
         
        }
        else if ($_POST["gender"]=='female') {
            $genderErr = 'You selected Female';
         
        }
        else if($_POST["gender"]=='others'){
        $genderErr = 'You have selected Others';
        }
        $gender =   $_POST["gender"];
        
    } 
    if(empty($email))
    {
        $emailErr = "Enter your email";
    } 
    else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    { $emailErr = "Wrong Email pattern";} 
    else{
        $emailErr= "Your email is ".$email;
      echo '<br>';
    }

    if(empty($username))
{
    $unameErr = "User Name Empty";
}
else if(!preg_match('/^[a-z][a-zA-Z0-9]{5,10}$/', $username))
{
$unameErr ="First Letter can not be Numeric.\n
 Username can be alphanumeric.\n Not longer than 10 and equal to or not less than 5 chars.\n
 Can not have special characters";
}
else
{
    $unameErr = "User name is valid";
}

if(empty($nid))    
{
$nidErr = "Enter Nid Number";
}
else if(!is_numeric($nid))
{
    $nidErr = "Nid Number must be numeric";
}
else if(strlen($nid) == 13 )
{
    $nidErr = "Nid Number is valid";
}
else
{
    $nidErr = "Nid Number is not Valid";
}

echo "<br>";
}


###########write to json file


#image
if(move_uploaded_file($_FILES["img"]["tmp_name"],"../uploads/".$_FILES["img"]["name"]))
{ $imgpath = "../uploads/".$_FILES["img"]["name"];
    $imgErr = "Image Uploaded";
}

else
$imgErr = 'Image Upload Error';



if(!empty($name)&&!empty($username)&&!empty($password) &&!empty($nid)&&strcmp($password,$confirmpassword)==0){

$formdata = array(
    'firstname'=>$_POST["fname"],
    'lastname'=>$_POST["lname"],
    'gender'=>$gender,
    'age'=>$age->format('%y'),
    'fathersname'=>$fathername,
    'mothersname'=> $mothername,
    'username'=>$username,
    'pass'=>$password,
    'email'=>$email,
    'Address'=>$address,
    'nid'=>$nid,
    'phone'=>$phone,
    'ssc'=> $SSC_RESULT,
    'hsc' => $HSC_RESULT,
    'hons' => $Undergraduate_RESULT
);

$existingdata = file_get_contents('../data/data.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;


$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
if(file_put_contents("../data/data.json",$jsondata))
{
    $datasave= 'Data Successfully Saved';
}
else
$datasave=  'No Data Saved';

}
  


?>