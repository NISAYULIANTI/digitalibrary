<?php
	include 'header.php';
	include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
            <form method="post" action="proses_simpan_ulasan.php">
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
                    <label>Ulasan</label>
                    <input type="text" class="form-control" name="ulasan">
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <select name="rating" class="form-control">
                    <option>Silahkan Pilih</option>
                        <option>1</option>
                        <option >2</option>
                        <option >3</option>
                        <option >4</option>
                        <option >5</option>
                        <option>6</option>
                        <option >7</option>
                        <option >8</option>
                        <option >9</option>
                        <option >10</option>
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