<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Module Five Assignment</title>

	<link rel="stylesheet" href="assets/css/app.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
	<?php
	require_once './includes/Parson.php';

	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';

	$person = new Person($name, $email);
	?>

	<main id="main_content">
		<section class="page-header">
			<div class="container">
				<h1 class="page-header__heading">Module Five Assignment</h1>
			</div>
		</section>

		<section class="content-area">
			<div class="container">
				<div class="input-form__wrapper">
					<form action="index.php" method="POST" class="input-form">
						<div class="input-form__field">
							<label for="name" class="input-form__label">Name:</label>
							<input type="text" name="name" id="name" class="input-form__input"
								placeholder="Enter your name">
						</div>
						<div class="input-form__field">
							<label for="email" class="input-form__label">Email:</label>
							<input type="email" name="email" id="email" class="input-form__input"
								placeholder="Enter your email">
						</div>
						<input type="submit" value="Submit" class="input-form__submit">
					</form>
				</div>

				<?php if( !empty($person->getName()) || !empty( $person->getEmail() ) ) :?>
					<div class="input-form__output">
						<h2 class="output__heading">Form Output</h2>
						<div class="output__content">
							<ul>
								<?php if( !empty($person->getName()) ) :?>
									<li><strong>Name: </strong><?php echo $person->getName(); ?></li>
								<?php endif; ?>

								<?php if( !empty($person->getEmail()) ) :?>
									<li><strong>Email: </strong><?php echo $person->getEmail(); ?></li>
								<?php endif; ?>
							</ul>
						</div>
				</div>
				<?php endif; ?>
			</div>
			<!-- /.container -->
		</section>
	</main>

	<footer class="site-footer">
		<div class="container">
			<p class="site-footer__text">© 2023 Mominul Islam</p>
		</div>
	</footer>

</body>
</html>