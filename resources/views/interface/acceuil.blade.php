<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="icon" href="logo.jpeg" type="image/x-icon">
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .large-text {
            font-size: 30px;
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
<header>
        <div class="row m-5">
            <p class="col-10 fw-bold">Royaume du Maroc<br>Ministère de l'intérieur<br>Province de safi<br>SSICTD</p>
            <img class="m-3 mt-2 col-1" src="/logo.jpeg" alt="image" />
        </div>
 </header>
    <section>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3 image-container">
                    <a href=""><img src="digital1.jpg" class="img-fluid h-75 border border-primary" alt="Image 1"></a>
                    <div class="text-center mt-3">
                        <p class="fst-italic fs-2 text-primary">Transformation digital</p>
                    </div>
                </div>
                <div class="col-md-3 image-container">
                <a href="{{route('Systemesinfo')}}"><img src="systeminfo2.png" class="img-fluid h-75 border border-primary" alt="Image 2"></a>
                    <div class="text-center mt-3">
                        <p class="fst-italic fs-2 text-primary">Systèmes d'information</p>
                    </div>
                </div>
                <div class="col-md-3 image-container">
                <a href="{{route('serveurs')}}"><img src="serveurs3.jpeg" class="img-fluid h-75 border border-primary" alt="Image 3"></a>
                    <div class="text-center mt-3">
                        <p class="fst-italic fs-2 text-primary">Serveurs</p>
                    </div>
                </div>
                <div class="col-md-3 image-container">
                <a href="{{route('go')}}"><img src="systemeres4.png" class="img-fluid h-75 border border-primary" alt="Image 4"></a>
                    <div class="text-center mt-3">
                        <p class="fst-italic fs-2 text-primary">Systèmes réseaux</p>
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