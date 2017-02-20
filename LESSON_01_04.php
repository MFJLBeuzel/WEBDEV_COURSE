<html>
<head>
    <body>
        <?php
        //Bij een string tussen dubbele quotes worden variabelen automatisch
        //ge-expandeerd.
        //Stringconcatenatie met punt.
        $naam = 'Sjakie';

        echo 'Ik heet $naam.';
        echo "Ik heet $naam.";
        echo 'Ik heet '.$naam.'.';

        //Gebruik geen dubbele quotes als het niet nodig is
        //Gebruik misschien wel helemaal geen dubbele quotes?

         ?>
    </body>
</head>
</html>
