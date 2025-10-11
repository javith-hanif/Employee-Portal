<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Portal</title>
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
        <p class="navbar-brand"><a href="" class="text-black text-decoration-none">Employee Portal</a>|Landing Page</p>
    </div>
  </nav> 
  <div class="text-center mt-3">
    <a class="btn btn-success" href="<?= base_url(('register'))?>">Users Login</a>
    <a class="btn btn-warning" href="<?= base_url(('adlogview'))?>">Admin Login</a>
   </div> 
</body>
</html>