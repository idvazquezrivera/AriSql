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
      <a href="/git/AriSql/">AriSql</a>s
      <p>List tables in msyql db</p>
      <code>
        $mysql = new AriSql("mysql:host=localhost;dbname=hospital", "root", "root");
        $res = $mysql->query('show tables;', PDO::FETCH_ASSOC);
        debug($res->fetchAll());
      <code>
      <?php
      $mysql = new AriSql("mysql:host=localhost;dbname=hospital", "root", "root");
      $res = $mysql->query('show tables;', PDO::FETCH_ASSOC);
      debug($res->fetchAll());
      ?>
    </div>
  </body>
</html>
