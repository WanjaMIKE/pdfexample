<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <h4 class="text-center">Welcome to PDF example</h4>
        <p class="text-center">Please fill the details before</p>

        <div class="col-md-6 offset-md-3">
            <form method="POST" class="form" action="createfile.php">
                <label class="form-label" for="username">Name</label><br>
                <input class="form-control" name="username" type="text" required><br>
                <label class="form-label" for="usermail">Email</label><br>
                <input class="form-control" name="usermail" type="text" required><br>
                <label class="form-label" for="residence">Residence</label><br>
                <input class="form-control" name="residence" type="text" required><br>
                <label class="form-label" for="yourstory">Your Story</label><br>
                <textarea class="form-control" name="yourstory" rows="5" required></textarea>
                <div class="d-grid gap-2 col-6 mx-auto mt-5">
                    <button type="submit" class="btn btn-primary btn-block">Create PDF</button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>