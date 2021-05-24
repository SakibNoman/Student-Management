<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Student Management System</title>
  </head>
  <body>
  <div class="container animate__animated animate__pulse">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
            <h3 class="text-center mb-4" >Admin Login Form</h3>
            <form action="login.php" method="POST">
                <div class="mb-3" >
                    <input type="text" name="username" id="" placeholder="Username" required="" class="form-control" >
                </div>
                <div class="mb-3">
                    <input type="password" name="password" id="" placeholder="Password" required="" class="form-control" >
                </div>
                <div>
                    <input type="submit" value="Login" name="login" class="form-control btn-dark" >
                </div>
        </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>