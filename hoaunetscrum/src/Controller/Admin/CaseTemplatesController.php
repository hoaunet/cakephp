<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CaseTemplates Controller
 *
 * @property \App\Model\Table\CaseTemplatesTable $CaseTemplates
 *
 * @method \App\Model\Entity\CaseTemplate[] paginate($object = null, array $settings = [])
 */
class CaseTemplatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Companies']
        ];
        $caseTemplates = $this->paginate($this->CaseTemplates);

        $this->set(compact('caseTemplates'));
        $this->set('_serialize', ['caseTemplates']);
    }

    /**
     * View method
     *
     * @param string|null $id Case Template id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caseTemplate = $this->CaseTemplates->get($id, [
            'contain' => ['Users', 'Companies']
        ]);

        $this->set('caseTemplate', $caseTemplate);
        $this->set('_serialize', ['caseTemplate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caseTemplate = $this->CaseTemplates->newEntity();
        if ($this->request->is('post')) {
            $caseTemplate = $this->CaseTemplates->patchEntity($caseTemplate, $this->request->getData());
            if ($this->CaseTemplates->save($caseTemplate)) {
                $this->Flash->success(__('The case template has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case template could not be saved. Please, try again.'));
        }
        $users = $this->CaseTemplates->Users->find('list', ['limit' => 200]);
        $companies = $this->CaseTemplates->Companies->find('list', ['limit' => 200]);
        $this->set(compact('caseTemplate', 'users', 'companies'));
        $this->set('_serialize', ['caseTemplate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Case Template id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caseTemplate = $this->CaseTemplates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caseTemplate = $this->CaseTemplates->patchEntity($caseTemplate, $this->request->getData());
            if ($this->CaseTemplates->save($caseTemplate)) {
                $this->Flash->success(__('The case template has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The case template could not be saved. Please, try again.'));
        }
        $users = $this->CaseTemplates->Users->find('list', ['limit' => 200]);
        $companies = $this->CaseTemplates->Companies->find('list', ['limit' => 200]);
        $this->set(compact('caseTemplate', 'users', 'companies'));
        $this->set('_serialize', ['caseTemplate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Case Template id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caseTemplate = $this->CaseTemplates->get($id);
        if ($this->CaseTemplates->delete($caseTemplate)) {
            $this->Flash->success(__('The case template has been deleted.'));
        } else {
            $this->Flash->error(__('The case template could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
