<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            padding: 20px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
        }
        .content {
            margin-top: 20px;
        }
        .footer {
            margin-top: 40px;
            font-size: 12px;
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Confirmation de réservation</div>
        <div class="content">
            <p>Bonjour {{ Auth::user()->name }},</p>
            <p>Votre réservation a été confirmée avec succès.</p>
            <!-- Inclure d'autres détails de réservation si nécessaire -->
        </div>
        <div class="footer">
            Merci pour votre réservation !
        </div>
    </div>
</body>
</html>
