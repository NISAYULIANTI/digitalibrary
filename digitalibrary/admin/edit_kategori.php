<?php
	include 'header.php';
	include 'navbar.php';
?>
<?php 
		include '../koneksi.php';
        $id_kategori = $_GET['id_kategori'];
		$data = mysqli_query($koneksi,"SELECT * FROM kategoribuku WHERE id_kategori='$id_kategori'");
	    while($d = mysqli_fetch_array($data)){
?>

                    <div class="content mt-3">
						<div class="card">
							<div class="card-body">
                               <form method="post" action="proses_update_kategori.php">
                               <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="hidden" name="id_kategori" value="<?php echo $d['id_kategori']; ?>">
                                <input type="text" class="form-control" value="<?php echo $d['nama_kategori']; ?>" name="nama_kategori">
                               </div>
                               <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary btn-sm mt-3">Update</button>
                               </div>
                               </form>
							</div>
						</div>
					</div>
                    <?php } ?>
<?php
	include 'footer.php';
?>