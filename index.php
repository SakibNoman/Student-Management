<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>
    <div class="container">
        <div class="d-flex justify-content-end mt-3" ><a class="btn btn-primary" href="admin/login.php">Login</a></div>
        <h1 class="text-center mt-5" >Welcome to Student Management System</h1>

        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
            <form action="" method="POST">
            <table class="table table-bordered" >
                <tr>
                    <td class="text-center" colspan="2" ><label for="">Student Information</label></td>
                </tr>
                <tr>
                    <td><label for="choose">Choose Class</label></td>
                    <td>
                        <select class="form-control" name="choose" id="choose">
                            <option value="">Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> <label for="roll">Roll</label> </td>
                    <td> <input class="form-control" placeholder="4 digit Roll" pattern=[0-9]{4} type="text" id="roll" name="roll"/> </td>
                </tr>
                <tr>
                    <td class="text-center" colspan="2" > <input class="btn btn-outline-primary" type="submit" value="Show Info" name="showInfo">  </td>
                </tr>
            </table>
        </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>