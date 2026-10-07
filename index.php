<?php
    $currentPage = 'index';
    include('components/header.php');

    $tipo_galeria = 'portadas'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boceto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="res/style.css">
</head>
<body>

    <div class="container-fluid my-4 py-4">
        <div class="m-3">
            <h5 class="title fw-bold m-3 text-center">Creaciones de Madam</h5>
            <p class="subtitle text-center">De tu mente a tus manos</p>
        </div>
    
        <?php include('components/gallery.php') ?>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>