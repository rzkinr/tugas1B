<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 1B</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
        html, body {
        background-color: #252425;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h2 class="text-center mb-3 ">
                Tentang saya?.
            </h2>
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('img/gmbr.jpg') }}" width="350px" class="float-right">
                </div>
                <div class="col-6">
                    <p class="justify-text">
                        Nama saya Rizki nur rokhim, panggil saja rizki. saya lahir di kabupaten Nabire, Papua Barat pada tanggal 18 september 2000. Tetapi saya tumbuh besar di jawa tepatnya dikabupaten Magetan yang tak dikenal banyak orang.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>