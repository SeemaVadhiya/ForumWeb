<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>icode</title>
</head>

<body>
    <?php
include 'partials/_header.php';
 ?>
    <?php
 include 'partials/_dbconnect.php';
 
 ?>
    <!-- sliders !-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://source.unsplash.com/2400x1000/?coding,javascript"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://source.unsplash.com/2400x1000/?coding,python"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://source.unsplash.com/2400x1000/?coding,devops"
                            alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <h1 class="text-center">icode - Browse Categories</h1>
        <div class="row">

            <!--    fetch all the categories      !-->
            <?php
$sql = "SELECT * FROM `categories`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
$id = $row['category_id'];
$cat = $row['category_name'];
$catd = $row['category_description'];
echo '<div class="col-md-4">
<div class="card my-2" style="width: 18rem;">
<img src="https://source.unsplash.com/500x400/?' . $cat . ',coding" class="card-img-top" alt="...">
<div class=" card-body ">
<h5 class="card-title"><a href="threadslist.php?catid=' . $id .'">' . $cat . '</a></h5>
<p class="card-text">' . $catd . '</p>
<a href="threadslist.php?catid=' . $id . '" class="btn btn-success">View Threads</a>
</div>
</div>
</div>';

}
?>
            <!--- Use a for loop to iterate through categories  !-->
            <!---  category container  
<div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
  <div class=" card-body ">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div><div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
  <div class=" card-body ">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div><div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
  <div class=" card-body  ">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div><div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
  <div class=" card-body ">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div><div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
  <div class=" card-body ">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div><div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
  <div class=" card-body ">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div><div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
  <div class=" card-body ">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div><div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
  <div class=" card-body ">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div><div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
  <div class=" card-body ">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>


!--->
    <?php
include 'partials/_footer.php';
 ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>