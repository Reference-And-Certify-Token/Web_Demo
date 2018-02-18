<html>
<head>


</head>
<body>
<?php
$content = '<form action="index.php" method="POST">
    <input type="text" name="q" placeholder="Enter Address here"/>
    <select name="column">
        <option value "">Select Filter</option>
        <option value="Ether Address">Ether Address</option>
        <option value="Bitcoin Address">Bitcoin Address</option>
    </selct>
    <input type="submit" name="submit" value = "Find">
</form>';
include 'template.php'
 ?>
 <?php
 //include 'connect.php';
     if (isset($_POST['submit'])){
         $connection = new mysqli("localhost",  "root", "mother22", "important_score");
         $q = $connection->real_escape_string($_POST['q']);
         $column = $connection -> real_escape_string($_POST['column']);
         if ($column == 'Ether Address' ){
             $sql = $connection->query("SELECT *FROM impsc WHERE $q LIKE %id%");
             if ($sql->num_rows >0){
                 while($data = $sql->fetch_array()){
                     echo $data['score'];
                 }
             }else{

             }
         }
     }else{
        
     }

  ?>

</body>
</html>
