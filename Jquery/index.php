<html>
    <head>

        <meta charset="UTF-8">
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="principal.css">

        <script>
          
          $(document).ready(function (){

            //ao clicar em qualquer li
            $("#abas ul li").click(function (){

              //alterar a classe em que cliquei
              $(this).toggleClass("selecionado");

              //Guardo o valor do id de quem eu cliquei
              var id = $(this).attr("id");

              //alterar a exibição da div
              $("."+id).toggle();

            })

          });

        </script>

</head>
<body>

 <section id="cetral">
     <div id="abas">

         <ul>
             <li id="aba1" class="selecionado aba1"> 1 Tab </li>
         </ul>
         <ul>
             <li id="aba2" class="selecionado aba2"> 2 Tab </li>
         </ul>
         <ul>
             <li id="aba3" class="selecionado aba3"> 3 Tab </li>
         </ul>

     </div>

   <div id="conteudo1"    class="conteudo aba1">
       Conteúdo da 1 Aba
   </div>

     <div id="conteudo2"  class="conteudo aba2">
       Conteúdo da 2 Aba
   </div>

     <div id="conteudo3"  class="conteudo aba3">
       Conteúdo da 3 Aba
   </div>

 </section>

</body>
</html>

<?php
/*
  if (isset($_GET['acao'])){
      $acao = $_GET['acao'];
  }else{
      $acao = 'index';
  }

Switch ($acao){
    case 'index':
}

 break;*/