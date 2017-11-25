<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="media/style.css">
  </head>
  <body>
    <div class="container">
      <h2>Hospital </h2>
      <li><a href="/git/AriSql/">AriSql</a></li>
      <p>List tables in mssql db</p>
      <code>
        $mssql = new AriSql('dblib:host=localhost;dbname=hospital','SA','1NSP1R0n');;
        $res = $mssql->query('SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES', PDO::FETCH_ASSOC);
        debug($res->fetchAll());
      <code>
      <?php
      $mssql = new AriSql('dblib:host=localhost;dbname=hospital','SA','1NSP1R0n');;
      $res = $mssql->query('SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES', PDO::FETCH_ASSOC);
      debug($res->fetchAll());
      ?>
    </div>
  </body>
</html>
