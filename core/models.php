<?php
require_once 'dbConfig.php';

function insertIntoform ($pdo, $user_name,$firstname,$lastname, $profession,
$statusinlife,$experience,$age) {

    $sql = "INSERT INTO nominee (user_name,firstname,Last_name, profession,
statusinlife,experience,Age) VALUES (?,?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$user_name,$firstname,$lastname, $profession,
    $statusinlife,$experience,$age]);

    if ($executeQuery) {
        return true;
    }
}


function getuserbyID($pdo, $userID) {
    $stmt = $pdo->prepare("SELECT * FROM nominee WHERE userID = :userID");
    $stmt->bindParam(':userID', $userID);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


function seeAlluserRecords ($pdo){
    $sql = "SELECT * FROM nominee";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery){
        return $stmt ->fetchAll();
    }

function update_employee($pdo, $userID, $username, $firstname, $lastname, 
	$profession, $statusinlife, $experience, $age) {

	$sql = "UPDATE nominee 
				SET username = ?, 
					firstname = ?, 
					lastname = ?, 
					profession = ?, 
					statusinlife = ?, 
					experience = ?, 
					age = ? 
			WHERE userID = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$username, $firstname, $lastname, 
	$profession, $statusinlife, $experience, $age, $userID]);

	if ($executeQuery) {
		return true;
	}
}


function Delete_employee($pdo, $userID) {

	$sql = "DELETE FROM nominee WHERE userID = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$userID]);

	if ($executeQuery) {
		return true;
	}

}
}
?>