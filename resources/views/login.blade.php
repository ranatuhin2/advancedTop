


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Login</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
     <form method="POST" action="{{ route('create') }}" class="p-4 shadow rounded" style="max-width: 400px; margin: auto;">
          @csrf
          <h2 class="mb-4 text-center">Login</h2>
          <div class="mb-3">
               <label for="email" class="form-label">Email address</label>
               <input type="email" class="form-control" id="email" name="email" required autofocus>
          </div>
          <div class="mb-3">
               <label for="password" class="form-label">Passsword</label>
               <input type="password" class="form-control" id="password" name="password" required autofocus>
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
     </form>

</div>
</body>
</html>