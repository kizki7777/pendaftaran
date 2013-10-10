<?php $this->load->view('_layout/header'); ?>

	<div id="wrapper">
		<div class="success message">
		 <h3>Pendaftaran Berhasil!</h3>
		 <p>Data pendaftaran yang kamu kirimkan akan kami proses.</p>
		</div>
		<nav class="cl-effect-2">
			<a href="<?php echo site_url('daftar') ?>"><span data-hover="Kembali ke halaman pendaftaran">Kembali ke halaman pendaftaran</span></a>
		</nav>
		<p>
			<?php echo $info['name'] ?>
		</p>
	</div>

<?php $this->load->view('_layout/footer'); ?>