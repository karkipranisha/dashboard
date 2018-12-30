<?php
include('inc_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Categorys</title>
</head>
<body>
<div class="col">
<table align="center" cellpadding="10px" border="2px">
<thead>
	<tr>
		<td>UID</td>
		<td>Name</td>
		<td>Status</td>
		<td>Functions</td>
    </tr>
</thead>
<tfoot>
		<td>UID</td>
		<td>Name</td>
		<td>Status</td>
		<td>Functions</td>
</tfoot>
<tbody>
	<div style="background-color: lightblue; text-align:center; font-family: Britannic Bold">
<h1>Dashboard</h1>
</div>
Hello, <?php echo $_SESSION['username'];?><br/><br/><br/>
<div style="font-family: Arial">
<a href="logout.php">Logout</a><br/><br/><br/>
All Users
<ul>
<li><a href="userregister.php">Add Users</a><br/><br/><br/></li>
<li><a href="allusers.php">Display Users</a><br/><br/><br/></li>
</ul>
All Categories
<ul>
<li><a href="registercategory.php">Add Categories</a><br/><br/><br/></li>
<li><a href="allcategory.php">Display Categories</a><br/><br/><br/></li>
</ul>
</div>
	<?php
	//selecting all users
	$stm="SELECT * FROM category";
	//making connection
	include('connection.php');
	$qry=mysqli_query($conn,$stm);
	while($row=mysqli_fetch_array($qry))
	{
		echo "<tr>";
		echo "<td>". $row['id']."</td>";
		echo "<td>". $row['name']."</td>";
		echo "<td>". $row['status']."</td>";
        echo "<td>
        <a href=editdeletecategory.php?id=".$row['id']."&action=edit> EDIT <a/>
        <a href=editdeletecategory.php?id=".$row['id']."&action=delete> DELETE <a/>
        </td>"; 
        echo "</tr>";
	}
	?>
</tbody>
</table>
</div>
</body>
</html>

