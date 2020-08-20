<?php
session_start();

    if(isset($_SESSION['username'])) {
        // echo 'Hello, '. $_SESSION['username'];
    ?>

        <!doctype html>
        <html>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Private Messages</title> 
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <style>
        <?php require_once("sub_file/style.php"); ?>
        </style>

        <body>

            <?php require_once("sub_file/new-message.php"); ?>

            <div id="container">

                <!--HEAD AREA -->
                <div id="menu">
                    <?php echo $_SESSION['username']; ?>
                    <a style='float:right; color:white;' href='logout.php'>Logout</a>
                </div>

                <!-- LEFT & RIGHT COLUMNS -->
                <div id="left-col">
                    <?php require_once("sub_file/left-col.php"); ?>
                </div>
                <div id="right-col">
                    <?php require_once("sub_file/right-col.php"); ?>
                </div>
            </div>

<?php
    } else {
        header("location: login.php");
    }

?>


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>