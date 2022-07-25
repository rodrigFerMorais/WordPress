<?php

/* Template Name: Assinaturas*/

if(!is_user_logged_in()) {

  // Redireciona para o login caso não esteja logado
  wp_redirect(home_url('entrar'));
  exit();

}

get_header(); ?>

  <style type="text/css">
    @font-face {
    font-family: 'Gotham-Book';
    font-style: normal;
    font-weight: normal;
    src: local('Gotham-Book'), url('https://www.jdemito.com.br/wp-content/themes/jdemito/fonts/Gotham-Book.woff') format('woff');
    }
    @font-face {
    font-family: 'Gotham-Medium';
    font-style: normal;
    font-weight: normal;
    src: local('Gotham-Medium'), url('https://www.jdemito.com.br/wp-content/themes/jdemito/fonts/Gotham-Medium.woff') format('woff');
    }

    * {margin:0px;padding:0px;box-sizing:border-box;}
    body {background:#a5a6a7;}
    .row {margin-right: 0!important;margin-left: 0!important;}
    .space{padding-top: 30px;padding-bottom: 30px;}
    #tituloAssinatura{background: #e5a40d;color: #FFF;text-transform: uppercase;text-align: center;}
    #tituloAssinatura h1{font-size: 25px;font-weight: 600;}
    
    .center {position:relative;margin: auto;display: flex;justify-content: center;align-content: center;}
    .card {width: 100%;max-width: 900px;height: auto;border: 2px solid #e4e1e1;padding: 85px 30px 45px 30px;;background: #e6e6e6;border-radius: 15px;margin-top: 250px;}
    .card-display {position: absolute;top: -200px;width: 800px;height: 249px;left: 50%;transform: translateX(-50%);}
    .card-display .card-box-inner {position: relative;width: 100%;height: 100%;text-align: center;transition: transform 0.8s;transform-style: preserve-3d;}
    .card .card-input-box{width: 100%;}
    .card .card-input-box .inputs input,.card .card-input-box .inputs select {padding: 8px;display: flex;flex-direction: column;margin: 10px auto;width: 100%;}
    .card .card-input-box .inputs select {margin-top: 0px;text-transform: capitalize;}
    .card .card-input-box .inputs .input-group {margin:auto;width: 100%;max-width: 300px;}
    .card .cardInfo {width: 100%;
    height: 249px;
    background-image: url(https://www.jdemito.com.br/wp-content/themes/jdemito/img/assinatura/fundo_assinatura_bg.jpg);
    max-width: 800px;
    display: flex;
    padding-left: 140px;
    flex-direction: column;}
    .card .tocantins{background-image: url(https://www.jdemito.com.br/wp-content/themes/jdemito/img/assinatura/fundo_assinatura_tocantins.jpg)!important;}
    .card .matoGrosso{background-image: url(https://www.jdemito.com.br/wp-content/themes/jdemito/img/assinatura/fundo_assinatura_mato_grosso.jpg)!important;}
    .card .cardInfo div {width: 100%;font-size: 8px;margin: 0px 2px;line-height: normal;max-width: 415px;text-align: left;margin-top: 5px;}
    .card .card-input-box .inputs .input-group button {width:100%;height:40px;font-size:15px;font-weight:600;text-transform:uppercase;outline:none;background:#d2d3d5;color:#ddd;border:none;border-radius:5px;padding: 0px 25px;pointer-events: none;}
    .card .card-input-box .inputs .input-group button a{color: #ddd;}
    .card .empresa {position: relative;top: -175px;float: right;width: 100%;line-height: 24px;max-width: 200px;}
    .card .cardInfo .part-1{color: #5c5151;font-size: 20px;text-transform: uppercase;font-family: 'Gotham-Medium';margin-top: 38px;display: flex;flex-direction: row;}
    .card .cardInfo .part-2{color: #e5a507;font-size: 18px;text-transform: uppercase;margin-top: 8px;font-family: 'Gotham-Book';margin-bottom: 28px;display: flex;flex-direction: row;}
    .card .cardInfo .part-3{color: #5c5151;font-size: 14px;font-weight: 500;font-family: 'Gotham-Book';margin-top: 30px;display: flex;flex-direction: row;}
    .card .cardInfo .part-4{color: #5c5151;font-size: 14px;font-weight: 500;font-family: 'Gotham-Book';margin-top: 7px;display: flex;flex-direction: row;}
    .card .cardInfo .part-5{color: #e5a507;font-size: 14px;font-weight: 500;font-family: 'Gotham-Book';margin-top: 8px;display: flex;flex-direction: row;}

    .block .logosImg {display: none;position: absolute;top: 30px;left: 0px;}
    .block .logosImg p{font-size: 15px;text-align: center;color: #e2a40f;margin-top: 13px;font-family: 'Gotham-Book';}
    .block .logosImg img{width: 100%;max-width: 150px;margin-top: 10px;}

    .block #jdemito{position: unset;top: 0px;left: 0px;}

    .block #IMPERIOCALTINS img{max-width: 180px!important;margin-bottom: 7px;}
    #endereco{margin-top: 10px;}
    #created-element{opacity: 0!important;}
    #jdemito img{max-width: 120px!important;margin-top: -7px;}
    #download-container .cardInfo .imgInfoAssinatura{width: 100%;max-width: 15px;margin-right: 5px;}
    #download-container .cardInfo .imgInfoAssinatura span{margin-left: 5px;}

    .container .btnSair{display: flex;justify-content: center;align-items: center;margin: 30px auto;}
    .container .btnSair button{padding: 10px 30px;background: unset;border: unset;text-decoration: underline;}
    .container .btnSair button a{color: #FFF;font-weight: 600;}
        
    /*display none*/
    .instagram,#contato, iframe, .footer{display: none;}

  </style>

  <div id="tituloAssinatura" class="space">
    <h1>Assinatura grupo J. Demito</h1>
  </div>  
  <div class="container">    
    <div class="center card">
      <div class="card-display" id="download-container" >
        <div class="card-box-inner">
          <div class="cardInfo colors" id="enderecoImg">
            <div id="nome" class="part-1"><span>Nome do funcionario</span></div>
            <div id="cargo" class="part-2"><span>Cargo</span></div>

              <div id="telefone" class="part-3 spaceInp" style="display: none;">
                <img class="imgInfoAssinatura spaceTop" src="<?php bloginfo('template_url'); ?>/img/assinatura/telefone.png"> +55 <span> ( ) ____-____</span>
              </div>

              <div id="whatsapp" class="part-4 spaceInp" style="display: none;">
                <img class="imgInfoAssinatura spaceTop" src="<?php bloginfo('template_url'); ?>/img/assinatura/whatsapp.png" > +55 <span> </span>
              </div>

              <div id="email" class="part-5">
                <img class="imgInfoAssinatura" src="<?php bloginfo('template_url'); ?>/img/assinatura/email.png"> <span> funcionario@jdemito.com.br</span>
              </div>
          </div>
          <div class="empresa">
            <div class="block">
              <div id="jdemito" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/jdemito.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="CALNAMIX" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/CALNAMIX.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="CALPI" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/CALPI.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="CALTINS" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/CALTINS.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="CARBONAX" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/CARBONAX.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="CAROLTINS" class="logosImg">  
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/CAROLTINS.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="FORMACAL" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/FORMACAL.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="GESSOTINS" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/GESSOTINS.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="IMPERIOCALTINS" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/IMPERIO_CALTINS.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="MINERAX" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/MINERAX.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="MINERTINS" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/MINERTINS.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="NATICAL" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/NATICAL.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="NOBRETINS" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/NOBRETINS.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="OESTECAL" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/OESTECAL.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="POXOTINS" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/POXOTINS.png">
                <p>jdemito.com.br</p>
              </div>
              <div id="SUPERCAL" class="logosImg">
                <img src="<?php bloginfo('template_url'); ?>/img/assinatura/logos/SUPERCAL.png">
                <p>jdemito.com.br</p>
              </div>                      

            </div>
          </div>

        </div>    
      </div>
      <div class="card-input-box">
        <div class="inputs">
          <div class="input-group">
            <div class="row">
              <label for="">Informações</label>
            </div>
            <div id="boxInput" class="row col-12">
              <input type="text" id="card-number-1" maxlength="33" placeholder="Nome" class="valid" name="nomeAss">
              <input type="text" id="card-number-2" maxlength="35" placeholder="Cargo" class="valid" name="cargoAss">
              <input type="text" id="card-number-3" maxlength="16" placeholder="Telefone" class="numeroTelefone valid" name="telefoneAss">
              <input type="text" id="card-number-4" maxlength="17" placeholder="Whatsapp" class="numeroTelefone">
              <input type="text" id="card-number-5" maxlength="40" placeholder="E-mail" class="valid" name="emailAss">
            </div>
          </div>

          <div class="input-group">
            <div class="row col-12">
              <div class="row">
                <div>
                  <select id="enderecoEmpresa">
                    <option value="" >endereço</option> 
                    <option value="tocantins">tocantins</option>                          
                    <option value="mato grosso">mato grosso</option>
                  </select>

                </div>
              </div>
            </div>
          </div>

          <div class="input-group">
            <div class="row col-12">
              <div class="row">
                <div>
                  <select id="select">
                    <option value="" >Empresa</option> 
                    <option value="jdemito">J. Demito</option>                          
                    <option value="CALNAMIX">Calnamix</option>
                    <option value="CALPI">Calpi</option>
                    <option value="CALTINS">Caltins</option>
                    <option value="CARBONAX">Carbonax</option>
                    <option value="CAROLTINS">Caroltins</option>  
                    <option value="FORMACAL">Formacal</option>
                    <option value="GESSOTINS">Gessotins</option>
                    <option value="IMPERIOCALTINS">Imperio Caltins</option>
                    <option value="MINERAX">Minerax</option>
                    <option value="MINERTINS">Minertins</option>
                    <option value="NATICAL">Natical</option>
                    <option value="NOBRETINS">Nobretins</option>
                    <option value="OESTECAL">Oestecal</option>  
                    <option value="POXOTINS">Poxotins</option>
                    <option value="SUPERCAL">Supercal</option>
                  </select>

                </div>
              </div>
            </div>
          </div>
          <div class="input-group">
            <button id="download-btn">Download</button>
          </div>
        </div>
      </div>
    </div>

    <div class="btnSair">
      <button>
        <a href="<?php echo wp_logout_url(home_url('entrar'));?>">SAIR</a>
      </button>  
    </div>
     
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://superal.github.io/canvas2image/canvas2image.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
   
    <!-- MASCARA PARA TELEFONE -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.mask.js"></script>
    <script>
      var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
        },clearIfNotMatch: true
    };

    // Adiciona a máscara ao telefone do contato e formulário do checkout
    $(document).ready(function(){
    $('.numeroTelefone').mask(SPMaskBehavior, spOptions);
    });
    </script>
    <!-- FIM MASCARA -->

    <!-- Endereço -->
    <script>
      $( "#enderecoEmpresa" ).change(function () {
          $('#enderecoImg').removeClass();
          var str = "";
          str = $('#enderecoEmpresa option:selected').text();
          if( str === "endereço" ){
              $("#enderecoImg").addClass("cardInfo");              
          }          
          if( str === "tocantins" ){
              $("#enderecoImg").addClass("cardInfo");
              $("#enderecoImg").addClass("tocantins");                
          }
          if( str === "mato grosso" ){
              $("#enderecoImg").addClass("cardInfo");
              $("#enderecoImg").addClass("matoGrosso");               
          }

      });
    </script>
    <!-- Fim Endereço -->

    <!-- Empresa -->
    <script>
      $('#select').change(function() {
        $('.logosImg').hide();
        var select = $(this);
        $('#' + select.val()).show();
      });
    </script>
    <!-- Fim Empresa -->

    <script>
      // Dados do cliente 
      var cardInfoIp = [
        document.getElementById("card-number-1"),
        document.getElementById("card-number-2"),
        document.getElementById("card-number-3"),
        document.getElementById("card-number-4"),
        document.getElementById("card-number-5")
      ];

      var cardInfoView = document.getElementsByClassName("cardInfo")[0];
      
      cardInfoIp[0].addEventListener("keyup",function(){
        cardInfoView.querySelector(".part-1 span").innerText = this.value;
      });

      cardInfoIp[1].addEventListener("keyup",function(){
        cardInfoView.querySelector(".part-2 span").innerText = this.value;
      });

      // Telefone
      cardInfoIp[2].addEventListener("keyup",function(){
        cardInfoView.querySelector(".part-3 span").innerText = this.value;
        telefoneCartao = this.value;



        if(this.value.length == 0){

        }else{

        }
      });

      // Whatsapp
      cardInfoIp[2].addEventListener("keyup",function(){
        cardInfoView.querySelector(".part-3 span").innerText = this.value;
        if(this.value.length == 0){
          document.getElementById("telefone").style.display = "none";
          document.querySelector('#cargo').style.margin = "0px 0px 60px 0px";
        }else{
          document.getElementById("telefone").style.display = "block";
          document.querySelector('#cargo').style.margin = "8px 0px 0px 0px";
        }

      });


      // Whatsapp
      cardInfoIp[3].addEventListener("keyup",function(){
        cardInfoView.querySelector(".part-4 span").innerText = this.value;
        if(this.value.length == 0){
          document.getElementById("whatsapp").style.display = "none";
          document.querySelector('#telefone').style.margin = "60px 0px 0px 0px";
        }else{
          document.getElementById("whatsapp").style.display = "block";
          document.querySelector('#telefone').style.margin = "30px 0px 0px 0px";
        }

      });
      cardInfoIp[4].addEventListener("keyup",function(){
        cardInfoView.querySelector(".part-5 span").innerText = this.value;
        if(this.value.length == 0){
          document.getElementById("whatsapp").style.display = "none!important";
        }else{
          document.getElementById("whatsapp").style.display = "block!important";
        }
      });      
    </script>

    <script>
      document.querySelector('#download-btn').addEventListener('click', function() {
        html2canvas(document.querySelector('#download-container'), {
          onrendered: function(canvas) {
            return Canvas2Image.saveAsPNG(canvas);
          }
        });
      }); 
    </script>

    <script> 
      $('body').on('keyup change','input, select',function(){
        var inputNome = document.getElementById("card-number-1").value.length;
        var inputCargo = document.getElementById("card-number-2").value.length;
        var inputTelefone = document.getElementById("card-number-3").value.length;
        var inputEmail = document.getElementById("card-number-5").value.length;
        var select = document.getElementById('select');
        var value = select.options[select.selectedIndex].value;

        if ( inputNome > 0 && inputCargo > 0 && inputEmail > 0 && value != ""){
          document.getElementById("download-btn").style.pointerEvents = "all";
          document.querySelector(".card .card-input-box .inputs .input-group button").style.background = "#5c5d60";
        }else{
          document.getElementById("download-btn").style.pointerEvents = "none";
          document.querySelector(".card .card-input-box .inputs .input-group button").style.background = "#d2d3d5";
        }
      })

      
    </script>



<?php get_footer(); ?>