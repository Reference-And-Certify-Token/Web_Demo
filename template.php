<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="styles/stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">


            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Team</a></li>
                    <li><a href="onchain.php">On-Chain-App</a></li>
                    <li><a href="offchain.php">Off-Chain-App</a></li>
                    <li><a href="future.php">Future Plan </a></li>
                </ul>
            </nav>

            <div id="content_area">
                <?php echo $content; ?>
            </div>
            


            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
