<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirm Delete?</title>
</head>
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 80%;
    border: 1px solid #ddd;
}

th, td {
    text-align: center;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: red;
}
</style>

<body style="background-color:powderblue;">
    <form method="post" action="index.php">
    <input type="submit" value="Back" />
    </form> </p>
<center>
<h3><p>Are you sure you want to delete this data?</p></h3>

<form method="post" action="delete.php">
	<table width="1100" border="1" style="text-align:center; background-color:white;">
    <tr>
    <tr bgcolor="red" style="color:white; font-weight:bold;">
    <td>Driver ID</td>
	<td>Policy ID</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>DOB</td>
    <td>Phone No.</td>
    <td>License Number</td>
    <td>Gender</td>
   	</tr>
    
    <?php
		include("connection.php");
		$id = $_GET['id2'];
		
		$query = "SELECT * FROM `driver` WHERE id = '$id'";
		$result = mysqli_query($connection,$query) or die("Select Error ".mysqli_error($connection));
		
		while($row = mysqli_fetch_array($result))
		{ $i=1;
		$hid_id = $row['id'];
		?>
        
        <tr>  
        <input name="hid_id" type="hidden" value="<?php echo $row['id']; ?>" size="2" /></td>
   		<td><?php echo $row['Driver_ID']; ?></td>
        <td><?php echo $row['Policy_ID']; ?></td>
        <td><?php echo $row['firstName']; ?></td>
        <td><?php echo $row['lastName']; ?></td>
        <td><?php echo $row['DOB']; ?></td>
        <td><?php echo $row['PhoneNumber']; ?></td>
        <td><?php echo $row['LicenseNumber']; ?></td>
        <td><?php echo $row['Gender']; ?></td>
   </tr>
   
   <?php
		}
		mysqli_close($connection);
		?>
    
    </table>
    <p>
    <input name="bt_delete" type="submit" value="Delete" />
    <label for="hidden"></label>
   
    </form>







</body>
</html>