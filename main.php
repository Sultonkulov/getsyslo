<?php
   require_once('include/db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="text">
    <meta name="Keywords" content="text">
    <title>phpblog</title>
</head>
<body>
    <table border='1' width='1000' align="center">
        <?php include_once 'include/img.php';?>
        <tr><td>
            <table border="1" width='100%' align="center" height='500'>
                <tr>
                    <?php include_once 'include/lm.php';?>
                    <td>Content</td>
                    <?php include_once 'include/rm.php';?>
                </tr>

            </table>
        </td></tr>
        <tr>

           <?php include_once 'include/footer.php';?>

        </tr>

    </table>
    
</body>
</html>