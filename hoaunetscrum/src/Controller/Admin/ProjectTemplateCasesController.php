<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProjectTemplateCases Controller
 *
 * @property \App\Model\Table\ProjectTemplateCasesTable $ProjectTemplateCases
 *
 * @method \App\Model\Entity\ProjectTemplateCase[] paginate($object = null, array $settings = [])
 */
class ProjectTemplateCasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Companies', 'Templates']
        ];
        $projectTemplateCases = $this->paginate($this->ProjectTemplateCases);

        $this->set(compact('projectTemplateCases'));
        $this->set('_serialize', ['projectTemplateCases']);
    }

    /**
     * View method
     *
     * @param string|null $id Project Template Case id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projectTemplateCase = $this->ProjectTemplateCases->get($id, [
            'contain' => ['Users', 'Companies', 'Templates']
        ]);

        $this->set('projectTemplateCase', $projectTemplateCase);
        $this->set('_serialize', ['projectTemplateCase']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projectTemplateCase = $this->ProjectTemplateCases->newEntity();
        if ($this->request->is('post')) {
            $projectTemplateCase = $this->ProjectTemplateCases->patchEntity($projectTemplateCase, $this->request->getData());
            if ($this->ProjectTemplateCases->save($projectTemplateCase)) {
                $this->Flash->success(__('The project template case has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project template case could not be saved. Please, try again.'));
        }
        $users = $this->ProjectTemplateCases->Users->find('list', ['limit' => 200]);
        $companies = $this->ProjectTemplateCases->Companies->find('list', ['limit' => 200]);
        $templates = $this->ProjectTemplateCases->Templates->find('list', ['limit' => 200]);
        $this->set(compact('projectTemplateCase', 'users', 'companies', 'templates'));
        $this->set('_serialize', ['projectTemplateCase']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Project Template Case id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projectTemplateCase = $this->ProjectTemplateCases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projectTemplateCase = $this->ProjectTemplateCases->patchEntity($projectTemplateCase, $this->request->getData());
            if ($this->ProjectTemplateCases->save($projectTemplateCase)) {
                $this->Flash->success(__('The project template case has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project template case could not be saved. Please, try again.'));
        }
        $users = $this->ProjectTemplateCases->Users->find('list', ['limit' => 200]);
        $companies = $this->ProjectTemplateCases->Companies->find('list', ['limit' => 200]);
        $templates = $this->ProjectTemplateCases->Templates->find('list', ['limit' => 200]);
        $this->set(compact('projectTemplateCase', 'users', 'companies', 'templates'));
        $this->set('_serialize', ['projectTemplateCase']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Project Template Case id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectTemplateCase = $this->ProjectTemplateCases->get($id);
        if ($this->ProjectTemplateCases->delete($projectTemplateCase)) {
            $this->Flash->success(__('The project template case has been deleted.'));
        } else {
            $this->Flash->error(__('The project template case could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
