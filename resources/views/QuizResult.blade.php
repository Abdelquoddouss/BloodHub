<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat du test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="text-center py-5 mb-4 bg-success-subtle w-100 min-vh-100">

    
	<div class="p-5 mb-4 lc-block bg-red">
		<div class="lc-block mb-4">
			<div editable="rich">
				<h2 class="fw-bold display-2">{{ __('Résultat du test don sang') }}</h2>
				<h2 class="fw-bold display-2">{{ $testResult->user->name }}</h2> <!-- Affichage du nom de l'utilisateur -->
			</div>
		</div>
        <div class="lc-block mb-5">
        <div editable="rich">
            <p class="lead">Vous avez obtenu {{ $testResult->score }} sur {{ $testResult->total }}.</p>
            @if ($testResult->passed)
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @else
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endif
        </div>
    </div>
		<div class="lc-block mb-2">
			<a class="btn btn-primary" href="#" role="button">Click me, I'm a button</a>
		</div>
		
	</div>
</div> 
</body>
</html>
