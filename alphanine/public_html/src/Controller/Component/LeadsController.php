</<?php

namespace App\Controller

class LeadsController extends AppController {


  public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }


  public function add()
    {
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


 ?>
