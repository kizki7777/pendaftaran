<div id="mrova-feedback">
	<div id="mrova-contact-thankyou" style="display: none;">
		Thank you.  We'hv received your feedback.
	</div>
	<div id="mrova-form">
		<?php $attrib = array('id' => 'mrova-contactform'); ?>
		<?php echo form_open_multipart('daftar/add', $attrib); ?>
			<ul >
				<li>
					<label for="name">Nama*</label>
					<input type="text" name="name" class="required" id="mrova-name" value="">
				</li>
				<li>
					<label for="email">Email*</label>
					<input type="text" name="email" class="required" id="mrova-email" value="">
				</li>
				<li>
					<label for="message">Motivasi menjadi fasilitator bakti pemuda*</label>
					<textarea class="required" id="mrova-message" name="message"  rows="8" cols="30"></textarea>
				</li>
				<li>
					<label for="cv">Upload CV*</label>
					<input type="file" name="cv" class="required" id="mrova-cv" value="">
				</li>
			</ul>
			<input type="submit" value="Kirim" id="mrova-sendbutton" name="mrova-sendbutton">
		<?php echo form_close(); ?>
	</div>
	<div id="mrova-img-control"></div>
</div>