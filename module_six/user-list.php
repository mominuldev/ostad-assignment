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
	<main id="main_content">
		<section class="page-header">
			<div class="container">
				<h1 class="page-header__heading">Module Six Assignment</h1>
			</div>
		</section>
		<!-- /.page-header -->

		<section class="content-area">
			<div class="container">
				<div class="user-info__wrapper">
					

					<div class="table-title">
						<h3>User Data</h3>
					</div>
					<table class="table-fill">
						<thead>
							<tr>
                                <th class="text-left">Profile Image</th>
								<th class="text-left">Name</th>
								<th class="text-left">Email</th>
							</tr>
						</thead>
						<tbody class="table-hover">
                        <?php
                            // Read data from CSV file and display in table
                            if (($handle = fopen("users.csv", "r")) !== FALSE) {
                                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                    echo "<tr>";
                                    echo "<td><img src='uploads/".$data[2]."' width='120' height='120'></td>";
                                    echo "<td>".$data[0]."</td>";
                                    echo "<td>".$data[1]."</td>";
                                    echo "</tr>";
                                }
                                fclose($handle);
                            }
                            ?>
						</tbody>
					</table>

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