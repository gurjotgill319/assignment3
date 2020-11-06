<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Update record</title>
  </head>
  <body class="container">
    <h1>Update record</h1>
    
    <p><a href="index.php" class="btn btn-primary"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg> Home</a></p>
    
    
    <?php
    
        include 'db.php';
        
        $id = $_GET['update'];
        
        $record = $connection->query("select * from pages where id='$id'") or die($connection->error());
        
        $row = $record->fetch_assoc();
    
    ?>
    
    <form class="form-group" action="db.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Update page name:</label>
        <br>
        <input type="text" name="pg" placeholder="Write page name here" class="form-control" value="<?php echo $row['pg']; ?>">
        <br>
        <label>Update Main Heading:</label>
        <br>
        <input type="text" name="h1" placeholder="Main heading here" class="form-control" value="<?php echo $row['h1']; ?>">
        <br>
        <label>Update Secondary Heading:</label>
        <br>
        <input type="text" name="h2" placeholder="Secondary heading here" class="form-control" value="<?php echo $row['h2']; ?>">
        <br>
        <label>Paragraph 1:</label>
        <br>
        <input type="text" name="p1" placeholder="Write p1 here" class="form-control" value="<?php echo $row['p1']; ?>">
        <br>
        <label>Paragraph 2:</label>
        <br>
        <input type="text" name="p2" placeholder="Write p2 here" class="form-control" value="<?php echo $row['p2']; ?>">
        <br>
        <label>Paragraph 3:</label>
        <br>
        <input type="text" name="p3" placeholder="Write p3 here" class="form-control" value="<?php echo $row['p3']; ?>">
        <br>
        <input type="submit" name="update" class="btn btn-primary" value="Update">
        
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>