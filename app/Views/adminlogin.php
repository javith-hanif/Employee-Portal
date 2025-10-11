<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class="shel">
    <style>
    .shel{
        opacity: 0.8;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<nav class="navbar bg-body-secondary">
    <div class="container p-2">
        <p class="navbar-brand"><a href="<?= base_url('landingpage')?>" class="text-black text-decoration-none">Employee Portal</a>|User Log In</p>
    </div>
</nav>
<div class="p20">
    <div class="container">
     <div class="mt-3">  
      <div class="row">
        <div class="col-12 col-md-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?= base_url('ad')?>">
                   <div class="mb-3">
                       <label for="exampleInputuser1" class="form-label">username</label>
                       <input type="text" class="form-control" id="exampleInputuser1" name="username" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="form-group text-center">
                    <button type="reset" class="btn btn-primary" name="click">reset</button>
                    <button class="btn btn-success" name="submit">LogIn</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
       </div>
     </div>  
    </div>
</div>