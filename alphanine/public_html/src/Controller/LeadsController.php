<?php

// src/Controller/LeadsController.php

namespace App\Controller;

class LeadsController extends AppController
{

	public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }

public function index(){
	$title = 'Welcome!';
	$this->set(compact('title'));

	ini_set( 'date.timezone', 'America/Sao_Paulo' );
  $lead = $this->Leads->newEntity();
  if ($this->request->is('post')) {
		$dados = $this->request->getData();
		$dados['datahora'] = date('Y-m-d H:i:s');
    $lead = $this->Leads->patchEntity($lead, $dados);
    if ($this->Leads->save($lead)) {
      $this->Flash->success(__('Salvo com sucesso'));
      return $this->redirect(['action' => 'index']);
    }
  $this->Flash->error(__('Erro ao salvar'));
  }
  $this->set('lead', $lead);
}

function isNomeCompleto($nomeCompleto) {
	$nomeCompleto = trim($nomeCompleto);
	$arrNome = explode(" ", $nomeCompleto);
	if(count($arrNome) > 1)    return true;
	return false;
}


public function contando(){
	   $this->set('leads', $this->Leads->find('all'));
}


}
