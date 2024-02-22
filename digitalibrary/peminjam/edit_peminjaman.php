<?php
	include 'header.php';
	include 'navbar.php';
?>
<?php 
include '../koneksi.php';
$id_peminjaman = $_GET['id_peminjaman'];
$data = mysqli_query($koneksi,"SELECT * FROM  peminjaman INNER JOIN user ON peminjaman.id_user=user.id_user INNER JOIN buku ON peminjaman.id_buku=buku.id_buku WHERE peminjaman.id_peminjaman=" . $_GET['id_peminjaman']);
while($d_koleksi = mysqli_fetch_array($data)){ 
    ?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
            <form method="post" action="proses_update_peminjaman.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" disabled value="<?=$_SESSION['username']?>">
                    <input type="hidden" class="form-control" name="id_user" value="<?=$_SESSION['id_user']?>">
                    <input type="hidden" class="form-control" name="id_peminjaman" value="<?=$id_peminjaman?>">
                </div>
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
                    <label>Tanggal Peminjaman</label>
                    <input type="date" class="form-control" value="<?php echo $d_koleksi['tanggal_peminjaman']; ?>" name="tanggal_peminjaman">
                </div>
                <div class="form-group">
                    <label>Tanggal Pengembaliann</label>
                    <input type="date" class="form-control" value="<?php echo $d_koleksi['tanggal_pengembalian']; ?>" name="tanggal_pengembalian">
                </div>
                <div class="form-group">
                    <label for="status_peminjaman">Status Peminjaman</label>
                    <?php $status_peminjaman = $d_koleksi['status_peminjaman']; ?>
                    <select name="status_peminjaman" class="form-control">
                        <!-- <option value="1" <?= ($status_peminjaman == '1') ? "selected": ""?> >Di Pinjam</option> -->
                        <option value="2" <?= ($status_peminjaman == '2') ? "selected": ""?>>Di Kembalikan</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary btn-sm mt-3">Simpan</button>
                </div>
            </form>
		</div>
	</div>
</div>
<?php } ?>

<?php
	include 'footer.php';
?>