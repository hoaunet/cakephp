<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MailTbls Controller
 *
 * @property \App\Model\Table\MailTblsTable $MailTbls
 *
 * @method \App\Model\Entity\MailTbl[] paginate($object = null, array $settings = [])
 */
class MailTblsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $mailTbls = $this->paginate($this->MailTbls);

        $this->set(compact('mailTbls'));
        $this->set('_serialize', ['mailTbls']);
    }

    /**
     * View method
     *
     * @param string|null $id Mail Tbl id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mailTbl = $this->MailTbls->get($id, [
            'contain' => []
        ]);

        $this->set('mailTbl', $mailTbl);
        $this->set('_serialize', ['mailTbl']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mailTbl = $this->MailTbls->newEntity();
        if ($this->request->is('post')) {
            $mailTbl = $this->MailTbls->patchEntity($mailTbl, $this->request->getData());
            if ($this->MailTbls->save($mailTbl)) {
                $this->Flash->success(__('The mail tbl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mail tbl could not be saved. Please, try again.'));
        }
        $this->set(compact('mailTbl'));
        $this->set('_serialize', ['mailTbl']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mail Tbl id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mailTbl = $this->MailTbls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mailTbl = $this->MailTbls->patchEntity($mailTbl, $this->request->getData());
            if ($this->MailTbls->save($mailTbl)) {
                $this->Flash->success(__('The mail tbl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mail tbl could not be saved. Please, try again.'));
        }
        $this->set(compact('mailTbl'));
        $this->set('_serialize', ['mailTbl']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mail Tbl id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mailTbl = $this->MailTbls->get($id);
        if ($this->MailTbls->delete($mailTbl)) {
            $this->Flash->success(__('The mail tbl has been deleted.'));
        } else {
            $this->Flash->error(__('The mail tbl could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
