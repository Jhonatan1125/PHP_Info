<?php
//setear valores iniciales
$valor = '';
$und1 = '';
$und2 = '';
//convertir a medida estandar
function Convertir_a_metros($valor, $und1)
{
    switch ($und1) {
        case 'Milimetro':
            return $valor / 1000;
            break;
        case 'Centimetro':
            return $valor / 100;
            break;
        case 'Decimetro':
            return $valor / 10;
            break;
        case 'Metro':
            return $valor * 1;
            break;
        case 'Decametro':
            return $valor * 10;
            break;
        case 'Hectometro':
            return $valor * 100;
            break;
        case 'Kilometro':
            return $valor * 1000;
            break;

        default:
            return 'Unidad de medida no soportada';
            break;
    }
}

function Convertir_desde_metros($valor, $und2)
{
    switch ($und2) {
        case 'Milimetro':
            return $valor * 1000;
            break;
        case 'Centimetro':
            return $valor * 100;
            break;
        case 'Decimetro':
            return $valor * 10;
            break;
        case 'Metro':
            return $valor * 1;
            break;
        case 'Decametro':
            return $valor / 10;
            break;
        case 'Hectometro':
            return $valor / 100;
            break;
        case 'Kilometro':
            return $valor / 1000;
            break;

        default:
            return 'Unidad de medida no soportada';
            break;
    }
}

if (isset($_POST['convertir'])) {
    //obtener los valores
    $valor = $_POST['valor'];
    $und1 = $_POST['und1'];
    $und2 = $_POST['und2'];

    $calculound1 = Convertir_a_metros($valor, $und1);
    $calculound2 = Convertir_desde_metros($calculound1, $und2);

    $resultado = number_format($calculound2, 6);
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once '../head.php'; ?>
    <title>Conversor de Longitud</title>
</head>

<body>


    <div class="container">
        <?php include_once '../nav.php' ?>
        <h1 class="text-center">Conversor de Longitud</h1>
        <form method="POST">
            <div class="row centrado mt-4">
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="number" name="valor" class="form-control" placeholder="1000,2000,3000" value="<?php if (isset($_POST['valor'])) {
                                                                                                                        echo $_POST['valor'];
                                                                                                                    } ?>">
                        <select class="custom-select" name="und1">
                            <option value="">Unidad</option>
                            <option value="Milimetro" <?php if (isset($_POST['und1']) && $_POST['und1'] == 'Milimetro') {
                                                            echo 'Selected';
                                                        } ?>>Milímetro</option>
                            <option value="Centimetro" <?php if (isset($_POST['und1']) && $_POST['und1'] == 'Centimetro') {
                                                            echo 'Selected';
                                                        } ?>>Centímetro</option>
                            <option value="Decimetro" <?php if (isset($_POST['und1']) && $_POST['und1'] == 'Decimetro') {
                                                            echo 'Selected';
                                                        } ?>>Decímetro</option>
                            <option value="Metro" <?php if (isset($_POST['und1']) && $_POST['und1'] == 'Metro') {
                                                        echo 'Selected';
                                                    } ?>>Metro</option>
                            <option value="Decametro" <?php if (isset($_POST['und1']) && $_POST['und1'] == 'Decametro') {
                                                            echo 'Selected';
                                                        } ?>>Decámetro</option>
                            <option value="Hectometro" <?php if (isset($_POST['und1']) && $_POST['und1'] == 'Hectometro') {
                                                            echo 'Selected';
                                                        } ?>>Hectómetro</option>
                            <option value="Kilometro" <?php if (isset($_POST['und1']) && $_POST['und1'] == 'Kilometro') {
                                                            echo 'Selected';
                                                        } ?>>Kilómetro</option>
                        </select>
                    </div>

                </div>

                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">A</span>
                        </div>
                        <select class="form-select" name="und2">
                            <option selected>--Selecciona una unidad--</option>
                            <option value="Milimetro" <?php if (isset($_POST['und1']) && $_POST['und2'] == 'Milimetro') {
                                                            echo 'Selected';
                                                        } ?>>Milímetro</option>
                            <option value="Centimetro" <?php if (isset($_POST['und1']) && $_POST['und2'] == 'Centimetro') {
                                                            echo 'Selected';
                                                        } ?>>Centímetro</option>
                            <option value="Decimetro" <?php if (isset($_POST['und1']) && $_POST['und2'] == 'Decimetro') {
                                                            echo 'Selected';
                                                        } ?>>Decímetro</option>
                            <option value="Metro" <?php if (isset($_POST['und1']) && $_POST['und2'] == 'Metro') {
                                                        echo 'Selected';
                                                    } ?>>Metro</option>
                            <option value="Decametro" <?php if (isset($_POST['und1']) && $_POST['und2'] == 'Decametro') {
                                                            echo 'Selected';
                                                        } ?>>Decámetro</option>
                            <option value="Hectometro" <?php if (isset($_POST['und1']) && $_POST['und2'] == 'Hectometro') {
                                                            echo 'Selected';
                                                        } ?>>Hectómetro</option>
                            <option value="Kilometro" <?php if (isset($_POST['und1']) && $_POST['und2'] == 'Kilometro') {
                                                            echo 'Selected';
                                                        } ?>>Kilómetro</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="row centrado mt-4">
                <div class="col-sm-8">
                    <button type="submit" name="convertir" class="btn btn-primary w-100 py-2">CONVERTIR</button>
                </div>

                <div class="col-sm-4">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="resultado" placeholder="RESULTADO" value="<?php if (isset($resultado))  echo $resultado; ?>">
                    </div>
                </div>
            </div>

        </form>
    </div>

    <?php 
    include_once dirname( __DIR__ )."/Footer.php";
    ?>
</body>

</html>