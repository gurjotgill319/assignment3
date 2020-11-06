<?php

    $db = "a3004025_scp";
    $user = "a3004025_user";
    $pwd = "Toiohomai1234";
    
    $connection = new mysqli('localhost', $user, $pwd, $db);
    
    $record = $connection->query("select * from pages") or die($connection->error);
    
    if(isset($_POST['submit']))
    {
        $pg = $_POST['pg'];
        $h1 = $_POST['h1'];
        $h2 = $_POST['h2'];
        $p1 = htmlspecialchars($_POST['p1']);
        $p1 = $connection->real_escape_string($p1);
        $p2 = htmlspecialchars($_POST['p2']);
        $p2 = $connection->real_escape_string($p2);
        $p3 = htmlspecialchars($_POST['p3']);
        $p3 = $connection->real_escape_string($p3);
        
        $sql = "insert into pages(pg, h1, h2, p1, p2, p3)
        values('$pg', '$h1', '$h2', '$p1', '$p2', '$p3')";
        
        if($connection->query($sql) === TRUE)
        {
            echo "<h1>Record added</h1>";
            echo "<p><a href='index.php'>Home</a></p>";
        }
        else
        {
            echo "<h1>Error: Record not added</h1>";
            echo "<p>{$connection->error()}</p>";
            echo "<p><a href='index.php>Home</a></p>";
        }
    }
    
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $pg = $_POST['pg'];
        $h1 = $_POST['h1'];
        $h2 = $_POST['h2'];
        $p1 = htmlspecialchars($_POST['p1']);
        $p1 = $connection->real_escape_string($p1);
        $p2 = htmlspecialchars($_POST['p2']);
        $p2 = $connection->real_escape_string($p2);
        $p3 = htmlspecialchars($_POST['p3']);
        $p3 = $connection->real_escape_string($p3);
        
        $update = "update pages set pg='$pg', h1='$h1', h2='$h2', p1='$p1', p2='$p2', p3='$p3'
        where id='$id'";
        
        if($connection->query($update) === TRUE)
        {
            echo "<h1>Record Updated</h1>";
            echo "<p><a href='index.php' class='btn btn-success'>Home</a></p>";
        }
        else
        {
            echo "<h1>Error: Record not updated</h1>";
            echo "<p>{$connection->error()}</p>";
            echo "<p><a href='index.php' class='btn btn-danger'>Home</a></p>";
        }
        
    }
        if(isset($_GET['delete']))
        {
          $id =$_GET['delete'];
                    
          $del = "delete from pages where id=$id";
                        
          if($connection->query($del) === TRUE)
           {
              echo "<p>Record was deleted. <a href='index.php'class='btn btn-success'> Home </a></p>";
            }
            else
            {
                echo "
                    <p>There was an error deleting this record.</p>
                    <p{$connection->error()}></p>
                    <p><a href='index.php' class='btn btn-danger'> Home </a></p>
                ";
                
            }
        }

?>