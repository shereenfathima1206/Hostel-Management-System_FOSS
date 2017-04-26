<?php
$dbc= mysqli_connect('localhost','root','','sam') OR die('could not connect because :' .mysqli_connect_error());

$q= "select * from mess1";
$records=mysqli_query($dbc,$q);
?>
<html>
<head>
<title>Mess menu </title>
<?php include('newscss.php'); ?>
</head>
<body>
	<h1 text align="center"><strong><u>MESS MENU</u></strong></h1>
<table  cellpadding="1" cellspacing="1" width="600" border="1" align="center">
	<th>time</th>
	<th>monday</th>
	<th>tuesday</th>
	<th>wednesday</th>
	<th>thursday</th>
	<th>friday</th>
	<th>saturday</th>
	<th>sunday</th>
	<tr>
		<?php
		while($mess=mysqli_fetch_assoc($records))
		{
			echo "<tr>";
			echo "<td>".$mess['time']."</td>";
			echo "<td>".$mess['monday']."</td>";
			echo "<td>".$mess['tuesday']."</td>";
			echo "<td>".$mess['wednesday']."</td>";
			echo "<td>".$mess['thursday']."</td>";
			echo "<td>".$mess['friday']."</td>";
			echo "<td>".$mess['saturday']."</td>";
			echo "<td>".$mess['sunday']."</td>";
			echo "</tr>";
		}
	?>
	</tr>
	</table>
<imgsrc="mess.jpg" height="300" align="center" />
<imgsrc="mess1.jpg" height="300" align="right"/>

</body>
</html>
