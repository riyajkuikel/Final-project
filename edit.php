<?php

include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<img>
    <title>Blog using PHP & MySQL</title>
</head>
<body>

<div class="container mt-5">
    <?php foreach($query as $q){ ?>
        <form method="POST">
            <input type="text" hidden value='<?php echo $q['id']?>' name="id">
            <input type="text" placeholder="Blog Title" class="form-control my-3 bg-dark text-white text-center" name="title" value="<?php echo $q['title']?>">
            <textarea name="content" class="form-control my-3 bg-dark text-white" cols="30" rows="10"><?php echo $q['content']?></textarea>
            <button class="btn btn-dark" name="update">Update</button>

        </form>
    <?php } ?>
</div>


</body>
</html>