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
                                <a href="tambah_kategori.php" class="btn btn-primary btn-sm mt-2">Tambah Data</a>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
		                                include '../koneksi.php';
		                                $no = 1;
		                                $data = mysqli_query($koneksi,"select * from kategoribuku");
		                                while($d = mysqli_fetch_array($data)){
			                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['nama_kategori']; ?></td>
                                            <td>
                                            <a href="edit_kategori.php?id_kategori=<?php echo $d['id_kategori']; ?>" class="btn btn-warning btn-sm  mb-3">Edit</a>
                                            <a href="proses_hapus_kategori.php?id_kategori=<?php echo $d['id_kategori']; ?>" class="btn btn-danger btn-sm  mb-3">Hapus</a>
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
