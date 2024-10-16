<?php

require_once("dbConfig.php");
require_once ('models.php');

if (isset($_POST['editbutton'])) {
	$username = trim($_POST['username']);
	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$profession = trim($_POST['profession']);
	$statusinlife = trim($_POST['statusinlife']);
	$experience = trim($_POST['experience']);
	$age = trim($_POST['age']);

	if (!empty($username) && !empty($firstname) && !empty($lastname) && !empty($profession) && !empty($statusinlife)  && !empty($experience)  && !empty($age)) {
			$query = insertIntoform($pdo, $username, $firstname, $lastname, $profession, $statusinlife, $experience, $age);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}

if (isset($_POST["register"])) {
    echo"<pre>";
    print_r ($_POST);
    echo"<pre>";

}

if (isset($_POST['insertnewemployeebtn'])) {
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $profession = $_POST['profession'];
    $statusinlife = $_POST['statusinlife'];
    $experience = $_POST['experience'];
    $age = $_POST['age'];

    $query = insertIntoform($pdo,$user_name,$firstname,$Last_name,$profession,$statusinlife,$experience,$age);
                            
    if($query) {
        header('location: ../index.php');
    }
    else{
        echo"query failed";
    }

}
if (isset($_POST['editbutton'])) {
	$userID = $_GET['userID'];
	$username = trim($_POST['username']);
	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$profession = trim($_POST['profession']);
	$statusinlife = trim($_POST['statusinlife']);
	$experience = trim($_POST['experience']);
	$age = trim($_POST['age']);

	if (!empty($username) && !empty($firstname) && !empty($lastname) && !empty($profession) && !empty($statusinlife)  && !empty($experience)  && !empty($age)) {
		
		$query = update_employee($pdo, $userID, $user_name, $firstname, $Last_name, $profession, $statusinlife, $experience, $Age);

	if ($query) {
		header("Location:../index.php");
	}

	else {
		echo "Update failed";
	}
}

else {
	echo "Make sure that no fields are empty";
}

}
if (isset($_POST['deletebtn'])) {

	$query = Delete_employee($pdo, $_GET['userID']);
	
	if ($query) {
		header("Location: ../index.php");
	}
	else {
			echo "Deletion failed";
	}
}

?>