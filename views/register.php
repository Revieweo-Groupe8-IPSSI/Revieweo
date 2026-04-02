<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription - SCENEVIEW</title>
    
    <!-- On importe Bootstrap et le style de la page d'accueil -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../front/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Graphik:wght@400;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #14181c; /* Fond sombre Letterboxd */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Graphik', sans-serif;
        }
        .register-card {
            background: #2c3440; /* Gris bleuté des sections de Maram */
            padding: 40px;
            border-radius: 12px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.6);
        }
        .form-control {
            background-color: #445566;
            border: 1px solid #445566;
            color: white;
            margin-bottom: 15px;
            padding: 12px;
        }
        .form-control:focus {
            background-color: #556677;
            color: white;
            box-shadow: none;
            border-color: #00bb02;
        }
        .btn-register {
            background-color: #00bb02; /* Vert de validation */
            border: none;
            font-weight: bold;
            padding: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .btn-register:hover {
            background-color: #008f1a;
        }
        label {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 0.8rem;
            color: #9ab;
            margin-bottom: 5px;
            display: block;
        }
    </style>
</head>
<body>

<div class="register-card">
    <h2 class="text-center mb-4" style="font-family: 'Roboto Condensed', sans-serif; letter-spacing: 2px;">JOIN SCENEVIEW</h2>
    
    <!-- Ton formulaire PHP avec le style Bootstrap -->
    <form method="POST" action="index.php/register">
        <div class="mb-3">
            <label>USERNAME</label>
            <input type="text" name="pseudo" class="form-control" placeholder="JohnDoe" required>
        </div>

        <div class="mb-3">
            <label>EMAIL ADDRESS</label>
            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
        </div>
        
        <div class="mb-3">
            <label>PASSWORD</label>
            <input type="password" name="password" class="form-control" placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 btn-register mt-2">Create Account</button>
    </form>

    <div class="text-center mt-4 border-top pt-3" style="border-color: #445566 !important;">
        <p class="small text-white-50">Déjà un compte ? 
            <a href="login.php" class="text-white text-decoration-none fw-bold">SIGN IN</a>
        </p>
        <a href="../front/index.php" class="small text-white-50 text-decoration-none">← Back to home</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>