<?php 
    session_start();
    
    if(!isset($_SESSION['favorites'])){$_SESSION['favorites'] = [];}

    function is_favorite($id){
        return in_array($id, $_SESSION['favorites']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
.isfavorite{
    background-color: yellow !important;
}

.favorite{
    display: inline;
}

.isfavorite .favorite{
    display: none;
}

.unfavorite{
    display: none;
}

.isfavorite .unfavorite{
    display: inline;
}



</style>
<body>
<?php  echo print_r($_SESSION['favorites']); ?>
<div class="container">
    
    <div id="blog-post-01" class="jumbotron col-sm-12 <?php if(is_favorite(01)){ echo 'isfavorite';} ?>">
        <h1>Blog Post 1</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quisquam et beatae, corporis accusamus accusantium perferendis aliquid eos distinctio facilis, mollitia est porro. Veniam corrupti quia asperiores vel impedit. Dolor.</p>
        <button  class="favorite btn btn-info">Favorite</button>
        <button  class="unfavorite btn btn-danger">unfavorite</button>
    </div>
    <div id="blog-post-02" class="jumbotron col-sm-12 <?php if(is_favorite(02)){ echo 'isfavorite';} ?>">
        <h1>Blog Post 2</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quisquam et beatae, corporis accusamus accusantium perferendis aliquid eos distinctio facilis, mollitia est porro. Veniam corrupti quia asperiores vel impedit. Dolor.</p>
        <button  class="favorite btn btn-info">Favorite</button>
        <button  class="unfavorite btn btn-danger">unfavorite</button>
    </div>
    <div id="blog-post-03" class="jumbotron col-sm-12 <?php if(is_favorite(03)){ echo 'isfavorite';} ?>">
        <h1>Blog Post 3</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quisquam et beatae, corporis accusamus accusantium perferendis aliquid eos distinctio facilis, mollitia est porro. Veniam corrupti quia asperiores vel impedit. Dolor.</p>
        <button  class="favorite btn btn-info">Favorite</button>
        <button  class="unfavorite btn btn-danger">unfavorite</button>
    </div>
    <div id="blog-post-04" class="jumbotron col-sm-12 <?php if(is_favorite(04)){ echo 'isfavorite';} ?>">
        <h1>Blog Post 4</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quisquam et beatae, corporis accusamus accusantium perferendis aliquid eos distinctio facilis, mollitia est porro. Veniam corrupti quia asperiores vel impedit. Dolor.</p>
        <button  class="favorite btn btn-info">Favorite</button>
        <button  class="unfavorite btn btn-danger">unfavorite</button>
    </div>
</div>






<script src="main.js"></script>
</body>
</html>