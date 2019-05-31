<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Locavia</title>
</head>
<body>
    <?php
        require "Auth.php";
        $auth = new Auth();
        $auth->verifica();
    ?>
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




<script>
jQuery(document).ready(function() {
	jQuery('.toggle-nav').click(function(e) {
		jQuery(this).toggleClass('active');
		jQuery('.menu ul').toggleClass('active');

		e.preventDefault();
	});
});
</script>