<?php 
	include 'koneksi.php';
	$id_student=$_POST['id_student'];
	$nama=$_POST['nama'];
	$bahasaIndonesia=$_POST['bahasaIndonesia'];
	$matematika=$_POST['matematika'];
	$fisika=$_POST['fisika'];
    $rata =($bahasaIndonesia+$matematika+$fisika)/3;

	$query = mysqli_query($konek, "UPDATE nilai SET nama='$nama', bahasaIndonesia='$bahasaIndonesia', matematika='$matematika', fisika='$fisika', rata='$rata' WHERE id_student='$id_student'");
	if($query){
		echo "<script>alert('Update berhasil');</script>";
		header("location:multiLevel_basic-table.php");
	}
	else{
		echo "<script>alert('Update gagal');window.location='../html/multiLevel_404.html'</script>";
	}

 ?>