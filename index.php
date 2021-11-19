<?php $temas = array('Principal', 'Texto', 'Arrays', 'Foreach', 'Funciones', 'Excepciones', 'Archivos', 'POO'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'head.php'; ?>
    <title>Curso PHP</title>
</head>

<body>
    <div class="container">
        <?php include_once 'nav.php' ?>
        <div class="row centrado">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php foreach ($temas as $valor) :
                        if ($valor == 'Principal') :
                    ?>
                            <a class="nav-link active" id="v-<?php echo $valor ?>-tab" data-toggle="pill" href="#<?php echo $valor ?>" role="tab" aria-controls="<?php echo $valor ?>" aria-selected="true"><?php echo $valor ?></a>
                        <?php else : ?>
                            <a class="nav-link" id="v-<?php echo $valor ?>-tab" data-toggle="pill" href="#<?php echo $valor ?>" role="tab" aria-controls="<?php echo $valor ?>" aria-selected="true"><?php echo $valor ?></a>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <?php foreach ($temas as $valor) :
                        if ($valor == 'Principal') : ?>
                            <div class="tab-pane fade show active" id="<?php echo $valor ?>" role="tabpanel" aria-labelledby="v-<?php echo $valor ?>-tab">
                                <?php include 'Introduccion/' . $valor . '.php'; ?>
                            </div>
                        <?php elseif ($valor == 'POO') : ?>
                            <div class="tab-pane fade" id="<?php echo $valor ?>" role="tabpanel" aria-labelledby="v-<?php echo $valor ?>-tab">
                                <?php include 'Introduccion/' . $valor . '/index.php'; ?>
                            </div>
                        <?php else : ?>
                            <div class="tab-pane fade" id="<?php echo $valor ?>" role="tabpanel" aria-labelledby="v-<?php echo $valor ?>-tab">
                                <?php include 'Introduccion/' . $valor . '.php'; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>

    <?php include_once 'Footer.php'; ?>
</body>

</html>