<?php  
    require 'database.php';

    $leeftijd = 15;
?>
<html>
<head>
</head>
<body>
    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>

    <div id="leeftijdChecker">
        <?php
            if($leeftijd < 18 ){
                echo "<h6>Je bent te jong om deze pagina te bekijken.</h6>";
            }
        ?>
    </div>

    <div id="isMeerderJarig">
        <?php
            if($leeftijd >= 18 ){
                echo "<h6>Je bent oud genoeg om deze pagina te bekijken.</h6>";
            }
        ?>
    </div>
</body>
</html>