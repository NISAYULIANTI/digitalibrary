<?php
	include 'header.php';
	include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
            <form method="post" action="proses_simpan_peminjaman.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" disabled value="<?=$_SESSION['username']?>">
                    <input type="hidden" class="form-control" name="id_user" value="<?=$_SESSION['id_user']?>">
                </div>
                <div class="form-group">
                    <label>Pilih Buku</label> 
                    <select class="form-control mt-2" name="id_buku">
                        <option>Silahkan Pilih</option>
                        <?php 
		                include '../koneksi.php';
		                $data = mysqli_query($koneksi,"select * from buku");
		                while($d_buku = mysqli_fetch_array($data)){?>
                            <option value="<?php echo $d_buku['id_buku']; ?>"><?php echo $d_buku['judul']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Peminjaman</label>
                    <input type="date" class="form-control" name="tanggal_peminjaman">
                </div>
                <div class="form-group">
                    <label>Tanggal Pengembaliann</label>
                    <input type="date" class="form-control" name="tanggal_pengembalian">
                </div>
                <div class="form-group">
                    <label>Status Peminjaman</label>
                    <select name="status_peminjaman" class="form-control">
                        <option value="1" selected>Di Pinjam</option>
                        <!-- <option value="2">Di Kembalikan</option> -->
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary btn-sm mt-3">Simpan</button>
                </div>
            </form>
		</div>
	</div>
</div>

<?php
	include 'footer.php';
?>