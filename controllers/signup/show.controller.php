
<?php

require "../../database/database.php";
require "../../models/employee.model.php";

// ----get data from user input------
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // TO DO-----------
    if (isset($_POST['usernames']) && !empty($_POST['usernames'] && !empty($_POST['gender'] && !empty($_POST['phone'])))){
        $usernames = $_POST['usernames'];
        // $role = $_POST['optradio'];
        $role = '2';
        $gender = $_POST['gender'];
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];
        $phone = $_POST["phone"];

        // echo $password, $usernames, $gender, $phone, $email, $role;
        $singup = addUsers($usernames, $email, $password, $gender, $role, $phone);
        if ($singup){
            header('Location: /');
        }
        else{
            header('Location: /sigin');
        }

        

    }
}
// addUsers();
// $data = getUsers();
// print_r($data);



