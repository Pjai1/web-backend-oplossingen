<?php

session_start();

    $messageContainer = "";
    $confirmationMessage = false;

 
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');

            if(isset($_POST['submit']))
            {
                $deleteBrouwer = $_POST['submit'];
                $confirmationMessage = true;
                $deleteMessage = "Wilt u deze record verwijderen?";
            }

            if(isset($_POST['submitDelete']))
            {
                    $brouwerDeleteQuery = 'DELETE FROM `brouwers` WHERE brouwernr = :brouwernr';
                    $brouwerDeleteStatement = $db->prepare($brouwerDeleteQuery);

                    $brouwerDeleteStatement->bindParam(':brouwernr',$_POST['submitDelete']);

                    $brouwerDeleteStatement->execute();
                    $confirmationMessage = false;
                    $deleteMessage = "Brouwer verwijderd";
            }


            $brouwerQueryString = 'SELECT * FROM `brouwers`';
            $brouwerStatement = $db->prepare($brouwerQueryString);

            $brouwerStatement->execute();

            $fetchBrouwers = array();

            while($row = $brouwerStatement->fetch(PDO::FETCH_ASSOC))
            {
                $fetchBrouwers[] = $row;
            }

            $brouwerStatement->execute();
        }
        catch(PDOException $e)
        {
            $messageContainer = 'Er ging iets mis: '.$e->getMessage();
        }
   

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht CRUD delete</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">

        <style>
            .voorbeeld-query-01 
            {

            }
            .voorbeeld-query-01 table
            {
                font-size:12px;
                overflow:auto;
            }

            .voorbeeld-query-01 table th,
            .voorbeeld-query-01 table td
            {
                padding:4px;
            }

            .voorbeeld-query-01 table th
            {
                background: #DFDFDF;
                text-align:center;
            }

            .voorbeeld-query-01 table tr
            {
                transition: all 0.2s ease-out;
            }

            .voorbeeld-query-01 table tr:hover
            {
                background-color:lightgreen;
            }

            .voorbeeld-query-01 .odd
            {
                background: #F1F1F1;
            }

            .deletion
            {
                color: #b94a48;
                background-color: #f2dede;
            }

            .input-icon-button
            {
                border: none;
                background-color:transparent;
                cursor:pointer;
                text-indent:-1000px;
            }

            .delete
            {
                width:16px;
                height:16px;
                background: url("http://web-backend.local/img/icon-delete.png") no-repeat;
            }

            .modal {
                margin: 5px 0px;
                padding: 5px;
                border-radius: 5px;
            }

            .error {
                color: #b94a48;
                background-color: #f2dede;
                border: 1px solid #eed3d7;
            }
        </style>
        
        <section class="body">
            
            <h1>Opdracht CRUD delete: deel 1&2</h1>
            <?php if($confirmationMessage): ?>
                <div class"modal error"><?= $deleteMessage ?>
                    <form action="opdracht-CRUD-delete.php" method="post">
                        <button type="submit" name="submitDelete" value="<?= $deleteBrouwer ?>">Ja</button>
                        <button type="submit">Nee</button>
                    </form>
                </div>
            <?php endif ?>    

                <form action="opdracht-CRUD-delete.php" method="post">
                                    <div class="facade-minimal voorbeeld-query-01" data-url="http://www.app.local/index.php">
                        
                                        <h1>Overzicht van de brouwers</h1>

                                        <table>
                
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>brouwernr</th>
                                                    <th>brnaam</th>
                                                    <th>adres</th>
                                                    <th>postcode</th>
                                                    <th>gemeente</th>
                                                    <th>omzet</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($fetchBrouwers as $id => $brouwers): ?>
                                                    <tr class="<?php echo (($id+1)%2==0) ? '' : 'odd' ; ?>">
                                                        <td>
                                                            <?= $id ?>
                                                        </td>
                                                        <?php foreach($brouwers as $value): ?>
                                                            <td>
                                                                <?= $value ?>
                                                            </td>
                                                        <?php endforeach ?>
                                                        <td>
                                                            <button type="submit" name="submit" class="delete" value="<?= $brouwers['brouwernr'] ?>"></button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>    
                                            </tbody>
                                        </table>

                                    </div>
        </section>
     
    </body>
</html>
