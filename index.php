<? include 'init.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>CF PHP Buildpack Demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
  <h1>CF PHP Buildpack Demo</h1>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Language</th>
        <th>URL</th>
      </tr>
    </thead>
    <tbody>
    <? while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) { ?>
      <tr>
      <? foreach ($line as $col_value) { ?>
        <td><? echo $col_value ?></td>
      <? } ?>
      </tr>
    <? } ?>
    </tbody>
  </table>
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
<? include 'teardown.php' ?>
