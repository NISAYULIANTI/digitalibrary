<?php
	include 'header.php';
	include 'navbar.php';
?>
<?php
$id_user = $_GET['id_user'];
include '../koneksi.php';
$data = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id_user'");
while($d = mysqli_fetch_array($data)){ ?>
    <div class="content mt-3">
	    <div class="card">
		    <div class="card-body">
                <form method="post" action="proses_update_users.php">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">
                        <input type="text" class="form-control" name="username" value="<?php echo $d['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $d['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $d['nama_lengkap']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>">
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