<?php
class AriSql extends PDO
{
  function __construct($host, $user = null, $password = null)
  {
    parent::__construct($host, $user, $password);
  }
}
