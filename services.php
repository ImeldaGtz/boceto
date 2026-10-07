<?php
    $currentPage = 'services';
    include('components/header.php');
    
    function galeria(string $categoria): void {
        
        $base = 'res/services_imgs/';
        $imagenes = glob($base . $categoria . '/*.{jpg,JPG,jpeg,JPEG,png,PNG,gif,webp}', GLOB_BRACE);
       
       ?>
        <div class="galeria">

            <?php foreach ($imagenes as $p): ?>
                <div class="galeria-item">
                    <div class="card border-0">
                        <img src="<?= htmlspecialchars($p) ?>" class="img-fluid rounded" loading="lazy">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    }
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
            <h5 class="title fw-bold m-3 text-center">Servicios</h5>
            <p class="subtitle text-center">Peluches | Tejidos | Ilustraciones | Stickers | Posters</p>
        </div>
    
        <?php include('components/gallery.php') ?>

    </div>
    
    <h1 id="peluches" class="subtitle fw-bold m-3 text-center">Peluches</h1>
    <?php galeria('plushies') ?>

    <h1 id="tejidos" class="subtitle fw-bold m-3 text-center">Tejidos</h1>
    <?php galeria('threads') ?>
    
    <h1 id="ilustraciones" class="subtitle fw-bold m-3 text-center">Ilustraciones</h1>
    <?php galeria('illustrations') ?>

    <h1 id="stickers" class="subtitle fw-bold m-3 text-center">Stickers</h1>
    <?php galeria('stickers') ?>

    <h1 id="posters" class="subtitle fw-bold m-3 text-center">Posters</h1>
    <?php galeria('posters') ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>