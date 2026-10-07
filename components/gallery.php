<?php

    $base = 'res/services_imgs/';
    $categorias = glob($base . '*', GLOB_ONLYDIR);
    $galeria = [];

    if($tipo_galeria == 'portadas') {
        foreach ($categorias as $dir) {
            $imgs = glob($dir . '/*.{jpg,JPG,jpeg,JPEG,png,PNG,gif,webp}', GLOB_BRACE);
    
            $galeria[] = [
                'ruta' => $imgs[array_rand($imgs)]
            ];
        }
    } else { // Para mostrar toooodas las imágenes
        foreach ($categorias as $dir) {
            $categoria = basename($dir);
            $imgs = glob($dir . '/*.{jpg,JPG,jpeg,JPEG,png,PNG,gif,webp}', GLOB_BRACE);
    
            foreach ($imgs as $ruta) {
                $galeria[] = [
                    'ruta'      => $ruta,
                    'categoria' => $categoria,
                ];
            }
        } 
    }

?>

<div class="galeria">
        <!-- <div class="galeria-item m-3">
            <h5 class="title fw-bold m-3 text-center">Creaciones de Madam</h5>
            <p class="subtitle text-center">De tu mente a tus manos</p>
        </div> -->

        <?php foreach ($galeria as $p): ?>
                    <div class="galeria-item">
                        <div class="card border-0">
                                <img src="<?= htmlspecialchars($p['ruta']) ?>"
                                    class="img-fluid rounded"
                                    loading="lazy">
                        </div>
                    </div>
                <?php endforeach; ?>
</div>