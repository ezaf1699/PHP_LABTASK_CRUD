<?php 
include "db_connect.php";
include "req/read.php";
$users = read($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD Project</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
	<div class="card shadow-lg rounded-3">
		<div class="card-body">
			<h2 class="mb-4 text-center text-primary">Students List</h2>
			<div class="d-flex justify-content-end mb-3">
				<a href="create.php" class="btn btn-success">➕ Create</a>
			</div>

			<?php if (isset($_GET['success'])) { ?>
				<div class="alert alert-success">
					<?=htmlspecialchars($_GET['success'])?>
				</div>
			<?php } ?>

			<?php if ($users != 0) { ?>
				<div class="table-responsive">
					<table class="table table-striped table-hover table-bordered align-middle">
						<thead class="table-dark">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">First Name</th>
								<th scope="col">Last Name</th>
								<th scope="col">Email</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $user) { ?>
							<tr>
								<td><?=$user['id']?></td>
								<td><?=$user['first_name']?></td>
								<td><?=$user['last_name']?></td>
								<td><?=$user['email']?></td>
								<td>
									<a href="update.php?id=<?=$user['id']?>" class="btn btn-warning btn-sm">✏ Update</a>
									<a href="req/delete.php?id=<?=$user['id']?>" 
									   class="btn btn-danger btn-sm" 
									   onclick="return confirm('Are you sure you want to delete this user?');">
									   🗑 Delete
									</a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			<?php } else { ?>
				<div class="alert alert-danger text-center">
					⚠ ERROR: No data found in the Database.
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
