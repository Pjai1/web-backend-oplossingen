<?php

    $isEven;
    $strlen;
    $strUppercase;

    function berekenSom($getal1,$getal2)
    {
        return $getal2+$getal1;
    }


    function vermenigvuldig($getal1,$getal2)
    {
        return $getal1*$getal2;
    }

    function isEven($getal)
    {
        if($getal%2==0)
        {
            $isEven = true;
        }
        else
        {
            $isEven = false;
        }

        return $isEven;
    }

    function strlenUppercase($string)
    {
        $strArray = array();

        $strlen = strlen($string);
        $strlenUppercase = strtoupper($string);

        array_push($strArray, $strlenUppercase, $strlen);

        return $strArray;
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht functies: deel 1</h1>

            <ul>

                <li>Maak een functie <code>berekenSom</code> die 2 parameters heeft, <code>$getal1</code> en <code>$getal2</code>

                    <ul>
                        <li>Zorg ervoor dat in deze functie de som van de twee getallen wordt berekend.</li>
                        <li>Deze functie returnt het resultaat</li>
                        <li>
                            <p class="remark">Zorg ervoor dat de functie enkel een waarde returnt. Het afdrukken moet buiten de functie gebeuren. 
                                Het combineren van meerdere functionaliteiten in één functie vermindert de herbruikbaarheid van de functie. Probeer vanaf nu te vermijden dat een functie meerdere dingen doet (zoals berekenen én afdrukken), ook al lijkt dit in het begin meer werk.</p>
                                <?php 
                                    var_dump(berekenSom(1,1));
                                ?>
                        </li>
                    </ul>
                </li>


                <li>Maak een functie <code>vermenigvuldig</code> die 2 parameters heeft, <code>$getal1</code> en <code>$getal2</code>

                    <ul>
                        <li>Zorg ervoor dat in deze functie het product wordt berekend.</li>
                        <li>Deze functie returnt het resultaat</li>
                        <?php
                            var_dump(vermenigvuldig(2,2));
                        ?>
                    </ul>
                </li>

                <li>Maak een functie <code>isEven</code> met 1 parameter <code>$getal</code>

                    <ul>
                        <li>Zorg ervoor dat in deze functie een boolean returnt die afhankelijk van het gegeven getal <code>true</code> of <code>false</code> is.</li>
                    </ul>
                    <?php
                        var_dump(isEven(3));
                    ?>
                </li>

                <li>Voer al deze functies uit en zorg ervoor dat de resultaten op het scherm verschijnen</li>

                <li class="extension">Maak een functie aan die de lengte én de uppercase-versie van een string returnt. Druk daarna de lengte en de uppercase-versie van de string af buiten de functie. <span class="tip">return een array.</span></li>
                <?php
                    var_dump(strlenUppercase("banaan"));
                ?>
            </ul>

            <h1 class="extra">Opdracht functies: deel 2</h1>

            <ul>
                <li>Maak een functie <code>drukArrayAf</code> die 1 parameter heeft, <code>$array</code></li>

                <li>Deze <code>$array</code> bevat enkele waarden die je zelf mag kiezen</li>

                <li>Zorg ervoor dat je uiteindelijk tot dit resultaat komt:

                    <ul>
                        <li>
                            <div class="facade-minimal" data-url="http://www.app.local/index.php">
                                
                                <h1>Opdracht functies</h1>
                                
                                <p>helden[ 0 ] heeft waarde 'Elon Musk'</p>  
                            
                            </div>
                            <?php
                                    $randomArray = array("helden" => array("Elon Musk"));

                                    function drukArrayAf($array)
                                    {
                                        echo "<h1>Opdracht functies</h1>";
                                        print_r($array);
                                    }

                                    drukArrayAf($randomArray);
                            ?>

                        </li>

                        <li>De naam van de array afdrukken is niet zo belangerijk (mag hardcoded of via een andere inventieve manier)</li>
                        
                        <li class="extension">Zorg ervoor dat je ook meerdimensionale arrays kan afdrukken op dezelfde manier</li>
                    </ul>
                </li>

                <li>Maak een functie <code>validateHtmlTag</code> die 1 parameter heeft, <code>$html</code>

                    <ul>
                        <li>Zorg ervoor dat deze functie kan valideren of er een correcte &lt;html&gt;&lt;/html&gt; tag aanwezig is in de gegeven string <code>$html</code></li>
                    </ul>
                </li>
                <?php
        

                    function validateHtmlTag($html)
                    {
                        if(strpos($html,"<html></html>") !== false)
                        {
                            echo "html-tags aanwezig";
                        }
                        else
                        {
                            echo "geen html-tags";
                        }
                    }

                    validateHtmlTag("<html></html>");
                ?>

                <li>Voer al deze functies uit en zorg ervoor dat de resultaten op het scherm verschijnen</li>

            </ul>

        </section>

    </body>
</html>
