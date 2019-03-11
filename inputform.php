<html>
<body>
	<form action="" method='POST'>
	<div>
		<h2>Manage Employees</h2>
	</div>
	<div>
		<table>
		 <tr><td>Employee ID</td><td><input type="text" name="empid"/></td></tr>
		 <tr><td>Employee Name</td><td><input type="text" name="empname"/></td></tr>
		 <tr><td align="right" ><input type="submit" name="Insert" value="Add"/></td><td><input type="submit" name="Search"  value="Search"/></td></tr>
		</table>
	</div>
	</form>
</body>
</html>

<?php
require('dbConnection.php');
if(isset($_POST['Insert'])){
	
	$name=$_POST['empname'];
	$id=$_POST['empid'];
	$sql="insert into emp_173432 (empid,empname) values ($id,'$name')";
	$retval=mysql_query($sql,$conn);
	
		
		$id=$_POST['empid'];
		$sql="select * from emp_173432";		
		$retval=mysql_query($sql,$conn);
			if(count($retval)>0)
				echo "<div>	<h2>Employees</h2></div>";
				echo "<table border=2>";
				echo "<tr><th>Employee ID</th><th>Employee Name</th></tr>";
				while($res=mysql_fetch_assoc($retval)){
					echo "<tr><td>";
					echo $res['empid'];
					echo "</td><td>";
					echo $res['empname'];
					echo "</td></tr>";	
				}
				echo "</table>";
			}
	
	unset($_POST['submit']);
}
else if(isset($_POST['Search'])){
	echo "<div>
		<h2>Employees</h2>
	</div>";
	
		$id=$_POST['empid'];
		$sql="select * from emp_173432 where empid='$id'";		
		$retval=mysql_query($sql,$conn);
		echo "<table border=2>";
		echo "<tr><th>Employee ID</th><th>Employee Name</th></tr>";
		while($res=mysql_fetch_assoc($retval)){
			echo "<tr><td>";
			echo $res['empid'];
			echo "</td><td>";
			echo $res['empname'];
			echo "</td></tr>";	
		}
		echo "</table>";
		unset($_POST['Search']);
}
?>