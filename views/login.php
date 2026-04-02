<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion - SCENEVIEW</title>
    
    <!-- On garde le même Bootstrap et le même CSS que Maram -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../front/style.css"> <!-- On lie le CSS du dossier front -->
    <link href="https://fonts.googleapis.com/css2?family=Graphik:wght@400;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">

    <style>
        /* Petit ajout pour centrer le formulaire proprement comme sur son design */
        body {
            background-color: #14181c; /* La couleur sombre du site de Maram */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .login-card {
            background: #2c3440;
            padding: 30px;
            border-radius: 12px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
        }
        .form-control {
            background-color: #445566;
            border: none;
            color: white;
            margin-bottom: 15px;
        }
        .form-control:focus {
            background-color: #556677;
            color: white;
            box-shadow: none;
            border: 1px solid #00bb02; /* La couleur verte de validation souvent sur ce style */
        }
        .btn-login {
            background-color: #00b020; /* Vert "Letterboxd style" ou utilise le bleu primary */
            border: none;
            font-weight: bold;
            text-transform: uppercase;
        }
        .btn-login:hover {
            background-color: #008f1a;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2 class="text-center mb-4" style="font-family: 'Roboto Condensed', sans-serif;">SIGN IN</h2>
    
    <!-- Ton code PHP reste le même, on change juste l'apparence -->
    <form method="POST" action="login">
        <div class="mb-3">
            <label class="small text-white-50">EMAIL</label>
            <input type="email" name="email" class="form-control" placeholder="example@mail.com" required>
        </div>
        
        <div class="mb-3">
            <label class="small text-white-50">PASSWORD</label>
            <input type="password" name="password" class="form-control" placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 btn-login">Se connecter</button>
    </form>

    <div class="text-center mt-4">
        <p class="small text-white-50">Pas encore de compte ? <br>
            <a href="register.php" class="text-white text-decoration-none fw-bold">CREATE AN ACCOUNT</a>
        </p>
        <a href="../front/index.php" class="small text-white-50 text-decoration-none">← Retour à l'accueil</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>