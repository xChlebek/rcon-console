<html>
    <?php

        if (isset($_POST['server']) && isset($_POST['port']) && isset($_POST['password']) && isset($_POST['command'])) {
            if(empty($_POST['server'])){
                $host = "localhost";
            }
            else{
                $host = $_POST['server'];
            }

            if(empty($_POST['port'])){
                $port = 25575;
            }
            else{
                $port = $_POST['port'];
            }

            $password = $_POST['password'];
            $command = $_POST['command'];

            if(empty($_POST['command'])){
                $commandStatus = "Nie podano komendy.";
            }
            else{
                $commandStatus = "Wykonaliśmy komendę \"$command\" <br>";
            }

            $timeout = 3;

            require_once('Rcon.php');

            $rcon = new Rcon($host, $port, $password, $timeout, $command);

            if ($rcon->connect()) {
                $rcon->sendCommand("$command");
            }
            else {
                $commandStatus = "Błędne hasło!";
            }
        }
    ?>

    <body>
        <?php
          echo "$commandStatus";  
        ?>
        
        <form method="post" action="index.php">
            <br>
            <input type="submit" value="Wykonaj następną komendę">
        </form>
    </body>
</html>