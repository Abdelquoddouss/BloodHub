<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat du test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('{{ asset('img/test.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .lc-block {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 60px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 800px;
            margin: auto;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50vh;
        }

        .lc-block h2 {
            color: #004d40;
        }

        .lc-block p {
            color: #333333;
        }
    </style>
</head>

<body>
    <div class="container-fluid py-5 d-flex justify-content-center align-items-center">
        <!-- Ajout de classes pour centrer verticalement et horizontalement -->
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="lc-block">
                    <h2 class="fw-bold mb-4">{{ __('Résultat du test de don de sang') }}</h2>
                    <h3 class="fw-bold mb-4">{{ $testResult->user->name }}</h3>

                    @if ($testResult->passed)
                        <div class="alert alert-success" role="alert">
                            {{ $message }}
                        </div>
                    @else
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @endif

                    <div class="mt-4">
                        <a class="btn btn-primary" href="#" role="button">Revenir à la page principale</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
