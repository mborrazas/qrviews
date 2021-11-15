<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Generador</title>
</head>

<body class="container-fluid" id="step1">
    <header>

    </header>
    <section id="containerTypes">
        <h2 id="title">Elige un tipo de QR</h2>
        <div class="element seletType" data-type="website">
            <h3 class="title">Página web</h3>
            <p>Abre una URL</p>
        </div>
        <div class="element seletType" data-type="listLinks">
            <h3 class="title">Listado de Enlaces</h3>
            <p>Agrupa enlaces</p>
        </div>
        <div class="element seletType" data-type="vcard">
            <h3 class="title">Vcard Plus</h3>
            <p>Comparte detalles de contacto</p>
        </div>
        <div class="element seletType" data-type="business">
            <h3 class="title">Negocio</h3>
            <p>Comparte información sobre tu negocio</p>
        </div>
        <div class="element seletType" data-type="apps">
            <h3 class="title">Apps</h3>
            <p>Redirecciona a una tienda de apps</p>
        </div>
        <div class="element seletType" data-type="pdf">
            <h3 class="title">PDF</h3>
            <p>Muestra un PDF</p>
        </div>
        <div class="element seletType" data-type="menu">
            <h3 class="title">Carta / Menú</h3>
            <p>Despliega el menú de un restaurante o bar</p>
        </div>
        <div class="element seletType" data-type="galery">
            <h3 class="title">Imágenes</h3>
            <p>Enseña una galería de imágenes</p>
        </div>
        <div class="element seletType" data-type="video">
            <h3 class="title">Video</h3>
            <p>Enseña un video</p>
        </div>
        <div class="element seletType" data-type="wifi">
            <h3 class="title">WiFi</h3>
            <p>Conecta a una red WiFi</p>
        </div>
    </section>
    <aside>

    </aside>

    <section id="bar">
        <div class="row">
            <div class="col">
                <button id="cancelar">Cancelar</button>
            </div>
            <div class="col">
                <span>Tipo de QR</span>
                <span>Contenido</span>
                <span>Diseño del QR</span>
            </div>
            <div class="col">
                <a href="/generatorStep2.php">
                    <button id="siguiente">Siguiente</button>
                </a>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>