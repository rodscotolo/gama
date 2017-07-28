<?= $this->assign('title',$title);?>
 <?= $this->Html->charset() ?>
  <!-- File: src/Template/Articles/index.ctp -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<body>
          <div class="ev-content">
          <div class="wrapper" id="aqui">


                          <div class="saibaleft">
                            <div class="alpha-big-text"><img src="/webroot/img/alpha-logo-web-header.png" alt="AlphaNine" width="280"></div><br>
                            <div class="alpha-text">Com o objetivo de trazer conte&uacute;do relevante, queremos proporcionar uma experi&ecirc;ncia empreendedora e divertida para voc&ecirc; se tornar cada vez melhor.</div>
                            <br>
                            
                          </div>

                          <div class="formright">
                            <div class="quer">Quer ficar por dentro das &uacute;ltimas novidades? Receber not&iacute;cias fresquinhas em seu e-mail? Preencha a&ecirc;!!</div>
                            <br>

                            <?php

                                echo $this->Form->create($lead); //POST, ['url' => '/articles/lead']
                                
                                echo $this->Form->input('nome', array('label' => "Nome Completo"));
                                echo $this->Form->input('email');
                                echo $this->Form->hidden('ip', ['value' => $this->request->clientIp()]);
                                // echo $this->Form->hidden('datahora', ['value' => date('Y-m-d H:i:s')]);
                                
                                echo $this->Form->button(__('Salvar'));
                                echo $this->Form->end();
                            ?>
                            
                          </div>

          </div>

                  <br>


</body>

          </div>
          
             <br><br>
              <div class="description" class="sobre">
          <div><h1 class="name"><h2>Sobre</h2></div>
          <br>
          <div><p>Somos um grupo jovem aficionado por tecnología, inovacao, criatividade e desafios. 
Nossa missão é buscar e transformar talentos que querem sair da sua zona de conforto e do mundo corporativo tradicional.
Com o objetivo de trazer conteúdos relevantes, queremos proporcionar uma experiência empreendedora e divertida para você ser a sua própria melhor versão. <p/>
         
         <!-- insira o vídeo aqui, renan
         
         
         
         
         
         
         -->
         
         
         </div>
          </div>
                   <br><br><Br>

                  <div class="description" class="deseja">
          <div><h1 class="name"><h2>Deseja receber periodicamente conteúdos relevantes em seu e-mail?</h2></div>
          <br>
          <div><p>Toda semana distribuímos conteúdo relevante para designers como e-books gratuitos e artigos sobre a área. Um exemplo é um guia rápido para você fazer apresentações de impressionar. Este guia foi preparado para dar as principais noções de apresentação de slides, seja no Power Point, Keynote ou outro software similar. Você vai conseguir encontrar noções e dicas de como definir tamanhos e proporção de slides, quais informações colocar em um slide e muito mais sobre imagens e ícones. Esperamos que você curta bastante o material, que ele te ajude a fazer apresentações incríveis e que continue aproveitando os conteúdos da Alphanine.   <p/></div>
              <a class="footlink" target="_blank" href="#aqui"><button class="leftie">Sim, mas é claro!</button></a>
          </div>
         
          <br><br><Br>
               <div class="description" class="deseja">
          <div><h1 class="name"><h2>Entrar em contato</h2></div>
          <br>
          <div><p>Toda semana distribuímos conteúdo relevante para designers como e-books de gratuitos e artigos sobre a área. Um exemplo é um guia rápido para você fazer apresentações de impressionar. Este guia foi preparado para dar as principais noções de apresentação de slides, seja no Power Point, Keynote ou outro software similar. Você vai conseguir encontrar noções e dicas de como definir tamanhos e proporção de slides, quais informações colocar em um slide e muito mais sobre imagens e ícones. Esperamos que você curta bastante o material, que ele te ajude a fazer apresentações incríveis e que continue aproveitando os conteúdos da Alphanine.   <p/></div>
                  <br>
                     <form class="cf">
                      <div class="half left cf">
                        <input type="text" id="input-name" placeholder="Nome completo">
                        <input type="email" id="input-email" placeholder="Endereço de email">
                        <input type="text" id="input-subject" placeholder="Insira sua mensagem aqui">
                      </div>
                      <div class="half right cf">
                        <textarea name="message" type="text" id="input-message" placeholder="Assunto"></textarea>
                      </div>  
                     <div class="wrapperbtn"> <a class="footlink" target="_blank" href="#aqui"><button>Enviar!</button></a></div>
                    </form>
          </div>
         
          
            <br><br>
                 
                  <!--<br><br>

                  <div class="description">
          <div><h1 class="name"><h2>Relatos</h2></div>
          <br>
          <div><p>Aqui vai ter as informações mais extensas sobre o que foi escrito acima, é onde a âncora do saiba mais acima vai levar.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, quis ab deserunt! Obcaecati cum accusantium maxime at expedita, sit tempora quas error enim maiores aliquam veritatis recusandae ex, qui eos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio soluta a consequuntur ratione numquam explicabo architecto reiciendis omnis praesentium quaerat nostrum deserunt magni et placeat at, cum impedit, laboriosam animi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et commodi laborum voluptate ipsum consequatur quod velit, dolorum, consequuntur eum laudantium, ea enim porro error nemo quae expedita veniam, perspiciatis. Magni?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum, consequatur quas atque architecto commodi eaque magni saepe at doloribus ipsum, alias facilis. Quod totam animi deserunt, aliquam, vel itaque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis a, voluptatibus obcaecati, nesciunt autem nulla aliquid nemo numquam eligendi debitis rem perspiciatis excepturi illum maiores eveniet, quia tempora quaerat. Maiores. <p/></div>
          </div>
          
            <br><br> -->
        <footer>
        <div class="foot">
        <a class="footlink" target="_blank" href="#">HOME</a> • <a class="footlink" target="_blank" href="/articles">BLOG</a> 
        <div class="footsocial">
        <a class="footlink" target="_blank" href="https://www.instagram.com/alphaninelegends/?hl=pt-br"><i class="fa fa-instagram" aria-hidden="true"></i></a> • 
        <a class="footlink" target="_blank" href="https://web.facebook.com/alphaninelegends/"><i class="fa fa-facebook" aria-hidden="true"></i></a> • 
        <a class="footlink" target="_blank" href="https://www.linkedin.com/company-beta/11210261/"><i class="fa fa-linkedin" aria-hidden="true"></i></a> • 
        <a class="footlink" target="_blank" href="https://twitter.com/Alpha9_Talents"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        
          
        </div>
        </footer>
