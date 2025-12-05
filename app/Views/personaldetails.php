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
        <p class="navbar-brand"><a href="<?= base_url('landingpage')?>" class="text-black text-decoration-none">Employee Portal</a>|personal details</p>
      </div>
</nav>  
<div class="container mt-2">
<div class="row">
        <div class="col-12 col-md-8 mx-auto">
            <div class="card">
                    <div class="card-body">
                        <h2>personal details</h2>
<form method="post" action="<?= base_url('personaldetails/update') ?>">
    <div class="form-group mb-2">
    <label>Role</label>
    <input type="text" name="role" value="<?= esc($detail['role'])?>" class="form-control" required>
    </div>
    <div class="form-group mb-2">
    <label>Gender</label>
    <input type="text" name="gender" value="<?= esc($detail['gender'])?>" class="form-control" required>
    </div>
    <div class="form-group mb-2">
    <label>Qualification</label>
    <input type="text" name="qualification" value="<?= esc($detail['qualification'])?>" class="form-control" required>
    </div>
     <div class="form-group mb-2">
    <label>Phone no</label>
    <input type="number" name="phone" value="<?= esc($detail['phone'])?>" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success mb-2">Submit</button>
</form>
</div>
</div>
</div>
</div>
</body>
</html>