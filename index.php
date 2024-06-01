<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: #052c65;
        }
        .bg_but_colo{
            background-color: #052c65;
        }
        .bg_box_color{
            background-color: #cfe2ff;
        }
        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center full-height">
        <div class="col-4">
            <div class="d-flex justify-content-center">
            <div class="border border-primary rounded-3 bg_box_color">
                <form action="" method="post" class="m-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">User Name</label>
                        <input type="text" name="username" class="form-control rounded-pill p-2 border-black" id="exampleFormControlInput1" placeholder="name@example">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control rounded-pill p-2 border-black" id="exampleFormControlInput1" placeholder="Password">
                    </div>
                    <br>
                    <div class="mb-3 ">
                        <input type="submit" name="submit" class="form-control rounded-pill p-2 text-white bg_but_colo" id="exampleFormControlInput1" placeholder="name@example">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- Add Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>