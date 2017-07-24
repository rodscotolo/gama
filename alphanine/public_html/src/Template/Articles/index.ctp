<title>Nine</title>
<!-- File: src/Template/Articles/index.ctp -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<div class="wrapper">


            <div class="topcontent">
                <div class="saibaleft">
                  <div class="alpha-big-text"><h1 class="name">AlphaNine</h1></div>
                  <div class="alpha-text"><p>Com o objetivo de trazer conteúdos relevantes, queremos proporcionar uma experiencia empreendedora e divertida para você ser a sua própria melhor versão.<p/></div>
                  <button type="button">Saiba Mais!</button>
                </div>

                <div class="formright">
                  Quer ficar por dentro das últimas novidades? Receber notícias fresquinhas em seu e-mail? Preencha aê!!<p/>

                    <?php
                        echo $this->Form->create($lead); //POST, ['url' => '/articles/lead']
                        echo $this->Form->input('Nome');
                        echo $this->Form->input('Email');
                        echo $this->Form->button(__('Salvar'));
                        echo $this->Form->end();
                    ?>
                </div>
            </div>
</div>
<div>

          <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->
          <div>
          <?php foreach ($articles as $article): ?>
            <table>
            <tr>
                <td>
                  <?=$article->id ,' - ', $this->Html->link($article->title, ['action' => 'view', $article->id]) ?><br/>
              </td>
              <td>
                  <?= $article->created?>
              </td>
          </tr>
      </table>
          <table>
          <tr>
              <td>
            <?= $preview = $article->body?>
              <td>
          </tr>


          <?php endforeach; ?>
          </table>
            </div>
    <!-- ativar caso exista barra de descrição <div class="descbottom">
      <div><h1 class="name">Descrição</h1></div>
      <div><p>Aqui vai ter as informações mais extensas sobre o que foi escrito acima, é onde a âncora do saiba mais acima vai levar.<p/></div>
    </div> -->



</div>
