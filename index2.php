<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Backup MySQL Database using PHP</title>
</head>
<body>
<div class="container">
<h1 class="text-center" style="margin-top:30px;">Backup MySQL Database using PHP</h1>
<hr>
<div class="row justify-content-center">
<div class="col-sm-6">
<div class="card">
<div class="card-body">
<h3 style="text-align:center">Fill Database Credential</h3>
<br>
<form method="POST" action="backup.php">
<div class="form-group row">
<label for="server" class="col-sm-3 col-form-label">Server</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="server" placeholder="ex 'localhost'" required></br>
</div>
</div>
<div class="form-group row">
<label for="username" class="col-sm-3 col-form-label">Username</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="username" placeholder="ex 'root'" required></br>
</div>
</div>
<div class="form-group row">
<label for="password" class="col-sm-3 col-form-label">Password</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="password" placeholder="db password"></br>
</div>
</div>
<div class="form-group row">
<label for="dbname" class="col-sm-3 col-form-label">Database</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="dbname" placeholder="database name to backup" required></br>
</div>
</div>
<button type="submit" class="btn btn-primary" name="backup">Backup</button>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>