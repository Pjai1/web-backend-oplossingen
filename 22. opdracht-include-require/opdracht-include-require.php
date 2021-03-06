<?php

    $artikels = array(      array('title' => 'Title article 1','text' => 'Text article 1',array('tags' => 'tag 1 article 1')),
                            array('title' => 'Title article 2','text' => 'Text article 2',array('tags' => 'tag 1 article 2','tag 2 article 2')),
                            array('title' => 'Title article 3','text' => 'Text article 3',array('tags' => 'tag 1 article 3','tag 2 article 3','tag 3 article 3')));
    //var_dump($artikels);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht include/require</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">


        
        <section class="body">
        <style>
            .opdracht-include-require
            {
                padding:0px;
                padding-top:57px;
                font-size:14px;
            }

            .opdracht-include-require header
            {
                background-color:#2B3536;
                color:#FFFFFF;
                padding:12px 6px;
            }

            .opdracht-include-require header .logo
            {
                float:left;
                font-size:18px;
            }

            .opdracht-include-require header .logo a
            {
                float:left;
                font-size:18px;
                text-decoration:none;
            }
            .opdracht-include-require header .logo span
            {
                font-weight:bold;
            }

            .opdracht-include-require header a
            {
               color:#FFFFFF; 
            }
            .opdracht-include-require nav
            {
                float:right;
            }

            .opdracht-include-require nav ul
            {
                list-style-type:none;
                padding:0px;
                margin-top:0;
            }
            
             .opdracht-include-require nav li
             {
                display:inline;
                padding:5px;
                padding-left:18px;
             }
            
            .opdracht-include-require .body
            {
                width:80%;
                margin:0 auto;
            }
            
            .opdracht-include-require .body article
            {
                width:26%;
                margin-right:5%;
                padding:0 2%;
                float:left;
                background-color:#EEEEEE;
            }

            .opdracht-include-require .body article:nth-child(3n+1)
            {
                margin-right:0;
            }

             .opdracht-include-require .body article h1:first-child
            {
                font-size:24px;
                margin:12px 0;
            }
            
            .opdracht-include-require footer
            {
                margin-top:32px;
                padding:6px;
                background-color:#5FC8D1;
                color:#FFFFFF;
                text-align:center;
            }
        </style> 

            <?php include 'view/header-partial.html' ?>

            <?php include 'view/body-partial.html' ?>

            <?php include 'view/footer-partial.html' ?>

    </body>
</html>
