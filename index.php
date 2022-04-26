<?php

include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog using PHP & MySQL</title>
</head>
<body>

<div class="container mt-5">


    <?php if(isset($_REQUEST['info'])){ ?>
        <?php if($_REQUEST['info'] == "added"){?>
            <div class="alert alert-success" role="alert">
                Post has been added successfully
            </div>
        <?php }?>
    <?php } ?>

   <div class="text-center">
        <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
    </div>

    <div class="row">
        <?php foreach($query as $q){ ?>
            <div class="col-12 col-lg-4 d-flex justify-content-center">
                <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $q['title'];?></h5>
                        <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                        <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Edit <span class="text-danger">&rarr;</span></a>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>

</div>


<a href="blog.php" class="btn btn-outline-dark my-3">Go Home</a>
</body>
</html>