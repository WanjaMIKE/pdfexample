<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Products</title>
</head>

<body>

<?php
require_once('connection.php');
$query = "select * from pdfrecords";
$result = mysqli_query($con, $query); 

?>
    <br>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php 
  while($rows=mysqli_fetch_assoc($result)){
  
?>

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img src=<?php echo $rows['imageurl']?> width=100%, height="170px" alt="./img/food.jpg">
                        <div class="card-body">
                            <h6><?php echo $rows['productname']?></h6>
                            <p class="card-text"><?php echo $rows['productdesc']?></p>
                            <div class="d-flex justify-content-between align-items-center">

                                <strong class="text-primary" style="color:#ff0000">$<?php echo $rows['price']?></strong>

                            </div>
                        </div>
                    </div>
                </div>

                <?php
                
}
 
 ?>

                <button class="btn btn-primary btn-block"> <a href="download.php">Download Products</a></button>

</body>

</html>