<?php 
require "../../database/database.php";
<<<<<<< HEAD
=======
require "../../models/employee.model.php";
>>>>>>> res_pay
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] !== '' && $_POST['email'] !== '' && $_POST['password'] !== '' && $_POST['number'] !== '' && $_POST['role'] !== '') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
<<<<<<< HEAD
        $number = $_POST['number'];
        $role = $_POST['role'];
        // echo $role;
        $statement = $connection->prepare("INSERT INTO users (username, email, password, phoneNumber, role_id, user_img) VALUES (:username, :email, :password, :number, :role, :user_img)");
        $statement->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $password,
            ':number' => $number,
            ':role' => $role,
            ':user_img' => 'IMG-65d9f4f69e5411.43011126.jpg'
        ]);
        header('location:/create-user');
=======
        $crypted = password_hash($password, PASSWORD_BCRYPT);
        $phoneNumber = $_POST['number'];
        $role = $_POST['role'];
        $gender = $_POST['gender'];
        $userImg = 'IMG-65d9f4f69e5411.43011126.jpg';
        // echo $role
        addUsers($username, $email, $crypted, $gender, $role, $phoneNumber, $userImg);
        header('location: /');
>>>>>>> res_pay
        // echo 'yes';
    }
}
?>