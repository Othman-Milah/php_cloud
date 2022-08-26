<?php 
// Include configuration file 
include_once 'config.php'; 
 
$status = $statusMsg = ''; 
if(!empty($_SESSION['status_response'])){ 
    $status_response = $_SESSION['status_response']; 
    $status = $status_response['status']; 
    $statusMsg = $status_response['status_msg']; 
     
    unset($_SESSION['status_response']); 
} 
?>

<html>
    <head>
        <title>Native upload</title>
    </head>

    <body>
        <div>
            <?php if(!empty($statusMsg)){ ?>
                <h3><?php echo $status ?></h3>
                <h3><?php echo $statusMsg ?></h3>
            <?php } ?>

            <php } ?>
            <form method="POST" action="upload.php" enctype="multipart/form-data">
                <label>File</label>
                <input type="file" name="file" class="form-control"/>
                <input type="submit" name="submit" value="upload"/>

            </form>
        </div>
    </body>
</html>