<?php
	include 'header.php';
	include 'navbar.php';
?>
				
					<div class="content mt-3">
						<div class="row">
							<div class="col-sm-3">								
								<div class="card">
									<div class="card-body bg-success bg-gradient text-center">
										<h3>DATA BUKU</h3>
										<h2>3</h2>
										<a href="#" class="btn btn-dark btn-sm">Lihat Data</a>
									</div>
								</div>
							</div>
							<div class="col-sm-3">								
								<div class="card">
									<div class="card-body bg-danger text-center">
										<h3>KATEGORI BUKU</h3>
										<h2>3</h2>
										<a href="#" class="btn btn-dark btn-sm">Lihat Data</a>
									</div>
								</div>
							</div>
							<div class="col-sm-3">								
								<div class="card">
									<div class="card-body bg-info text-center">
										<h3>USERS</h3>
										<h2>3</h2>
										<a href="#" class="btn btn-dark btn-sm">Lihat Data</a>
									</div>
								</div>
							</div>
							<div class="col-sm-3">								
								<div class="card">
									<div class="card-body bg-primary text-center">
										<h3>PEMINJAMAN</h3>
										<h2>3</h2>
										<a href="#" class="btn btn-dark btn-sm">Lihat Data</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="content mt-3">
							<div class="card">
								<div class="card-body">
								<p>Halo <b><?php echo $_SESSION['Username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.
								</p>
								</div>
							</div>
						</div>


<?php
	include 'footer.php';
?>
