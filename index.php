<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Imagem na Nuvem</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f2f4f7;
        }

        .container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            width: 400px;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="card">

            <img src="imagem.jpg" class="card-img-top" alt="Imagem de teste">

            <div class="card-body text-center">

                <h4 class="card-title">
                    Imagem na Nuvem
                </h4>

                <p class="card-text">
                    Imagem exibida através de uma aplicação PHP
                    executada em um container Docker.
                </p>

            </div>

        </div>

    </div>

</body>

</html>
