<?php 
//error_reporting(0);
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1" />
<style type="text/css">
.bing{
margin:0 300px;
background:#99CCFF;
border-radius:20px;
box-shadow :0 4px 10px 10px;
padding :50px;
margin-top : 50px;
}
@media (max-width:800px){
.bing{
margin:0 auto;
background:darksalmon;
border-radius:20px;
box-shadow :0 4px 10px 10px;
padding :50px;
margin-top: 50px;
}
}
</style>
<title>LOGIN ADMIN</title>
</head>
<body>
<div class="bing">
<form action=""method="post">
<h2 align="center">LOGIN ADMIN</h2>
USERNAME </br>
<input name="username" type="text" /><br /><br />
 PASSWORD</br>
<input name="password" type="password" /><br /><br />
<input name="submit" type="submit" value="LOGIN"/>
</form>
<?php
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(!empty($username)||!empty($password)){
		include "koneksi.php";
		$tes= mysqli_query($konek,"select * from login_admin 
		where username='".$_POST['username']."' and
		password='".($_POST['password'])."'");
		if(mysqli_num_rows($tes)==1){
			$_SESSION['username']=$_POST['username'];
			$_SESSION['password']=$_POST['password'];
			exit("<script>location.href='index_admin.php';
			</script>");
			}else{
				echo"<script>alert('gagal login');
				</script>";
			}
		}
	}
			
	?>
	</div>
</body>
</html>

<?php
}else{
	exit("<script>location.href='index.php';</script>");
	}
?>