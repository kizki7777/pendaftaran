<?php $this->load->view('_layout/header'); ?>

	<div id="wrapper">
		<?php echo $error; ?>

		<h1>Form Pendaftaran Bakti Pemuda</h1>

		<p>Kami percaya bahwa pemuda indonesia haruslah menjadi sosok yang keren. Bagi pemuda, keren bukanlah pilihan, melainkan sebuah keharusan. Dan keren itu diukur bukan seberapa bagus tampilanmu atau bahkan seberapa bagus nilai-nilaimu. Yang lebih penting lagi, keren itu bukan seberapa pintar kamu mengkritisi dunia sekitarmu, lingkunganmu, pemerintahanmu, dan negaramu. Keren itu adalah tidak hanya sekedar mengkritik tetapi juga berani untuk melakukan sesuatu untuk apa yang kamu kritisi, walau itu kecil.</p>

		<p>Untuk jadi pemuda yang keren membutuhkan keberanian dan kerja keras. Bakti pemuda mengajak kamu untuk menunjukkan seberapa keren dirimu melalui partisipasi sebagai fasilitator bakti pemuda. Daftarkan dirimu sekarang dan tunjukan kepada mereka bahwa kamu memang benar-benar keren. Merdeka.</p>

		<p class="italic">Silahkan isi form dengan mengklik tombol <strong>"Daftar"</strong> di samping kanan dan tunjukkan baktimu!</p>
	</div>

	<!--Feedback Form HTML START -->
		<?php $this->load->view('_form/register'); ?>
	<!-- Feedback Form HTML END -->

<?php $this->load->view('_layout/footer'); ?>