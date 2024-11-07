<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="icon" href="logo.jpeg" type="image/x-icon">
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-logo {
            max-width: 150px;
            /* Limite la taille maximale de l'image */
            width: 100%;/* S'adapte à la largeur du conteneur */
        }

        .large-text {
            font-size: 30px;
        }

        .fixed-size-image {
            width: 100%;
            height: 200px;
            /* Hauteur fixe pour que toutes les images aient la même taille */
            object-fit: cover;
            /* Maintient le rapport d'aspect en recadrant l'image */
        }

        .image-container {
            transition: transform 0.3s ease;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    <header class="mt-5">
        <div class="container">
            <div class="row align-items-center m-3">
                <div class="col-12 col-md-9 text-center text-md-start">
                    <p class="fw-bold">
                        Royaume du Maroc<br>Ministère de l'intérieur<br>Province de Safi<br>SSICTD
                    </p>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <img class="img-fluid custom-logo" src="/logo.jpeg" alt="logo" />
                </div>
            </div>
        </div>
    </header>

    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between">
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="image-container">
                        <a href="#"><img src="digital1.jpg" class="img-fluid fixed-size-image border border-primary h-10" alt="Image 1"></a>
                        <div class="text-center mt-3">
                            <p class="fst-italic fs-5 text-primary">Transformation digital</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="image-container">
                        <a href="{{ route('Systemesinfo') }}"><img src="systeminfo2.png" class="img-fluid fixed-size-image border border-primary" alt="Image 2"></a>
                        <div class="text-center mt-3">
                            <p class="fst-italic fs-5 text-primary">Systèmes d'information</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="image-container">
                        <a href="{{ route('serveurs') }}"><img src="serveurs3.jpeg" class="img-fluid fixed-size-image border border-primary" alt="Image 3"></a>
                        <div class="text-center mt-3">
                            <p class="fst-italic fs-5 text-primary">Serveurs</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="image-container">
                        <a href="{{ route('go') }}"><img src="systemeres4.png" class="img-fluid fixed-size-image border border-primary" alt="Image 4"></a>
                        <div class="text-center mt-3">
                            <p class="fst-italic fs-5 text-primary">Systèmes réseaux</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
<script>
    window.history.forward();
</script>