<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css">
 
    <title>Assignment 3</title>
  </head>
  <body class="container">
      
      <?php include 'db.php'; ?>
      
      <div class="row">
          <div class="col">
             
              
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Menu:-</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
              
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
             <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
              </li>                  
                  <?php foreach($record as $pages): ?>
                  
                 <li class="nav-item active">
                      
                      <a href="index.php?page='<?php echo $pages['pg']; ?>'" class="nav-link"><?php echo $pages['pg']; ?></a>
                      
                  </li> 
                  
                  
                  <?php endforeach; ?>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-divider"></div>
                   <li><a href="create.php" class="nav-link">Create new record</a></li>
              </ul>
          </div>
      </div>
      
      <div class="row">
          <div class="col">
              <?php 
                    
                    if(isset($_GET['page']))
                    {
                        $pg = trim($_GET['page'], "'");
                        
                        // run sql query based on our $pg value
                        $record = $connection->query("select * from pages where pg='$pg'") or die($connection->error);
                        
                        $single = $record->fetch_assoc();
                        
                        // create variables to hold all our field names from table
                        $h1 = $single['h1'];
                        $h2 = $single['h2'];
                        
                        $p1 = $single['p1'];
                        $p2 = $single['p2'];
                        $p3 = $single['p3'];
                        
                        $id = $single['id'];
                        $update = "update.php?update=" . $id;
                        $delete = "db.php?delete=" . $id;
                        
                        // Display information on screen
                        echo "
                        
                        <h1>{$h1}</h1>
                        <h2>{$h2}</h2>
                        <p>{$p1}</p>
                        <p>{$p2}</p>
                        <p>{$p3}</p>

                        <p><a href='{$update}' class='btn btn-warning'> Update</a>
                        <a href='{$delete}' class='btn btn-danger'>Delete</a>
                        <p>
                        
                        
                        
                        ";
                        
                    }
                    else
                    {
                        // default view of index.php
                        
                        echo "
                        
                    <h1>SCP Foundation</h1>
                    <p>The SCP Foundation is a fictional organization documented by the web-based collaborative-fiction project of the same name. Within the website's fictional setting, the SCP Foundation is responsible for locating and containing individuals, entities, locations, and objects that violate natural law (referred to as SCPs). The real-world website is community-based and includes elements of many genres such as horror, science fiction, and urban fantasy.

                         On the SCP Foundation wiki, the majority of works consist of 'special containment procedures': structured internal documentation that describes an SCP object and the means of keeping it contained. The website also contains thousands of 'Foundation Tales', short stories that take place within the SCP Foundation setting. The series has been praised for its ability to convey horror through its scientific and academic writing style, as well as for its high standards of quality.</p>
                        <p>For more informattion click on above links.</p>
                        
                        ";
                    }
              
              ?>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>