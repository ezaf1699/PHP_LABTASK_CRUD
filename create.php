<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD Project - Create</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

	<div class="container py-5">
		<div class="card shadow-lg rounded-3">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-center mb-4">
					<h3 class="text-primary mb-0">➕ Add Student</h3>
					<a href="index.php" class="btn btn-secondary">📋 View Users</a>
				</div>

				<form action="req/insert.php" method="POST" class="needs-validation" novalidate>
					<?php if (isset($_GET['error'])) { ?>
						<div class="alert alert-danger">
							<?= htmlspecialchars($_GET['error']) ?>
						</div>
					<?php } ?>

					<?php if (isset($_GET['success'])) { ?>
						<div class="alert alert-success">
							<?= htmlspecialchars($_GET['success']) ?>
						</div>
					<?php } ?>

					<div class="mb-3">
						<label class="form-label">First Name</label>
						<input type="text" name="first_name" class="form-control" placeholder="Enter First Name" required>
					</div>

					<div class="mb-3">
						<label class="form-label">Last Name</label>
						<input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" required>
					</div>

					<div class="mb-3">
						<label class="form-label">Email</label>
						<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
					</div>

					<button type="submit" class="btn btn-success w-100">✅ Create</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
