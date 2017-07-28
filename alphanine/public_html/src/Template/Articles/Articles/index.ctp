
       
       <div class="wrapper" class="wrappermainarticle" id="centeredarticle"> 
       
        <?= $this->assign('title',$title);?>



                <?php foreach ($articles as $article): ?>
                  <table class="articletitle">
                  <tr>
                      <td>
                        <?=$article->id ,' - ', $this->Html->link($article->title, ['action' => 'view', $article->id]) ?><br/>
                    </td>
                    <td>
                        <?= $article->created?>
                    </td>
                </tr>
             </table>
            <table class="articlebody">
                <tr>
                    <td>
                  <?= $preview = $article->body?>
                    <td>
                </tr>


                <?php endforeach; ?>
            </table>

                        <br>
</div>