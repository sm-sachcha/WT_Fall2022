<?php

include("../model/db.php");


if (isset($_POST["login"])) {
    $mydb = new AC_DB();
    $connobj = $mydb->openConn();

    if (mysqli_num_rows($mydb->CheckUser($connobj, "ac_insert", $_POST["AC_nid"], $_POST["pass"])) > 0) {
        echo "user exist";

        session_start();
        $_SESSION["username"] = $_POST["AC_nid"];
        $_SESSION["password"] =  $_POST["AC_pass"];
        $mydb->CloseCon($connobj);
        header("Location: /SecH/govttax/view/ac_interface.php");
    } else {
        echo "user does not exist";
    }
    $mydb->CloseCon($connobj);

    // $data = file_get_contents("../data/data.json");
    // $mydata = json_decode($data);



    // header("Location: /SecH/e-gov/view/user_home.php");

    // foreach ($mydata as $myobject) {
    //     if ($myobject->email == $_POST["log_nid"] && $myobject->password == $_POST["pass"]) {

    //         $_SESSION["username"] = $myobject->name;
    //         $_SESSION["password"] =  $myobject->password;


    //         header("Location: /SecH/e-gov/view/user_home.php");
    //     }
    // }
}
