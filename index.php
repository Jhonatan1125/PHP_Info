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
                    <a class="nav-link active" id="v-Principal-tab" data-toggle="pill" href="#Principal" role="tab" aria-controls="Principal" aria-selected="true">Principal</a>
                    <a class="nav-link" id="v-String-tab" data-toggle="pill" href="#String" role="tab" aria-controls="String" aria-selected="false">String</a>
                    <a class="nav-link" id="v-Arrays-tab" data-toggle="pill" href="#Arrays" role="tab" aria-controls="Arrays" aria-selected="false">Arrays</a>
                    <a class="nav-link" id="v-Foreach-tab" data-toggle="pill" href="#Foreach" role="tab" aria-controls="Foreach" aria-selected="false">Foreach</a>
                    <a class="nav-link" id="v-Funciones-tab" data-toggle="pill" href="#Funciones" role="tab" aria-controls="Funciones" aria-selected="false">Funciones</a>
                    <a class="nav-link" id="v-Excepciones-tab" data-toggle="pill" href="#Excepciones" role="tab" aria-controls="Excepciones" aria-selected="false">Excepciones</a>
                    <a class="nav-link" id="v-Archivos-tab" data-toggle="pill" href="#Archivos" role="tab" aria-controls="Archivos" aria-selected="false">Archivos</a>
                    

                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Principal" role="tabpanel" aria-labelledby="v-Principal-tab">
                        <?php include 'Introduccion/Principal.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="String" role="tabpanel" aria-labelledby="v-String-tab">
                        <?php include 'Introduccion/String.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="Arrays" role="tabpanel" aria-labelledby="v-Arrays-tab">
                        <?php include 'Introduccion/arrays.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="Foreach" role="tabpanel" aria-labelledby="v-Foreach-tab">
                        <?php include 'Introduccion/Foreach.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="Funciones" role="tabpanel" aria-labelledby="v-Funciones-tab">
                        <?php include 'Introduccion/Funciones.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="Excepciones" role="tabpanel" aria-labelledby="v-Excepciones-tab">
                        <?php include 'Introduccion/excepciones.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="Archivos" role="tabpanel" aria-labelledby="v-Archivos-tab">
                        <?php include 'Introduccion/Archivos.php'; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>