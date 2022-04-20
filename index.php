
<?php
 $paragraph="La parte più nobile dell'uomo è arata nel terreno per farne concime Cit. 'Henry David Thoreau - Walden' ";
 $profanity= $_GET["profanity"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words Carmine Passante classe 55</title>
</head>
<body> 
    <pre>
        <?php
            echo $paragraph;
        ?> 
    </pre> 
    <pre>
        Lunghezza del paragrafo:
                    <?php 
                        echo strlen($paragraph); 
                    ?> caratteri
    </pre> 
    <pre>
        <?php 
           echo str_replace($profanity, "***", $paragraph );
        ?> 
    </pre> 

</body>
</html>