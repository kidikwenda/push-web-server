<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mobileclients Controller
 *
 * @property \App\Model\Table\MobileclientsTable $Mobileclients
 *
 * @method \App\Model\Entity\Mobileclient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MobileclientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $mobileclients = $this->paginate($this->Mobileclients);

        $this->set(compact('mobileclients'));
    }

    /**
     * View method
     *
     * @param string|null $id Mobileclient id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mobileclient = $this->Mobileclients->get($id, [
            'contain' => [],
        ]);

        $this->set('mobileclient', $mobileclient);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mobileclient = $this->Mobileclients->newEntity();
        if ($this->request->is('post')) {
            $mobileclient = $this->Mobileclients->patchEntity($mobileclient, $this->request->getData());
            if ($this->Mobileclients->save($mobileclient)) {
                $this->Flash->success(__('The mobileclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mobileclient could not be saved. Please, try again.'));
        }
        $this->set(compact('mobileclient'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mobileclient id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mobileclient = $this->Mobileclients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mobileclient = $this->Mobileclients->patchEntity($mobileclient, $this->request->getData());
            if ($this->Mobileclients->save($mobileclient)) {
                $this->Flash->success(__('The mobileclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mobileclient could not be saved. Please, try again.'));
        }
        $this->set(compact('mobileclient'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mobileclient id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mobileclient = $this->Mobileclients->get($id);
        if ($this->Mobileclients->delete($mobileclient)) {
            $this->Flash->success(__('The mobileclient has been deleted.'));
        } else {
            $this->Flash->error(__('The mobileclient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
