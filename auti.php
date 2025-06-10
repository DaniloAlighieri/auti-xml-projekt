<?php
$xml = simplexml_load_file('podaci/auti.xml');
?>

<!doctype html>
<html lang="hr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Automobili</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Automobili</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index_auti.php">Popis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="auti.php">Detalji</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1 class="mt-5">Podaci o automobilima</h1>
    <table class="table table-striped mt-3">
      <thead>
        <tr>
          <th>Model</th>
          <th>Posebnost</th>
          <th>Vrsta goriva</th>
          <th>Broj vrata</th>
          <th>Električni</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($xml->auto as $auto): ?>
          <tr>
            <td><?php echo $auto->model; ?></td>
            <td><?php echo $auto->posebnost; ?></td>
            <td><?php echo $auto->gorivo; ?></td>
            <td><?php echo $auto->broj_vrata; ?></td>
            <td><?php echo $auto->elektricni; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <nav aria-label="Paginacija">
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Prethodna</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Sljedeća</a></li>
      </ul>
    </nav>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
