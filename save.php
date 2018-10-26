<?php
class ope{
 private $username;
 private $password;
 private $email;
 private $query;
 private $conn;

function __construct($username2,$password2,$repassword2,$email2){
include 'koneksi.php';
		if (!is_numeric($username2)){
			$this->username = $username2;
		}

		if ($password2==$repassword2 || strlen($password2)<=6){
			$this->password = $password2;
		}
		else{
			echo"Pass anda kurang benar";
		}

		if (substr($email2,-10)=="@gmail.com") {
			$this->email = $email2;
		}

		if (isset($this->username)&&isset($this->password)&&isset($this->email)) {
		$this->conn = $con;
		$this->query=mysqli_query($this->conn,"INSERT INTO user(id, username, password, email) VALUES ('','$this->username','$this->password','$this->email')");
		if (!$this->query) {
			die("Tidak berhasil");
		}else{
			echo"Berhasil";
			header("Location:index.php");
		}
	}
	}

}
if (isset($_POST['submit'])) {
		$kon = new ope($_POST['username'],$_POST['password'],$_POST['repassword'],$_POST['email']);
		
	}
?>