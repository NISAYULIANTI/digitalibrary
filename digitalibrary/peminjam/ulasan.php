<?php
	include 'header.php';
	include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
            <?php 
	        if(isset($_GET['pesan'])){
		        if($_GET['pesan']=="simpan"){
			        echo "<div class='alert alert-success'>Data Berhasil Disimpan</div>";
		        }
	        }
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="update"){
                    echo "<div class='alert alert-success'>Data Berhasil Diupdate</div>";
                }
            }
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="hapus"){
                    echo "<div class='alert alert-success'>Data Berhasil Dihapus</div>";
                }
            }
	        ?>
            <a href="tambah_ulasan.php" class="btn btn-primary btn-sm mt-2">Tambah Data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Buku</th>
                        <th>Ulasan</th>
						<th>Rating</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
		            include '../koneksi.php';
		            $no = 1;
		            $data = mysqli_query($koneksi,"SELECT * FROM  ulasanbuku INNER JOIN user ON ulasanbuku.id_user=user.id_user INNER JOIN buku ON ulasanbuku.id_buku=buku.id_buku");
		            while($d = mysqli_fetch_array($data)){
			            ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['username']; ?></td>
							<td><?php echo $d['judul']; ?></td>
                            <td><?php echo $d['ulasan']; ?></td>
                            <td><?php echo $d['rating']; ?></td>
                            <td>
                                <a href="edit_ulasan.php?id_ulasan=<?php echo $d['id_ulasan']; ?>" class="btn btn-warning btn-sm  mb-3">Edit</a>
                                <a href="proses_hapus_ulasan.php?id_ulasan=<?php echo $d['id_ulasan']; ?>" class="btn btn-danger btn-sm  mb-3">Hapus</a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
	include 'footer.php';
?>
