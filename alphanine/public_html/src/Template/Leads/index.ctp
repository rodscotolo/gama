<?= $this->assign('title',$title);?>
  <!-- File: src/Template/Articles/index.ctp -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<body>
          <div class="ev-content">
          <div class="wrapper">


                          <div class="saibaleft">
                            <div class="alpha-big-text"><img src="/webroot/img/alpha-logo-web-header.png" alt="AlphaNine" width="280"></div>
                            <div class="alpha-text">Com o objetivo de trazer conteúdo relevante, queremos proporcionar uma experiência empreendedora e divertida para você ser cada vez melhor.</div>
                            <br>
                            <button type="button">Saiba Mais!</button>
                          </div>

                          <div class="formright">
                            Quer ficar por dentro das últimas novidades? Receber notícias fresquinhas em seu e-mail? Preencha aê!!<p/>

                            <?php

                                echo $this->Form->create($lead); //POST, ['url' => '/articles/lead']
                                echo $this->Form->input('nome');
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
          <footer>
              <div class="description">
          <div><h1 class="name"><h2>Sobre n�s</h2></div>
          <div><p>Aqui vai ter as informações mais extensas sobre o que foi escrito acima, é onde a âncora do saiba mais acima vai levar.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, quis ab deserunt! Obcaecati cum accusantium maxime at expedita, sit tempora quas error enim maiores aliquam veritatis recusandae ex, qui eos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio soluta a consequuntur ratione numquam explicabo architecto reiciendis omnis praesentium quaerat nostrum deserunt magni et placeat at, cum impedit, laboriosam animi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et commodi laborum voluptate ipsum consequatur quod velit, dolorum, consequuntur eum laudantium, ea enim porro error nemo quae expedita veniam, perspiciatis. Magni?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum, consequatur quas atque architecto commodi eaque magni saepe at doloribus ipsum, alias facilis. Quod totam animi deserunt, aliquam, vel itaque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis a, voluptatibus obcaecati, nesciunt autem nulla aliquid nemo numquam eligendi debitis rem perspiciatis excepturi illum maiores eveniet, quia tempora quaerat. Maiores. <p/></div>
          </div>

                  <div class="description">
          <div><h1 class="name"><h2>Relatos</h2></div>
          <div><p>Aqui vai ter as informações mais extensas sobre o que foi escrito acima, é onde a âncora do saiba mais acima vai levar.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, quis ab deserunt! Obcaecati cum accusantium maxime at expedita, sit tempora quas error enim maiores aliquam veritatis recusandae ex, qui eos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio soluta a consequuntur ratione numquam explicabo architecto reiciendis omnis praesentium quaerat nostrum deserunt magni et placeat at, cum impedit, laboriosam animi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et commodi laborum voluptate ipsum consequatur quod velit, dolorum, consequuntur eum laudantium, ea enim porro error nemo quae expedita veniam, perspiciatis. Magni?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum, consequatur quas atque architecto commodi eaque magni saepe at doloribus ipsum, alias facilis. Quod totam animi deserunt, aliquam, vel itaque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis a, voluptatibus obcaecati, nesciunt autem nulla aliquid nemo numquam eligendi debitis rem perspiciatis excepturi illum maiores eveniet, quia tempora quaerat. Maiores. <p/></div>
          </div>
        </footer>
