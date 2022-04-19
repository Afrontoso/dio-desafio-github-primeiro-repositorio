<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício proposto</title>
</head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
    $(function () {
        $("#accordion").accordion(); 
    });
    $(document).ready(function(){
    $("p").click(function(){
    $(this).hide();
  });
});
    </script>
<script> 
$(document).ready(function(){
    $("button").click(function(){
        $("div").animate({
        height: 'toggle'
    });
  });
});
</script> 
<body>
<div id = "accordion">
    <h1>Sobre mim!</h1>
    <div>
    <p1>Oi, meu nome é Victor Leandro, tenho 24 anos, estou na busca de aprender e me aperfeiçoar no mundo da técnologia.</p1>
    </div>
    <h1>O que estou aprendendo?</h1>
    <div>
    <p1>Atualmente estou fazendo um bootcamp do carrefour, Carrefour Web Developer, pela DIO.
        Também curso Análise e Desenvolvimento de Sistemas, pela Univesidade do Cruzeiro do Sul.
        Além de alguns curso por fora da faculdade!
    </p1>
    </div>
    <h1>Buscando seguir uma carreira!</h1>
    <div>
    <p>Click em mim!</p>
    <p>EM MIM TAMBÉM!!</p>
    <button>NÃO ME APERTE!!!!</button>
    </div>
</body>
</html>