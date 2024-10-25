<?php
session_start();
include 'koneksi.php';
?>

<?php include 'header.php'; ?>
<div class="carousel-header">
	<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img src="foto/bgutama.jpg" class="img-fluid" alt="Image">
				<div class="carousel-caption">
					<div class="p-3" style="max-width: 900px;">
						<h1 class="display-2 text-capitalize text-white mb-4">Selamat datang di situs portofolio Fotografer saya</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="container-fluid about py-5">
	<div class="container py-5">
		<div class="row g-5 align-items-center">
			<?php $ambil = $koneksi->query("SELECT *FROM home"); ?>
			<?php while ($home = $ambil->fetch_assoc()) { ?>
				<div class="col-lg-5">
					<div class="h-100">
						<img src="foto/<?php echo $home['foto'] ?>" class="img-fluid w-100 h-100" alt="">
					</div>
				</div>
				<div class="col-lg-7">
					<h5 class="section-about-title pe-3"><?php echo $home["judul"] ?></h5>
					<p class="mb-4">
						<?php echo nl2br($home["isiteks"]); ?>
					</p>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>