<?php
	include 'header.php';
	include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
            <form method="post" action="proses_simpan_users.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat">
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