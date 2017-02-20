<form method="post" action="<?= $_SERVER['SCRIPT_NAME']?>">
    Voornaam: <input type="text" name="voornaam" value="<?= $_POST['voornaam']?>" /><br/>
    Achternaam: <input type="text" name="achternaam" value="<?= $_POST['achternaam'] ?>" /><br/>
    <input type="submit" value="Sla op"  />
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && (!$_POST['voornaam'] || !$_POST['achternaam'])) {
        echo 'U moet wel alles invullen a.u.b.';
    } else {
        //sla op in database
    }
 ?>
