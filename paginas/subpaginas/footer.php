<?php require_once('constantes.php'); ?>

<div class="row" id="rodape">
    <div class="col-xs-12" >
      <div class="row">
        <div class="col-xs-4">
            <ul>
              <li><h3>IMÓVEIS</h3></li>
              <li><a href="<?= RAIZ ?>areas-portuarias">Áreas Portuarías</a></li>
              <li><a href="<?= RAIZ ?>aluguel">Casas para Aluguar</a></li>
              <li><a href="<?= RAIZ ?>venda">Casas a Venda</a></li>
              <li><a href="<?= RAIZ ?>loteamentos">Loteamentos</a></li>
              <li><a href="<?= RAIZ ?>terrenos-urbanos">Terrenos Urbanos</a></li>
              <li><a href="<?= RAIZ ?>terrenos-rurais">Terrenos Rurais</a></li>
            </ul>
            <ul>
            <li><h3>SERVIÇOS</h3></li>
            <li><a href="<?= RAIZ ?>servicos">Conheça nossos serviços</a></li>
          </ul>
        </div>
        <div class="col-xs-4">
          <p class="text-center logos-socias"><a href="#" target="_blank"><img src="<?= RAIZ ?>img/facebook-icon.png" alt=""></a>  <a href="#"target="_blank"><img src="<?= RAIZ ?>img/youtube-icon.png" alt=""></a></p>
          <p class="text-center" ><img src="<?= RAIZ ?>img/plug-facebook.jpg" ></p>
        </div>
        <div class="col-xs-4">
          <h3>CONTATOS</h3>
          <form onsubmit='return valida_form();' action="<?= RAIZ ?>contato" class="form form-horizontal" method="post"  id="contato-form" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group">
              <div class="col-xs-12">
                <input type="text" obg="Nome" class="form-control" id="cNome" name="tNome" placeholder="Nome Completo">
              </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                  <input type="tel" obg="Telefone" class="form-control" id="cTelefone" name="tTelefone" placeholder="Telefone">
                </div>
              </div>
            <div class="form-group">
              <div class="col-xs-12">
                 <input type="tel" obg="Email" class="form-control" id="cEmail" name="tEmail" placeholder="E-mail">
              </div>
             </div>
            <div class="form-group">
                <div class="col-xs-12">
                  <textarea obg="Mensagem" class="form-control" id="cMensagem" name="tMensagem" rows="3" placeholder="Mensagem" style="margin: 0px; max-height: 80px; max-width: 285px;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-offset-4 col-xs-4 ">
                  <button type="submit" name="tEnviar" id="cEnviar" class="btn btn-info">Enviar</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row" id="rodape-2">
    <div class="col-md-12">
      <a href="http://www.endogenese.com.br/" target="_blank"><img src="<?= RAIZ ?>img/endogenese.png" alt="Empresa Desenvolvedora Endogense Soluções" id="logo-endogenese"></a>
      <p class="text-center">© 2004-2014 - kananda.imb.br | Todos os direitos reservados <br>
                  É proibida a reprodução total ou parcial de qualquer conteúdo deste site.
         </p>
        <a href="http://www.endogenese.com.br/" target="_blank"><img src="<?= RAIZ ?>img/endogenese2.png" alt="Empresa Desenvolvedora Endogense Soluções" id="logo-endogenese-2"></a>
    </div>
  </div>
  </div><!--FIM DO CONTAINER -->
  <script type="text/javascript" src="<?= RAIZ ?>js/holder.js"></script>
  <script type="text/javascript" src="<?= RAIZ ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= RAIZ ?>js/docs.min.js"></script>
  <script src="<?= RAIZ ?>js/jquery_2.1.1.min.js"></script>
  <script src="<?= RAIZ ?>js/infobox.js"></script>
  <script src="<?= RAIZ ?>js/markerclusterer.js"></script>
  <script src="<?= RAIZ ?>js/mapa.js"></script>
  <script type="text/javascript">

    $(document).ready(function() {
      
      exibe_mapa = function (exibe){

        if(exibe){
          $('#cMapa').css('display', 'block');
        }else{
          $('#cMapa').css('display', 'none');
        }

      }

      $('label.active').on('click',function(e){
                alert('sd');
         var $this = $(this),
             valor = $this.val();
        
         if ($this.is(':checked')){
            visibles.push(valor);
         }
         else {
            visibles.splice(visibles.indexOf(valor), 1);
         }

         ocultar_marcadores();
      });

      valida_form = function(){

        if($('#cNome').val()==''){
          alert('Preencha o Nome!');
          return false;
        }else if($('#cTelefone').val()==''){
          alert('Preencha o Telefone!');
          return false;
        }else if($('#cEmail').val()==''){
          alert('Preencha o E-mail!');
          return false;
        }else if($('#cMensagem').val()==''){
          alert('Preencha a Mensagem!');
          return false;
        }else{
          return true;
        }

      }

    });

  </script>
</body>
</html>