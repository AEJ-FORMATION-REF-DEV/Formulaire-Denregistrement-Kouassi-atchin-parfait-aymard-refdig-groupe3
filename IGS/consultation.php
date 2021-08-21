<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>

    table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
    }
    th, td {
    text-align: left;
    padding: 8px;
    border:2px solid #fff;
    min-width: 150px;
    }
    th{
    background-color: #4e73df;
    color: #fff;
    font-size: 20px;
    }
    tr:nth-child(even){
      background-color: #f2f2f2;
    }
    button {
    height: 35px;
    border-radius: 20px;
    background: #0695b9;
    width: 5rem;
    }
    button:hover{
    background-color:#06b7fd;
    }
    a{
    text-decoration: none;
    color: #fff;
    }
    </style>

    <button><a href="index.php">Formulaire</a></button>

    <?php
        
        $server_name = "localhost";
        $db_username = "kodak";
        $db_password = "11102255Xx";
        $db_name = "igs";
            
        $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

        $query = "SELECT * FROM etudiant";
        $query_run = mysqli_query($connection, $query);
    ?>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nom</th>
                <th> Prénoms </th>
                <th>Numéro AEJ</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Fonction</th>
                <th>Date d'enregistrement</th>
            </tr>
        </thead>

        <tbody>
            <?php
                if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                        {
            ?>
                        <tr>
                            <td><?php  echo $row['nom']; ?></td>
                            <td><?php  echo $row['prenoms']; ?></td>
                            <td><?php  echo $row['num_aej']; ?></td>
                            <td><?php  echo $row['tel']; ?></td>
                            <td><?php  echo $row['email']; ?></td>
                            <td><?php  echo $row['fonction']; ?></td>
                            <td><?php  echo $row['dat_enregis']; ?></td>
                          
                        </tr>
            <?php
                        } 
                }
                else {
                    echo "Aucun enregistrement trouvé";
                    }
                        ?>
        </tbody>
    </table>
                
</body>
</html>