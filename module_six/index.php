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
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">
</head>

<body>
	<main id="main_content">
		<section class="page-header">
			<div class="container">
				<h1 class="page-header__heading">Module Six Assignment</h1>
			</div>
		</section>
		<!-- /.page-header -->
		<section class="content-area">
			<div class="container">
				<div class="input-form__wrapper">
					<form action="process.php" method="POST" class="input-form" enctype="multipart/form-data">
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

						<div class="input-form__field">
							<label for="Password" class="input-form__label">Password:</label>
							<input type="password" name="password" id="password" class="input-form__input"
								placeholder="Enter your password">
						</div>

						<div class="input-form__field">
							<label for="email" class="input-form__label">Profile Picture</label>
							<input type="file" name="profile_picture" id="profile_picture"
								class="input-form__file-input">
						</div>

						<input type="submit" value="Submit" class="input-form__submit">
					</form>

				</div>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.content-area -->
	</main>
	</main>
	<!-- /#main_content -->

	<footer class="site-footer">
		<div class="container">
			<p class="site-footer__text">© 2023 Mominul Islam</p>
		</div>
	</footer>
	<!-- /.site-footer -->

</body>

</html>