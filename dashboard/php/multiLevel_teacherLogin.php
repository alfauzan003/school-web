<?php
	include 'koneksi.php';

	$username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM teacher WHERE username='$username' and password='$password'";
    $result = mysqli_query($konek, $sql);
    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
        session_start();
    	$hasil=mysqli_fetch_array($result);
        $_SESSION['username'] = $hasil['username'];
        $_SESSION['email'] = $hasil['email'];
        $_SESSION['level'] = $hasil['level'];
        $_SESSION['status'] = 'login';
        header("location:../multiLevel_dashboard.php");
    }else {
    	?>
    	<script>
    		window.alert("Username atau Password salah");
        	window.location = "../../index.html";
    	</script>
        <?php
        echo mysqli_error($konek);
    }


?>