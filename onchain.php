<html>
<head>


</head>
<body>


<?php
$content = '<video width="480" height="320" controls>
    <source src="mp4.php" type="video/mp4">
</video>';

$local_file = 'z.mp4';
$size = filesize($local_file);


header("Content-Type: video/mp4");
header("Content-Length: ".$size);

readfile($local_file);

include 'template2.php';


 ?>



</body>
</html>
