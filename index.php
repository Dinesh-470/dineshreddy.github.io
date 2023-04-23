<?php
include("connect.php");
$sql = "select * from blog";
$result = $conn->query($sql);
$conn->close()
?>
<html>
    <head>

    </head>
 
    <body>
        <?php 
        while($rows = $result->fetch_assoc())
        {
            ?>
            <p><?php echo $rows['message'];?></p>
        <?php    
        }
        ?>
    </body>
</html>        