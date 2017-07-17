<?php
include("includes/ceksession.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>bergabunglah untuk menjalin kekuatan</h1>
<table>
<th>aliansi</th>
</table>
<table width="200" border="1">
  <tbody>
    <tr>
      <th>aliansi</th>
    </tr>
    <?php for ($i=1;$i<=sizeof($nama); $i++) { ?>
  <tr>
    <td><?php echo $nama[$i]?></td>
    </tr>
<?php   }  ?>
  </tbody>
</table>
</body>
</html>