<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Plateforme Universitaire')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f4f7fb;
            color: #1f2937;
        }

        /* ===== HEADER ===== */
        header {
            background-color: #0b5ed7; /* bleu universitaire */
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            font-size: 20px;
            font-weight: 600;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 500;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* ===== MAIN ===== */
        main {
            max-width: 1100px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        /* ===== ALERTS ===== */
        .alert-success {
            background-color: #e6f0ff;
            color: #084298;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            border-left: 4px solid #0b5ed7;
        }

        /* ===== FOOTER ===== */
        footer {
            margin-top: 50px;
            text-align: center;
            padding: 15px;
            color: #6b7280;
            font-size: 14px;
        }

        /* ===== BUTTONS ===== */
        button {
            background-color: #0b5ed7;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
        }

        button:hover {
            background-color: #094db1;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
        }

        label {
            font-weight: 500;
        }
    </style>

    @yield('styles')
</head>
<body>

<header>
    <div class="logo">
        Université ESAG-NDE
    </div>

    <nav>
        @auth
            <a href="{{ route('acceuil.index') }}">Accueil</a>
            <a href="#">Profil</a>
            <a href="#">Déconnexion</a>
        @else
            <a href="{{ route('login') }}">Connexion</a>
            <a href="{{ route('register') }}">Inscription</a>
        @endauth
    </nav>
</header>

<main>
    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</main>

<footer>
    © {{ date('Y') }} Université ESAG-NDE — Tous droits réservés
</footer>

@yield('scripts')

</body>
</html>
