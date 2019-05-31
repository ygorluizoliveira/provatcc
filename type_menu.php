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

    
<script>
jQuery(document).ready(function() {
	jQuery('.toggle-nav').click(function(e) {
		jQuery(this).toggleClass('active');
		jQuery('.menu ul').toggleClass('active');

		e.preventDefault();
	});
});
</script>