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
 include 'partials/_dbconnect.php';
 
 ?>
    <?php
include 'partials/_header.php';
 ?>

    <?php   
$id = $_GET['catid'];
$sql = "SELECT * FROM `categories` WHERE category_id=$id;";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
$catname = $row['category_name'];
$catdesc = $row['category_description'];
}
?>

    <?php
     $showAlert = true;
$method = $_SERVER['REQUEST_METHOD'];
//echo $method;
if($method=='POST'){
    //insert thread into DB
    $th_title = $_POST['title'];
    $th_desc = $_POST['description'];
    $sql = "INSERT INTO `threads` (`thread_title`, `thread_cat_id`, `thread_user_id`, `timestamp`, `thread_desc`) VALUES ('$th_title', '$id', '0', current_timestamp(), '$th_desc');
    ";
    $result = mysqli_query($conn, $sql);
    $showAlert = true;
    echo "<BR>";
    if($showAlert){
     echo   '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your thread has been added.Please wait for community to response.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
}
?>
    <!---     category container start here..      !--->
    <div class="jumbotron">
        <h1 class="display-4">Welcome to <?php echo $catname;  ?></h1>
        <p class="lead"><?php echo $catdesc;  ?></p>
        <hr class="my-4">
        <p>This peer to peer community for sharing knowledge by using forums.</p>
        <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
    </div>
    <div class="container">
        <div class="container">
            <h1 class="py-2">Ask a question</h1>
        </div>
        <form action="<?php  echo $_SERVER['REQUEST_URI']; ?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Problem title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Keep your title as concise as possible</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControltextarea1">Elaborate your concern</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>

    </div>
    <div class="container">
        <h1 class="py-2">Browse questions</h1>

        <?php
$id = $_GET['catid'];
$sql =" SELECT * FROM `threads` WHERE thread_cat_id=$id";
$result = mysqli_query($conn, $sql);

$noresult = true;
while($row = mysqli_fetch_assoc($result)){
    $noresult = false;
    $id = $row['thread_id'];
    $title = $row['thread_title'];
    $desc = $row['thread_desc'];
$thread_time = $row['timestamp'];

 echo '<div class="media my-3">
<img src="https://source.unsplash.com/500x400/?coding,userprofile" width="54px" class="mr-3">
<div class="media-body">
<p class="font-weight my-0"><B>Anonymous User </B>  at ' . $thread_time . '</p>
<h5 class="mt-0"> <a class="text-dark" href="thread.php?threadid=' .$id. '">' . $title . '</a></h5>
' .$desc. '
</div>
</div> ';
}
//echo var_dump($noresult);

if($noresult){
    echo '<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">No Threads Found!</h1>
      <p class="lead">Be the first person to ask question.</p>
    </div>
  </div>';
}
    ?>
    </div>

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