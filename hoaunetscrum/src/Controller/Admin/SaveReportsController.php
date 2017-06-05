<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SaveReports Controller
 *
 * @property \App\Model\Table\SaveReportsTable $SaveReports
 *
 * @method \App\Model\Entity\SaveReport[] paginate($object = null, array $settings = [])
 */
class SaveReportsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $saveReports = $this->paginate($this->SaveReports);

        $this->set(compact('saveReports'));
        $this->set('_serialize', ['saveReports']);
    }

    /**
     * View method
     *
     * @param string|null $id Save Report id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saveReport = $this->SaveReports->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('saveReport', $saveReport);
        $this->set('_serialize', ['saveReport']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saveReport = $this->SaveReports->newEntity();
        if ($this->request->is('post')) {
            $saveReport = $this->SaveReports->patchEntity($saveReport, $this->request->getData());
            if ($this->SaveReports->save($saveReport)) {
                $this->Flash->success(__('The save report has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The save report could not be saved. Please, try again.'));
        }
        $users = $this->SaveReports->Users->find('list', ['limit' => 200]);
        $this->set(compact('saveReport', 'users'));
        $this->set('_serialize', ['saveReport']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Save Report id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saveReport = $this->SaveReports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saveReport = $this->SaveReports->patchEntity($saveReport, $this->request->getData());
            if ($this->SaveReports->save($saveReport)) {
                $this->Flash->success(__('The save report has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The save report could not be saved. Please, try again.'));
        }
        $users = $this->SaveReports->Users->find('list', ['limit' => 200]);
        $this->set(compact('saveReport', 'users'));
        $this->set('_serialize', ['saveReport']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Save Report id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saveReport = $this->SaveReports->get($id);
        if ($this->SaveReports->delete($saveReport)) {
            $this->Flash->success(__('The save report has been deleted.'));
        } else {
            $this->Flash->error(__('The save report could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
