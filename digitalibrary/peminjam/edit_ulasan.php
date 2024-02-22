<?php
	include 'header.php';
	include 'navbar.php';
?>
<?php 
include '../koneksi.php';
$id_ulasan = $_GET['id_ulasan'];
$data = mysqli_query($koneksi,"SELECT * FROM  ulasanbuku INNER JOIN user ON ulasanbuku.id_user=user.id_user INNER JOIN buku ON ulasanbuku.id_buku=buku.id_buku WHERE ulasanbuku.id_ulasan=" . $_GET['id_ulasan']);
while($d_koleksi = mysqli_fetch_array($data)){ 
    ?> 
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
            <form method="post" action="proses_update_ulasan.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" disabled value="<?=$_SESSION['username']?>">
                    <input type="hidden" class="form-control" name="id_user" value="<?=$_SESSION['id_user']?>">
                    <input type="hidden" class="form-control" name="id_ulasan" value="<?=$id_ulasan?>">
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
                    <label>Ulasan</label>
                    <input type="text" class="form-control" value="<?php echo $d_koleksi['ulasan']; ?>" name="ulasan">
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <?php $rating = $d_koleksi['rating']; ?>
                    <select name="rating" class="form-control">
                        <option <?= ($rating == '1') ? "selected": ""?> >1</option>
                        <option <?= ($rating == '2') ? "selected": ""?> >2</option>
                        <option <?= ($rating == '3') ? "selected": ""?> >3</option>
                        <option <?= ($rating == '4') ? "selected": ""?> >4</option>
                        <option <?= ($rating == '5') ? "selected": ""?> >5</option>
                        <option <?= ($rating == '6') ? "selected": ""?> >6</option>
                        <option <?= ($rating == '7') ? "selected": ""?> >7</option>
                        <option <?= ($rating == '8') ? "selected": ""?> >8</option>
                        <option <?= ($rating == '9') ? "selected": ""?> >9</option>
                        <option <?= ($rating == '10') ? "selected": ""?> >10</option>
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