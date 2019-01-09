<!-- ------------------------------------------------------------------------------------------------------------------ -->
<!-- Takk for at du tar en titt! Ønsker du hele kildekoden så sjekk oss ut på Github under https://github.com/kodesonen -->
<!-- ------------------------------------------------------------------------------------------------------------------ -->
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<title>Nytt kapittel - <?php echo $core->name; ?></title>
</head>

<body>
	<div class="header">
		<div class="wrapper">
			<div class="logo-section">
				<a href="/?side=hjem"><img src="/assets/img/original-vannrett_copy.png" alt="Kodesonen logo"/></a>
			</div>

			<?php $core->getHeader(); ?>
		</div>
	</div>

	<div class="wrapper">
		<div class="medlem-form">
			<h1>Legg til nytt kapittel</h1><hr/>
			<div class="wrapper">
				<?php if(isset($_POST['submit'])){ $core->newChapter(); } ?>
			</div>

			<form action='' method='POST'>
				<label for="navn"><b>Kapittelnavn</b></label>
				<input type="text" placeholder="Oppgi kapittel navnet" name="navn" required>
				
				<label for="delnr"><b>Delnummer</b></label>
				<input type="text" placeholder="Oppgi delnummer (for eksempel 1.0)" name="delnr" required>
				
				<hr/><button type="submit" name="submit" class="medlem-button">Legg til kapittel</button>
			</form>
		</div>

		<div class="medlem-info">
			<img src="/assets/img/homepage/test.png" height="90%" width="90%">
		</div>

		<div class="footer">
			<div class="wrapper">
				<div class="footer-trademark">
					<p>© 2018 - <a href="/?side=hjem"><?php echo $core->name; ?>.no</a></p>
				</div>

				<div class="footer-hyperlinks">
					<a href="mailto:<?php echo $core->contact; ?>"><i class="fas fa-envelope"></i></a> 
					<a href="<?php echo $core->facebook; ?>" target="_blank"><i class="fab fa-facebook"></i></a> 
					<a href="<?php echo $core->github; ?>" target="_blank"><i class="fab fa-github-square"></i></a> 
					<a href="<?php echo $core->instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a> 
					<a href="<?php echo $core->linkedin; ?>" target="_blank"><i class="fab fa-linkedin"></i></a> 
					<a href="<?php echo $core->twitter; ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
