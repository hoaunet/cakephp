<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CaseFileDrives Controller
 *
 * @property \App\Model\Table\CaseFileDrivesTable $CaseFileDrives
 *
 * @method \App\Model\Entity\CaseFileDrive[] paginate($object = null, array $settings = [])
 */
class CaseFileDrivesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects', 'Easycases']
        ];
        $caseFileDrives = $this->paginate($this->CaseFileDrives);

        $this->set(compact('caseFileDrives'));
        $this->set('_serialize', ['caseFileDrives']);
    }

    /**
     * View method
     *
     * @param string|null $id Case File Drive id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caseFileDrive = $this->CaseFileDrives->get($id, [
            'contain' => ['Projects', 'Easycases']
        ]);

        $this->set('caseFileDrive', $caseFileDrive);
        $this->set('_serialize', ['caseFileDrive']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caseFileDrive = $this->CaseFileDrives->newEntity();
        if ($this->request->is('post')) {
            $caseFileDrive = $this->CaseFileDrives->patchEntity($caseFileDrive, $this->request->getData());
            if ($this->CaseFileDrives->save($caseFileDrive)) {
                $this->Flash->success(__('The case file drive has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case file drive could not be saved. Please, try again.'));
        }
        $projects = $this->CaseFileDrives->Projects->find('list', ['limit' => 200]);
        $easycases = $this->CaseFileDrives->Easycases->find('list', ['limit' => 200]);
        $this->set(compact('caseFileDrive', 'projects', 'easycases'));
        $this->set('_serialize', ['caseFileDrive']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Case File Drive id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caseFileDrive = $this->CaseFileDrives->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caseFileDrive = $this->CaseFileDrives->patchEntity($caseFileDrive, $this->request->getData());
            if ($this->CaseFileDrives->save($caseFileDrive)) {
                $this->Flash->success(__('The case file drive has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case file drive could not be saved. Please, try again.'));
        }
        $projects = $this->CaseFileDrives->Projects->find('list', ['limit' => 200]);
        $easycases = $this->CaseFileDrives->Easycases->find('list', ['limit' => 200]);
        $this->set(compact('caseFileDrive', 'projects', 'easycases'));
        $this->set('_serialize', ['caseFileDrive']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Case File Drive id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caseFileDrive = $this->CaseFileDrives->get($id);
        if ($this->CaseFileDrives->delete($caseFileDrive)) {
            $this->Flash->success(__('The case file drive has been deleted.'));
        } else {
            $this->Flash->error(__('The case file drive could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
