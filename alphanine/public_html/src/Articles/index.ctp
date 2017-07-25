<title>Nine</title>
<!-- File: src/Template/Articles/index.ctp -->

</div>
    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->
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

<div><h1 class="name">Descrição</h1></div>
<div><p>Aqui vai ter as informações mais extensas sobre o que foi escrito acima, é onde a âncora do saiba mais acima vai levar.<p/></div>
