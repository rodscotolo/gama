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
         $this->set('articles', $this->Articles->find('all'));
    }

    public function view($id = null)
    {
        $article = $this->Articles->get($id);
        $this->set(compact('article'));
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

		public function lead(){
			$lead = $this->Leads->newEntity();
			//$leads = $this->Lead->newEntity();
			if ($this->request->is('post')) {
				$lead = $this->Leads->patchEntity($lead, $this->request->getData());
				if ($this->Leads->save($lead)) {
					$this->Flash->success(__('Seu artigo foi salvo.'));
					return $this->redirect(['action' => 'index']);
				}
			$this->Flash->error(__('Não é possível adicionar o seu artigo.'));
			}
			$this->set('lead', $lead);
		}

}
