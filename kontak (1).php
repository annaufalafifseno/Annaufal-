<?php
session_start();
include 'koneksi.php';
?>

<?php include 'header.php'; ?>
<div class="container-fluid bg-breadcrumb">
	<div class="container text-center py-5" style="max-width: 900px;">
		<h3 class="text-white display-3 mb-4">Kontak</h1>
			<ol class="breadcrumb justify-content-center mb-0">
				<li class="breadcrumb-item "><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active text-white">Kontak</li>
			</ol>
	</div>
</div>

<div class="container-fluid contact bg-light py-5">
	<div class="container py-5">
		<div class="mx-auto text-center mb-5" style="max-width: 900px;">
			<h1 class="mb-0">Kontak</h1>
		</div>
		<div class="row g-5 align-items-center">
			<div class="row g-4">
				<?php $ambil = $koneksi->query("SELECT * FROM kontak"); ?>
				<?php while ($kontak = $ambil->fetch_assoc()) { ?>
					<div class="col-md-6 col-lg-4">
						<div class="card text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
							<div class="card-body">
								<i class="fa fa-map-marker-alt fa-3x text-primary mb-3"></i>
								<h4 class="text-primary">Alamat</h4>
								<p class="mb-0"><?php echo $kontak["alamat"]; ?></p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4">
						<div class="card text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
							<div class="card-body">
								<i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
								<h4 class="text-primary">Nomor HP</h4>
								<p class="mb-0"><?php echo $kontak["nohp"]; ?></p>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4">
						<div class="card text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
							<div class="card-body">
								<i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
								<h4 class="text-primary">Email</h4>
								<p class="mb-0"><?php echo $kontak["email"]; ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

			<div class="col-12">
				<div class="rounded">
					<iframe class="rounded w-100"
						style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8333630984785!2d106.80292757499092!3d-6.285623293703328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ee1886af4b%3A0xb7b7b6c52ea8ab3!2sJl.%20Mawar%20No.123%2C%20RT.3%2FRW.7%2C%20Cilandak%20Bar.%2C%20Kec.%20Cilandak%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012430!5e0!3m2!1sid!2sid!4v1729847481528!5m2!1sid!2sid"
						loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>