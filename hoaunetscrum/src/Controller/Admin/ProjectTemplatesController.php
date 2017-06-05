<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProjectTemplates Controller
 *
 * @property \App\Model\Table\ProjectTemplatesTable $ProjectTemplates
 *
 * @method \App\Model\Entity\ProjectTemplate[] paginate($object = null, array $settings = [])
 */
class ProjectTemplatesController extends AppController
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
        $projectTemplates = $this->paginate($this->ProjectTemplates);

        $this->set(compact('projectTemplates'));
        $this->set('_serialize', ['projectTemplates']);
    }

    /**
     * View method
     *
     * @param string|null $id Project Template id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projectTemplate = $this->ProjectTemplates->get($id, [
            'contain' => ['Users', 'Companies']
        ]);

        $this->set('projectTemplate', $projectTemplate);
        $this->set('_serialize', ['projectTemplate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projectTemplate = $this->ProjectTemplates->newEntity();
        if ($this->request->is('post')) {
            $projectTemplate = $this->ProjectTemplates->patchEntity($projectTemplate, $this->request->getData());
            if ($this->ProjectTemplates->save($projectTemplate)) {
                $this->Flash->success(__('The project template has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project template could not be saved. Please, try again.'));
        }
        $users = $this->ProjectTemplates->Users->find('list', ['limit' => 200]);
        $companies = $this->ProjectTemplates->Companies->find('list', ['limit' => 200]);
        $this->set(compact('projectTemplate', 'users', 'companies'));
        $this->set('_serialize', ['projectTemplate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Project Template id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projectTemplate = $this->ProjectTemplates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projectTemplate = $this->ProjectTemplates->patchEntity($projectTemplate, $this->request->getData());
            if ($this->ProjectTemplates->save($projectTemplate)) {
                $this->Flash->success(__('The project template has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project template could not be saved. Please, try again.'));
        }
        $users = $this->ProjectTemplates->Users->find('list', ['limit' => 200]);
        $companies = $this->ProjectTemplates->Companies->find('list', ['limit' => 200]);
        $this->set(compact('projectTemplate', 'users', 'companies'));
        $this->set('_serialize', ['projectTemplate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Project Template id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectTemplate = $this->ProjectTemplates->get($id);
        if ($this->ProjectTemplates->delete($projectTemplate)) {
            $this->Flash->success(__('The project template has been deleted.'));
        } else {
            $this->Flash->error(__('The project template could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
