<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DefaultProjectTemplates Controller
 *
 * @property \App\Model\Table\DefaultProjectTemplatesTable $DefaultProjectTemplates
 *
 * @method \App\Model\Entity\DefaultProjectTemplate[] paginate($object = null, array $settings = [])
 */
class DefaultProjectTemplatesController extends AppController
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
        $defaultProjectTemplates = $this->paginate($this->DefaultProjectTemplates);

        $this->set(compact('defaultProjectTemplates'));
        $this->set('_serialize', ['defaultProjectTemplates']);
    }

    /**
     * View method
     *
     * @param string|null $id Default Project Template id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $defaultProjectTemplate = $this->DefaultProjectTemplates->get($id, [
            'contain' => ['Users', 'Companies']
        ]);

        $this->set('defaultProjectTemplate', $defaultProjectTemplate);
        $this->set('_serialize', ['defaultProjectTemplate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $defaultProjectTemplate = $this->DefaultProjectTemplates->newEntity();
        if ($this->request->is('post')) {
            $defaultProjectTemplate = $this->DefaultProjectTemplates->patchEntity($defaultProjectTemplate, $this->request->getData());
            if ($this->DefaultProjectTemplates->save($defaultProjectTemplate)) {
                $this->Flash->success(__('The default project template has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The default project template could not be saved. Please, try again.'));
        }
        $users = $this->DefaultProjectTemplates->Users->find('list', ['limit' => 200]);
        $companies = $this->DefaultProjectTemplates->Companies->find('list', ['limit' => 200]);
        $this->set(compact('defaultProjectTemplate', 'users', 'companies'));
        $this->set('_serialize', ['defaultProjectTemplate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Default Project Template id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $defaultProjectTemplate = $this->DefaultProjectTemplates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $defaultProjectTemplate = $this->DefaultProjectTemplates->patchEntity($defaultProjectTemplate, $this->request->getData());
            if ($this->DefaultProjectTemplates->save($defaultProjectTemplate)) {
                $this->Flash->success(__('The default project template has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The default project template could not be saved. Please, try again.'));
        }
        $users = $this->DefaultProjectTemplates->Users->find('list', ['limit' => 200]);
        $companies = $this->DefaultProjectTemplates->Companies->find('list', ['limit' => 200]);
        $this->set(compact('defaultProjectTemplate', 'users', 'companies'));
        $this->set('_serialize', ['defaultProjectTemplate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Default Project Template id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $defaultProjectTemplate = $this->DefaultProjectTemplates->get($id);
        if ($this->DefaultProjectTemplates->delete($defaultProjectTemplate)) {
            $this->Flash->success(__('The default project template has been deleted.'));
        } else {
            $this->Flash->error(__('The default project template could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
