<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="shel">
    <style>
    .shel{
        opacity: 0.8;
    }
</style>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<nav class="navbar bg-body-secondary">
      <div class="container p-2">
        <p class="navbar-brand"><a href="<?= base_url('landingpage')?>" class="text-black text-decoration-none">Employee Portal</a>|User Log In</p>
    </div>
</nav>
            <div class="container"><div class="p20">
        <div class="row">
        <div class="col-md-8 col-sm-12 mx-auto">
            <div class="card mt-2">
                    <div class="card-body">
    <h2>Login</h2>
<form method="post" action="<?= base_url('login') ?>">
    <div class="form-group mb-2">
    <label>Email:</label>
    <input type="email" name="from_email" class="form-control" required>
</div>
<div class="form-group mb-2">
    <label>Password:</label>
    <input type="password" name="password" class="form-control" required>
</div>
    <button type="submit" class="btn btn-success mb-2">Login</button>
</form>
</div>
</div>
</div>
</div>
</div>

</body>
</html>