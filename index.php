<?php require_once("core/dbConfig.php"); ?>
<?php require_once("core/models.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: "Arial";
        }
        input {
            font-size: 1.5cm;
            height: 100px;
            width: 200px;
        }
    </style>
</head>
<body>
    <h3>Welcome to the register form. input your details here to register</h3>
    <form action="core/handleforms.php" method="POST">
        <p><label for="username">Username</label> <input type="text" name="username"></p>
        <p><label for="firstname">Firstname</label> <input type="text" name="firstname"></p>
        <p><label for="lastname">Lastname: </label> <input type="text" name="lastname"></p>
        <p><label for="profession">profession</label> <input type="text" name="profession"></p>
        <p><label for="statusinlife">statusinlife</label> <input type="text" name="statusinlife"></p>
        <p><label for="experience">experience</label> <input type="text" name="experience"></p>
        <p><label for="age">Age</label> <input type="number" name="age"></p>
            <input type="SUBMIT" name="insertnewbtn" >
        </p>
    </form> 
    <table style="border: 2px solid black">
	  <tr>
	    <th>User ID</th>
	    <th>Username</th>
	    <th>First name</th>
	    <th>Last name</th>
	    <th>Profession</th>
	    <th>statusinlife</th>
        <th>experience</th>
        <th>age</th>
        <th>action</th>
	  </tr>

	  <?php $InsertIntoform = seeAlluserRecords ($pdo); ?>
	  <?php foreach ($InsertIntoform as $row) { ?>
	  <tr>
	  	<td><?php echo $row['userID']; ?></td>
	  	<td><?php echo $row['username']; ?></td>
	  	<td><?php echo $row['firstname']; ?></td>
	  	<td><?php echo $row['lastname']; ?></td>
	  	<td><?php echo $row['profession']; ?></td>
	  	<td><?php echo $row['statusinlife']; ?></td>
	  	<td><?php echo $row['experience']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td>
            <a href="editemployee.php?userID=<?php echo $row['userID']; ?>"> edit</a> 
            <a href="deleteemployee.php?userID=<?php echo $row['userID']; ?>"> delete</a>
        </td> 
	  </tr>
	  <?php 
    } 
    ?>
	</table>

</body>
</html>
