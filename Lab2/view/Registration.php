<?php
include("../control/result.php")
?>
<!DOCTYPE html>
<html>
<head>
<form action = "" method= "POST" enctype = "multipart/form->data">
    <body>
    <h2>Accountant Registration Form </h2>
            <table>
            <tr>
                        <td><label><h3>Personal Information</h3></label></td>
                    </tr>
                <tr>
                    <td>
                        <label>Firstname:</label>
                    </td>
                    <td> <input type="text" name="fname" placeholder="Enter your firstname" required>
                </td>
                <td> 
                </tr>
                 <tr>
                       <td>
                      <label>Lastname: </label> 
                     </td>
                    <td>
                     <input type="text" name="lname" placeholder="Enter your lastname" required> 
                     <td> 
                      </td>
                </tr>
                 <tr><td><label>Gender: </label></td>
                    <td>
                           <input type="radio" name="gender" value="male">Male
                          <input type="radio" name="gender" value="female">Female
                         <input type="radio" name="gender" value="others">Others
                         <td>
                         </td>
                 </td>
                  </tr>
                  <tr>
                    <td><label>Date of Birth:</label></td>
                     <td><input type="date" name="dateofbirth"></td>
                     <td>
                     </td>
                 </tr>
                 <tr>
                        <td><label>Father's Name: </label></td>
                        <td><input type="text" name="fathername" placeholder ="Enter your father's name" required>
                    </td>
                    </tr>
                    <tr>
                     <td><label>Mother's Name: </label></td>
                     <td><input type="text" name="mothername" placeholder ="Enter your mother's name" required>
                    </td>
                 </tr>
                    
                  <tr>
                    <td>
                    <label>User ID: </label>
                       </td>
                       <td>
                       <input type="text" name="uname" placeholder="Enter your username" required> <td>
                       </td>
                       </td>
                 </tr>
                 <tr>
                 <td>
                        <label>Password: </label> 
                        </td>
                        <td>
                        <input type="text" name="pass" placeholder ="Enter a New Password">  <td> <?php echo $passErr; ?></td> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label>Confirm Password: </label> 
                        </td>
                        <td>
                        <input type="text" name="cpass" placeholder ="Enter your password again"> <td> <?php echo $cpassErr; ?></td> 
                        </td>
                    </tr>
                    <tr>
                    <td> <label>Address: </label></td>
                    <td><input type="text" name="address" placeholder="Enter your address ">
                   <tr>
                  <td><label for="city">City:</label>
                  <td>
                  <select name="city" id="city">
                  <option value="DHAKA">DHAKA</option>
                  <option value="CHATTOGRAM">CHATTOGRAM</option>
                  <option value="KHULNA">KHULNA</option>
                  <option value="SYLHET">SYLHET</option>
                  <option value="RAJSHAHI">RAJSHAHI</option>
                  <option value="THAKURGAON">THAKURGAON</option>
                 </select>
</td>
                </td>
</tr>
                <td>
                </td>
            <tr>
                    <td>
                    <label for="postal">Postal Code:</label>
                    <td><select name="postal" id="postal">
                    <option value="1211">1211</option>
                    <option value="2222">2222</option>
                    <option value="5342">5342</option>
                    <option value="6333">6333</option>
                    <option value="8565">8565</option>
                    <option value="9755">9755</option>
                    </td>
                    </select>
                    </td>
                </tr>
                   
                    <tr>
                        <td> <label>Email: </label></td>
                        <td><input type="email" name="email"placeholder="Enter your email" required></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td> <label>NID Number: </label></td>
                        <td>
                        <input type="nid" name="nid" placeholder="XXXXXXXXXXXX" pattern="[0-9]{13}" required>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="phone">Phone:</label><br><br>
                    </td>
                        <td>
                        <input type="tel" id="phone" name="phone" placeholder="01XXXXXXXXX" pattern="[0]{1}[1]{1}[0-9]{9}" required>
                        <small>Format: 01-XXXX-XXXXX</small><br><br></td>
                        <td>
                        </td>
                        <tr>
                    </tr>
                    <tr>
                    </tr>
                    </tr>
                    <tr>
                        <td><label><h3>Academic Qualification</h3></label></td>
                    </tr>

                    <tr>
                       <td>
                      <label>SSC          : </label> 
                     </td>
                    <td>
                     <input type="text" name="ssc" placeholder="GPA" required> 
                     <td> 
                      </td>
                </tr>

                <tr>
                       <td>
                      <label>HSC          : </label> 
                     </td>
                    <td>
                     <input type="text" name="hsc" placeholder="GPA" requied> 
                     <td> 
                      </td>
                    </tr>
                    <tr>
                       <td>
                      <label>Undergraduade          : </label> 
                     </td>
                    <td>
                     <input type="text" name="hons" placeholder="CGPA" required> 
                     <td> 
                      </td>
                    </tr>
                    <tr>
                        <tr>
                    </tr>
                    <tr>
                    </tr>
                        <td><label><h3>Photo</h3></label></td>
                    </tr>

                    <tr>
                        <td><label>Image: </label></td>
                        <td> <input type="file"  name="img" accept="image/*"></td>  
                        <td>
                        </td>
                    </tr>
                    <tr>
                        </td>
                        <td>
                        <input type="submit" name="Submit" value="Register">
                        </td>
                        <td><input type="reset" value="Reset"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    <br>
                        <td><br><br><br><br><br><br><br></td>
                    </tr>
                </table>
</body>
</form>
</html>