<?php
session_start();
include 'koneksi.php';
?>

<?php include 'header.php'; ?>
<style>/* Mengatur styling dasar tabel */
/* Mengatur styling dasar tabel */
table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

/* Mengatur styling pada header dan isi tabel */
table tbody tr td {
    padding: 12px 15px;
    font-size: 16px;
    color: #333;
}


table tbody tr:nth-child(odd) {
    background-color: #ffffff;
}

/* Gaya khusus untuk teks di kolom pertama (label) */
table tbody tr td:first-child {
    font-weight: bold;
    color: #555;
}


</style>
<div class="container-fluid bg-breadcrumb">
	<div class="container text-center py-5" style="max-width: 900px;">
		<h3 class="text-white display-3 mb-4">Biodata</h1>
			<ol class="breadcrumb justify-content-center mb-0">
				<li class="breadcrumb-item "><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active text-white">Biodata</li>
			</ol>
	</div>
</div>

<div class="container-fluid about py-5">
	<div class="container py-5">
		<div class="row g-5 align-items-center">
			<?php $ambil = $koneksi->query("SELECT *FROM biodata"); ?>
			<?php while ($biodata = $ambil->fetch_assoc()) { ?>
				<div class="col-lg-5">
					<div class="h-100 d-flex justify-content-center">
						<img src="foto/<?php echo $biodata['foto'] ?>" class="img-fluid rounded" alt="">
					</div>
				</div>
				<div class="col-lg-7" style="padding-bottom: 20%;">
					<table class="table-custom">
						<tbody>
							<tr>
								<td width="20%">Nama Lengkap</td>
								<td>: <?php echo $biodata["nama"] ?></td>
							</tr>
							<tr>
								<td width="200px">Tempat, Tanggal Lahir</td>
								<td>: <?php echo $biodata["tempatlahir"] . ', ' . formatTanggal($biodata["tanggallahir"]); ?></td>
							</tr>
							<tr>
								<td width="200px">Jenis Kelamin</td>
								<td>: <?php echo $biodata["jeniskelamin"] ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>