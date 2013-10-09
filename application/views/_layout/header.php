<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title><?php echo $meta_title; ?> | Bakti Pemuda</title>
	<!-- css for mrova form -->
	<link rel="stylesheet" href="assets/css/mrova-feedback-form.css" type="text/css"/>
	<!-- css custom -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
	<!-- css for validation engine -->
	<link rel="stylesheet" href="assets/css/validationEngine.jquery.css" type="text/css"/>

	<!-- javascript area -->
	<script src="assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>	
	<!-- Files For mRova Feedback Form [Dependency: jQuery] -->
	<script src="assets/js/mrova-feedback-form.js" type="text/javascript"></script>
	<!-- js for validation engine -->
	<script src="assets/js/languages/jquery.validationEngine-en.js" type="text/javascript"></script>
	<script src="assets/js/jquery.validationEngine.js" type="text/javascript"></script>	
	<!-- END -->

	<!-- script for using validation engine -->
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#mrova-contactform").validationEngine();
		});

		/**
		*
		* @param {jqObject} the field where the validation applies
		* @param {Array[String]} validation rules for this field
		* @param {int} rule index
		* @param {Map} form options
		* @return an error string if validation failed
		*/
		function checkHELLO(field, rules, i, options){
			if (field.val() != "HELLO") {
				// this allows to use i18 for the error msgs
				return options.allrules.validate2fields.alertText;
			}
		}
	</script>

</head>
<body>