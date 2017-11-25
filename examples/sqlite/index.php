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
      <p>List tables in sqlite db</p>
      <code>
        $sqlite = new AriSql("sqlite:sqlite/hospital.db");
        $res = $sqlite->query('SELECT name FROM sqlite_master where type="table"', PDO::FETCH_ASSOC);
        debug($res->fetchAll());
      <code>
      <?php
      $sqlite = new AriSql("sqlite:sqlite/hospital.db");
      $res = $sqlite->query('SELECT name FROM sqlite_master where type="table"', PDO::FETCH_ASSOC);
      debug($res->fetchAll());
      ?>
    </div>
  </body>
</html>
