<div id="mrova-feedback">
	<div id="mrova-contact-thankyou" style="display: none;">
		Thank you.  We'hv received your feedback.
	</div>
	<div id="mrova-form">
		<form id="mrova-contactform" action="<?php echo site_url('daftar/add') ?>" method="post">
			<ul >
				<li>
					<label for="mrova-name">Nama*</label>
					<input type="text" name="mrova-name" class="validate[required]" id="mrova-name" value="">
				</li>
				<li>
					<label for="mrova-email">Email*</label>
					<input type="text" name="mrova-email" class="validate[required]" id="mrova-email" value="">
				</li>
				<li>
					<label for="mrova-message">Motivasi menjadi fasilitator bakti pemuda*</label>
					<textarea class="validate[required]" id="mrova-message" name="mrova-message"  rows="8" cols="30"></textarea>
				</li>
				<li>
					<label for="mrova-cv">Upload CV*</label>
					<input type="file" name="mrova-cv" class="validate[required]" id="mrova-cv" value="">
				</li>
			</ul>
			<input type="submit" value="Kirim" id="mrova-sendbutton" name="mrova-sendbutton">
		</form>
	</div>
	<div id="mrova-img-control"></div>
</div>