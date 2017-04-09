<?php
use Phelium\Component\reCAPTCHA;

$reCAPTCHA = new reCAPTCHA('6LfLHRwUAAAAAGKC1EAbFEgUXNXcEoOBvFQlo8wb', '6LfLHRwUAAAAAMYB7dGFJjnhoQtTzyOGrDto3rc0');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Will You Go? - Attendee Confirmation</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/slate/bootstrap.min.css"s>
	<?= $reCAPTCHA->getScript(); ?>
</head>
<body>
	
		
		@include('layouts.header')

		<div class="container-fluid">
			@yield('content')
		</div>

		@include('layouts.footer')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>