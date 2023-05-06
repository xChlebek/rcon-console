<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minecraft Rcon Console</title>
    <link rel="stylesheet" href="style.css">
  </head> 
  <body>
    <div class="container">
      <form action="konsola.php" class="commandForm" method="post">
        <!-- Nick: <input type="text" name="nick"><br>
        Adres e-mail: <input type="text" name="email"><br> -->
        <br>
        Server Address: <input type="text" name="server" class="commandInput" placeholder="localhost"><br>
        <br>
        Port: <input type="text" name="port" class="commandInput" placeholder="25575"><br>
        <br>
        Rcon password: <input type="password" class="commandInput" name="password"><br>
        <br>
        Command: <input type="text" class="commandInput" name="command"><br>
        <br>
        <input type="submit" name="przeslij" class="commandButton" value="Execute command">
      </form>
    </div>
    <?php
    ?>
  </body>
</html>