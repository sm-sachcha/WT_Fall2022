<?php

class AC_DB
{


    function openConn()
    {

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "landtax";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

        return $conn;
    }



    function insertUser($conn, $tableName, $AC_fname, $AC_lname, $AC_gender, $AC_dob, $AC_fath, $AC_moth, $AC_nid, $AC_uID, $AC_address, $AC_city, $AC_postal, $AC_email, $AC_phn, $AC_ssc, $AC_hsc, $AC_hons, $AC_cv, $AC_pass,$AC_img)
    {

        $sql_string = "INSERT INTO $tableName (AC_fname, AC_lname, AC_gender, AC_dob, AC_fath, AC_moth, AC_nid, AC_uID, AC_address, AC_city, AC_postal, AC_email, AC_phn, AC_ssc, AC_hsc, AC_hons, AC_cv, AC_pass,AC_img,AC_serial) VALUES ('$AC_fname', '$AC_lname', '$AC_gender', '$AC_dob', '$AC_fath', '$AC_moth', '$AC_nid', '$AC_uID', '$AC_address', '$AC_city', '$AC_postal', '$AC_email', '$AC_phn', '$AC_ssc', '$AC_hsc', '$AC_hons', '$AC_cv', '$AC_pass','$AC_img','$AC_serial')";

        if ($conn->query($sql_string) === true) {

            return true;
        }
        else 
        {
            return false;
        }
    }


    function CheckUser($conn, $ac_insert, $nid, $password)
    {
        $result = $conn->query("SELECT * FROM " . $ac_insert . " WHERE NID='" . $nid . "' AND password='" . $password . "'");
        return $result;
    }


    function ShowAll($conn, $ac_insert)
    {
        $result = $conn->query("SELECT * FROM  $ac_insert");
        return $result;
    }

    // function UpdateUser($conn, $table, $username, $firstname, $email)
    // {
    //     $sql = "UPDATE $table SET firstname='$firstname', email='$email' WHERE username='$username'";

    //     if ($conn->query($sql) === TRUE) {
    //         $result = TRUE;
    //     } else {
    //         $result = FALSE;
    //     }
    //     return  $result;
    // }

    function CloseCon($conn)
    {
        $conn->close();
    }
}
