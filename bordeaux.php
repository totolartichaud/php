<html>
<?php require("head.php");
date_default_timezone_set ("Europe/Paris");
?>

  <body>
        <?php for($i = 0; $i < 5; $i++){ ?>
            <img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_<?php echo($i);?>.png" title=""/>
        <?php   } ?>
  </body>
</html>
