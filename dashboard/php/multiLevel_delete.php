<?php 
	include 'koneksi.php';
	$id_student=$_GET['id_student'];

	$query=mysqli_query($konek, "DELETE FROM nilai WHERE id_student='$id_student'");

	if ($query){
		header("location:multiLevel_basic-table.php");
	}
	else{
		echo "<script>alert('Data gagal dihapus');window.location='../html/multiLevel_404.html'</script>";
	}

 ?>