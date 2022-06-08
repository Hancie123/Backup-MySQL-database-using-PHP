<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Backup MySQL Database using PHP</title>
    <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center" style="margin-top:30px;">Backup MySQL Database using PHP</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3>Database Credential and Name</h3>
                    <br>
                    <form method="POST" action="backup.php">
                        <div class="form-group row">
                         	<label for="server" class="col-sm-3 col-form-label">Server</label>
                          	<div class="col-sm-9">
                            	<input type="text" class="form-control" id="server" name="server" placeholder="ex 'localhost'" required>
                          	</div>
                        </div>
                        <div class="form-group row">
                          	<label for="username" class="col-sm-3 col-form-label">Username</label>
                          	<div class="col-sm-9">
                            	<input type="text" class="form-control" id="username" name="username" placeholder="ex 'root'" required>
                          	</div>
                        </div>
                        <div class="form-group row">
                          	<label for="password" class="col-sm-3 col-form-label">Password</label>
                          	<div class="col-sm-9">
                            	<input type="text" class="form-control" id="password" name="password" placeholder="db password">
                          	</div>
                        </div>
                        <div class="form-group row">
                          	<label for="dbname" class="col-sm-3 col-form-label">Database</label>
                          	<div class="col-sm-9">
                            	<input type="text" class="form-control" id="dbname" name="dbname" placeholder="database name to backup" required>
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