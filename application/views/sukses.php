<?php $this->load->view('_layout/header'); ?>

	<div id="wrapper">
		<div class="success message">
		 <h3>Pendaftaran Berhasil!</h3>
		 <p>Data pendaftaran yang kamu kirimkan akan kami proses.</p>
		</div>
		<nav class="cl-effect-2">
			<a href="<?php echo site_url('/') ?>"><span data-hover="Kembali ke halaman pendaftaran">Kembali ke halaman pendaftaran</span></a>
		</nav>
		<center><h3>Data yang kamu masukan:</h3></center>
		<p><strong>Nama: </strong><?php echo $nama; ?></p>
		<p><strong>Email: </strong> <?php echo $email; ?></p>
		<p><strong>Motivasi: </strong><?php echo $message; ?></p>
		<nav class="cl-effect-2">
			<a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $cv; ?>">
				<span data-hover="Lihat CV kamu">
					Lihat CV kamu
				</span>
			</a>
		</nav>

<?php $this->load->view('_layout/footer'); ?>