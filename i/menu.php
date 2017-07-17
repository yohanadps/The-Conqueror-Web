<?php
	include("includes/ceksession.php");
	
	$query = "select * from USER where ID_USER={$_SESSION['UID']}";
	$result = mysqli_query($conn, $query);
	
	$i=0;
	while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$i++;
		$ID_USER[$i] = $row['ID_USER'];
		$PASS[$i] = $row['PASS'];
		$EMAIL[$i] = $row['EMAIL'];
		$KERAJAAN[$i] = $row['KERAJAAN'];
		$WAKTU_LOGIN[$i] = $row['WAKTU_LOGIN'];
		$COUNTER_LOGIN[$i] = $row['COUNTER_LOGIN'];
		$LEVEL[$i] = $row['LEVEL'];
		$UANG[$i] = $row['UANG'];
		$SUMBER_DAYA[$i] = $row['SUMBER_DAYA'];
		$HADIAH[$i] = $row['HADIAH'];
		$TANDA_LOGIN[$i] = $row['TANDA_LOGIN'];
	}

	mysqli_close($conn);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>MENU</title>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
<ul class="nav navbar-nav">
<li><a href="pasukan.php">pasukan</a></li>
<li><a href="bangunan.php">bangunan</a></li>
<li><a href="aliansi.php">aliansi</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="user.php"><span class="glyphicon glyphicon-user"></span>Akun Pribadi</a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
</ul>
</div>
</div>
</nav>
<div>
<table align="center" style="width:80%" class="table table-hover">
  <tr>
    <th>Uang</th>
    <th>Level</th>
    <th>Sumber daya</th>
  </tr>
<?php for ($i=1;$i<=sizeof($nama); $i++) { ?>
  <tr>
    <td><?php echo $LEVEL[$i]?></td>
    <td><?php echo $UANG[$i]?></td>
    <td><?php echo $SUMBER_DAYA[$i]?></td>
  </tr>
<?php   }  ?>
</table>
</div>
</body>
</html>