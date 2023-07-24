<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <!-- Load Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      width: 400px;
    }
  </style>
</head>

<body>
<div class="container">
        <form method="POST" action ="{{route ('login.action') }}">
            @csrf
            <div class="page-heading">
                <h3>Login</h3>
            </div>
            <div class="mb-3">
                <label> Username <span class="text-danger">*</span></label>
                <input class ="form-control" type="text" name="username"/>
            </div>
            <div class="mb-3">
                <label> Password <span class="text-danger">*</span></label>
                <input class ="form-control" type="password" name="password"/>
            </div> 
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
              
            </div>
</form>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
