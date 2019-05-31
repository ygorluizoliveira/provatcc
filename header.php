<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <base href="/">

    <script>
        jQuery(document).ready(function() {
            jQuery('.toggle-nav').click(function(e) {
                jQuery(this).toggleClass('active');
                jQuery('.menu ul').toggleClass('active');

                e.preventDefault();
            });
        });
    </script>
</head>
<body>
    <nav class="menu">
        <ul class="active">
            <li class="current-item"><a href="#">Home</a></li>
            <li><a href=cliente/cliente.php>Cadastro de Cliente</a></li>
            <li><a href=automovel/automovel.php>Cadastro de Automóvel</a></li>
            <li><a href=locacao/locacao.php>Cadastro de Locação</a></li>
        </ul>

        <a class="toggle-nav" href="#">&#9776;</a>

        <form class="search-form">
            <input type="text">
            <button>Search</button>
        </form>
    </nav>
</body>