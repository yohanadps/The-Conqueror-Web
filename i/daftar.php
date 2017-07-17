

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="lib/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="lib/jquery-ui-1.10.3.custom.min.js"></script>
<link rel="stylesheet" href="lib/jqueryui-css/south-street/jquery-ui-1.10.3.custom.min.css">

<style>
p{text-align:center;}
button{
	}
</style>
<title>login</title>
</head>

<body>
<div >
<h1>ayo segera masuk , ada hal penting</h1>
<form id="form1" name="form1" method="post" action="includes/sp/sp_daftar" >
  <p>Username  
    <input name="in_userid" type="text" id="in_userid" size="60" />
  </p>
  <p>
  Password
    <input name="in_password" type="password" id="in_password" size="60" />
  </p>
  <p>
    <label for="email">Email:</label>
    <input name="in_email" type="email" id="in_email" size="60" />
  </p>
  <p>
    <label for="select">Pilih Kerajaan:</label>
    <select name="kerajaan" id="kerajaan">
    <option label="majapahit">kerajaan majapahit</option>
    <option label="sriwijaya">kerajaan sriwijaya</option>
    <option label="mataram">kerajaan mataram</option>
    </select>
  </p>
  <input type="submit" name="button" id="button" value="LOGIN SEKARANG" />
</form>


</div>
</body>
</html>
