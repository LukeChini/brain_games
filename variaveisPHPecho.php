<?php

if(!isset($_SESSION))
{
    session_start();
}

$usuario_logado = $_SESSION['username_logado'];
$src = $_SESSION['src_perfil'];




$html_nav = "
<?php session_start(); ".'$'."usuario_logado = ".'$'."_SESSION['usuario_logado'];if(".'$'."_SESSION['username_logado']==NULL){header('location:entrar.php');}?>
<div class='' style='background-color:rgb(14,145,161)'>
<div class='container'>
<nav class='navbar navbar-expand-lg navbar-light' style='background-color:rgb(14,145,161)'>
<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo03' aria-controls='navbarTogglerDemo03' aria-expanded='false' aria-label='Toggle navigation'>
<span class='navbar-toggler-icon'></span>
</button>
<a class='navbar-brand text-white font-weight-bold' href='#'>Brain Games</a>
<div class='collapse navbar-collapse' id='navbarTogglerDemo03'>
<ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
<li class='nav-item active'>
<a class='nav-link text-white' href='inicio-logado.php'>Início <span class='sr-only'>(current)</span></a>
</li>
<li class='nav-item'>
<a class='nav-link text-white' href='abajogos.php'>Jogos</a>
</li>
<li class='nav-item'>
<a class='nav-link text-white disabled' href='#'>Descobertas</a>
</li>
</ul>
<div class='nav-item dropdown'>
<div class='row'>
<div class=' border' id='div-img' style='height:50px; width:50px; margin: 0 auto; overflow:hidden; text-align:center;'>
<style media='screen'>
@media (max-width: 992px) {#div-img{display:none;}}
</style>
<img src="." ' ".$src." ' "."alt='' style='height:50px;'></img>
</div>
<a class='nav-link dropdown-toggle text-white font-weight-bold mt-1' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>".$usuario_logado."</a>
<div class='dropdown-menu'>
<a class='dropdown-item' href='conta.php'>Configurações da conta</a>
<a class='dropdown-item' href='#'>Ajuda</a>
<div class='dropdown-divider'></div>
<a class='dropdown-item' href='tratar_sair.php'>Sair</a>
</div>
</div>
</div>
</div>
</nav>
";


$html_footer =
"<footer class='container mt-3'>
<ul class='nav border-top border-bottom col-12'>
<li class='nav-item col-12 col-lg-2 text-center'><a class='nav-link text-secondary' href='sobrenos.php'>Sobre Nós</a></li>
<li class='nav-item col-12 col-lg-2 text-center'><a class='nav-link text-secondary' href='contato.php'>Contato</a></li>
<li class='nav-item col-12 col-lg-3 text-center'><a class='nav-link text-secondary' href='termosdeservico.php'>Termos de Serviço</a></li>
<li class='nav-item col-12 col-lg-3 text-center'><a class='nav-link text-secondary' href='#'>Política de Privacidade</a></li>
<li class='nav-item col-12 col-lg-2 text-center'><a class='nav-link text-secondary' href='#'>Ajuda</a></li>
</ul>
</footer>";






 ?>
