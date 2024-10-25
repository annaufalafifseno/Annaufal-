<?php
session_start();
include 'koneksi.php';
?>

<?php include 'header.php'; ?>
<div class="container-fluid bg-breadcrumb">
	<div class="container text-center py-5" style="max-width: 900px;">
		<h3 class="text-white display-3 mb-4">Galeri</h1>
			<ol class="breadcrumb justify-content-center mb-0">
				<li class="breadcrumb-item "><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active text-white">Galeri</li>
			</ol>
	</div>
</div>

<div class="container-fluid guide py-5">
	<div class="container py-5">
		<div class="mx-auto text-center mb-5" style="max-width: 900px;">
			<h1 class="mb-0">Galeri Saya</h1>
		</div>
		<div class="row g-4">
			<?php $ambil = $koneksi->query("SELECT *FROM galeri"); ?>
			<?php while ($galeri = $ambil->fetch_assoc()) { ?>
				<div class="col-md-6 col-lg-6">
					<div class="guide-item" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
						<div class="guide-img">
							<div class="">
								<img style="height: 600px;object-fit:cover;width:100%" src="foto/<?php echo $galeri['foto'] ?>" class="img-fluid rounded-top" alt="Image">
							</div>
						</div>
						<div class=" text-center rounded-bottom p-4">
							<div class="guide-title-inner">
								<h4 class="mt-3"><?php echo $galeri["judul"] ?></h4>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>