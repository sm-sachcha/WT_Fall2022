<?php
include('../control/ac_logincheck.php');
?>

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<center>
        
       
    <form action ="" method="POST" enctype="multipart/form-data">        
<table>
    <tr>
        <td><h4><td><label>-------Login--------</label></td></h4></td>
        <br><br><br><br><br><br><br><br><br>
</tr>
    <tr>
    <td>
        <lable><h3>Username :</h3></label>
       
    </td>
    <td> <input type="username" name="username" ></td>
</tr>
<tr>
    <td>
        <lable><h3>Password  :</h3></label>
        
    </td>
    <td>
    <input type="password" name="password" >
    </td>
</tr>
<tr><td></td>
                        <td>
                        <input type="checkbox" name="remember" id="remember">Remember Me
                        </td>
                    </tr>
       <tr>
           <td>
                          <td><input type="submit" name="login"></td><td></td>
                        </td>
                    </tr>
                    <td>
                    <tr>
                    <td>Do not have any account? <a href="../view/ac_registration.php">Sign Up</td>
                    </tr>       

</center>
</form>
</body>
</html>