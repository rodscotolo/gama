<!-- <title>Nine</title>
<!-- File: src/Template/Articles/index.ctp -->
<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

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

                                // echo $this->Form->create($lead); //POST, ['url' => '/articles/lead']
                                // echo $this->Form->input('Nome');
                                // echo $this->Form->input('Email');
                                // echo $this->Form->button(__('Salvar'));
                                // echo $this->Form->end();
                            ?> -->
                        </div>

        </div>


        <?= $this->assign('title',$title);?>



        </div>


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

                        <br>
