<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Webclients Controller
 *
 * @property \App\Model\Table\WebclientsTable $Webclients
 *
 * @method \App\Model\Entity\Webclient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WebclientsController extends AppController
{
	
	public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $webclients = $this->paginate($this->Webclients);

        $this->set(compact('webclients'));
		$this->set('_serialize', 'webclients');
    }
	
	public function list()
    {
        $webclients = $this->paginate($this->Webclients);
		
		$result = true;
		$this->set([
            'webclients' => $webclients,
            '_serialize' => ['webclients']
        ]);

        
        $this->RequestHandler->renderAs($this, 'json');
    }

    /**
     * View method
     *
     * @param string|null $id Webclient id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $webclient = $this->Webclients->get($id, [
            'contain' => [],
        ]);

        $this->set('webclient', $webclient);
		$this->RequestHandler->renderAs($this, 'json');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $webclient = $this->Webclients->newEntity();
        if ($this->request->is('post')) {
            $webclient = $this->Webclients->patchEntity($webclient, $this->request->getData());
            if ($this->Webclients->save($webclient)) {
                $this->Flash->success(__('The webclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The webclient could not be saved. Please, try again.'));
        }
        $this->set(compact('webclient'));
    }
	
	public function api($endpoint, $p256dh, $auth)
    {
        $webclient = $this->Webclients->newEntity();
			$dados = [
				'endpoint' => $endpoint,
				'p256dh' => $p256dh,
				'auth' => $auth
			];
            $webclient = $this->Webclients->patchEntity($webclient, $dados);
            if ($this->Webclients->save($webclient)) {
                //return true;
            }
		
		$result = true;
		$this->set([
            'result' => $result,
            '_serialize' => ['result']
        ]);

        
        $this->RequestHandler->renderAs($this, 'json');
    }

    /**
     * Edit method
     *
     * @param string|null $id Webclient id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $webclient = $this->Webclients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $webclient = $this->Webclients->patchEntity($webclient, $this->request->getData());
            if ($this->Webclients->save($webclient)) {
                $this->Flash->success(__('The webclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The webclient could not be saved. Please, try again.'));
        }
        $this->set(compact('webclient'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Webclient id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $webclient = $this->Webclients->get($id);
        if ($this->Webclients->delete($webclient)) {
            $this->Flash->success(__('The webclient has been deleted.'));
        } else {
            $this->Flash->error(__('The webclient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
