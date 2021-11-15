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

<body class="container-fluid" id="step2">
    <header>

    </header>
    <section id="containerData">
        <h2 id="title">2. Contenido de tu código QR</h2>
        <div class="containerItem">
            <h3 class="title">Nombre de tu código QR</h3>
            <input type="text" name="name" placeholder="Ej. Mi código QR">
        </div>
        <div class="containerItem">
            <h3 class="title">Información de la página web</h3>
            <label class="label" for="url">URL de la página web</label>
            <input type="text" name="url" placeholder="Ej. https://www.miweb.com/">
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
                <a href="/generatorStep3.php">
                    <button id="siguiente">Siguiente</button>
                </a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>