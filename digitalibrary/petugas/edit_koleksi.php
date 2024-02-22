<?php
	include 'header.php';
	include 'navbar.php';
?> 
<?php 
include '../koneksi.php';
$id_kategoribuku = $_GET['id_kategoribuku'];
$data = mysqli_query($koneksi,"SELECT * FROM kategoribuku_relasi WHERE id_kategoribuku='$id_kategoribuku'");
while($d_koleksi = mysqli_fetch_array($data)){ 
    ?>
    <div class="content mt-3">
		<div class="card">
			<div class="card-body">
                <form method="post" action="proses_update_koleksi.php">
                    <div class="form-group">
                        <label>Pilih Buku</label>
                        <input type="hidden" name="id_kategoribuku" value="<?php echo $d_koleksi['id_kategoribuku']; ?>">
                        <select class="form-control mt-2" name="id_buku">
                            <option>Silahkan Pilih</option>
                        <?php 
		                include '../koneksi.php';
		                $data = mysqli_query($koneksi,"select * from buku");
		                while($d_buku = mysqli_fetch_array($data)){?>
                            <option value="<?php echo $d_buku['id_buku']; ?>" <?php if ($d_buku['id_buku'] == $d_koleksi['id_buku']) {echo "selected";} ?>><?php echo $d_buku['judul']; ?></option>
                        <?php } ?> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pilih Kategori</label>
                        <select class="form-control mt-2" name="id_kategori">
                            <option>Silahkan Pilih</option>
                        <?php 
		                include '../koneksi.php';
		                $data = mysqli_query($koneksi,"select * from kategoribuku");
		                while($d_kategoribuku = mysqli_fetch_array($data)){?>
                            <option value="<?php echo $d_kategoribuku['id_kategori']; ?>" <?php if ($d_kategoribuku['id_kategori'] == $d_koleksi['id_kategori'] ) {echo "selected";} ?>><?php echo $d_kategoribuku['nama_kategori']; ?></option>
                        <?php } ?>
                        </select>
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