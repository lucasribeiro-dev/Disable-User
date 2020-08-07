<?php
require 'config.php'


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
         <meta name="viewport" content="width=device-width, initial-scale=1"/>

         <title>Disable User</title>
         
         <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
         <link rel="stylesheet" href="assets/css/style.css">

         <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
         <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
    
    <div class="table-responsive">
        <table class="table table-dark table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php

            $sql = "SELECT * FROM users WHERE status = 1";
            $sql = $pdo->query($sql);
            //Getting all datas and print in screen with table

            
            if($sql->rowCount()>0){
                foreach($sql->fetchAll() as $user){
                    echo '<tr>';
                    echo '<td>'.$user['id'].'</td>';
                    echo '<td>'.$user['name'].'</td>';
                    echo '<td>'.$user['email'].'</td>';
                    echo '<td><a class="btn btn-danger" href="disable.php?id='.$user['id'].'"> Excluir </a></td>';
                    echo '</tr>';

                }
            }
            
            ?>
            
        </table>
        
    </div>
    
        
    </body>
</html>
