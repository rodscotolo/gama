<?php

// src/Controller/ArticlesController.php

namespace App\Controller;

class ArticlesController extends AppController
{

	public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }

	public function index()
    {
			$this->set('title_for_layout',$title);

         $this->set('articles', $this->Articles->find('all',
			 																						array(
																												'order' => 'article.id DESC',
																											)
			 																									));

    }

		public function view($id = null)
		    {
		        $article = $this->Articles->get($id);
		    }


    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Seu artigo foi salvo.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o seu artigo.'));
        }
        $this->set('article', $article);
    }

		// src/Controller/ArticlesController.php

		public function edit($id = null)
		{
		  $article = $this->Articles->get($id);
		  if ($this->request->is(['post', 'put'])) {
		      $this->Articles->patchEntity($article, $this->request->getData());
		      if ($this->Articles->save($article)) {
		          $this->Flash->success(__('Seu artigo foi atualizado.'));
		          return $this->redirect(['action' => 'index']);
		      }
		      $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
		  }

		  $this->set('article', $article);
		}
}
