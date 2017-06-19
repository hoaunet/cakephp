<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Userinfos Controller
 *
 * @property \App\Model\Table\UserinfosTable $Userinfos
 *
 * @method \App\Model\Entity\Userinfo[] paginate($object = null, array $settings = [])
 */
class UserinfosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Provinces']
        ];
        $userinfos = $this->paginate($this->Userinfos);

        $this->set(compact('userinfos'));
        $this->set('_serialize', ['userinfos']);
    }

    /**
     * View method
     *
     * @param string|null $id Userinfo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userinfo = $this->Userinfos->get($id, [
            'contain' => ['Users', 'Provinces']
        ]);

        $this->set('userinfo', $userinfo);
        $this->set('_serialize', ['userinfo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userinfo = $this->Userinfos->newEntity();
        if ($this->request->is('post')) {
            $userinfo = $this->Userinfos->patchEntity($userinfo, $this->request->getData());
            if ($this->Userinfos->save($userinfo)) {
                $this->Flash->success(__('The userinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userinfo could not be saved. Please, try again.'));
        }
        $users = $this->Userinfos->Users->find('list', ['limit' => 200]);
        $provinces = $this->Userinfos->Provinces->find('list', ['limit' => 200]);
        $this->set(compact('userinfo', 'users', 'provinces'));
        $this->set('_serialize', ['userinfo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Userinfo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userinfo = $this->Userinfos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userinfo = $this->Userinfos->patchEntity($userinfo, $this->request->getData());
            if ($this->Userinfos->save($userinfo)) {
                $this->Flash->success(__('The userinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userinfo could not be saved. Please, try again.'));
        }
        $users = $this->Userinfos->Users->find('list', ['limit' => 200]);
        $provinces = $this->Userinfos->Provinces->find('list', ['limit' => 200]);
        $this->set(compact('userinfo', 'users', 'provinces'));
        $this->set('_serialize', ['userinfo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Userinfo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userinfo = $this->Userinfos->get($id);
        if ($this->Userinfos->delete($userinfo)) {
            $this->Flash->success(__('The userinfo has been deleted.'));
        } else {
            $this->Flash->error(__('The userinfo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
