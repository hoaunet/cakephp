<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DefaultProjectTemplateCases Controller
 *
 * @property \App\Model\Table\DefaultProjectTemplateCasesTable $DefaultProjectTemplateCases
 *
 * @method \App\Model\Entity\DefaultProjectTemplateCase[] paginate($object = null, array $settings = [])
 */
class DefaultProjectTemplateCasesController extends AppController
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
        $defaultProjectTemplateCases = $this->paginate($this->DefaultProjectTemplateCases);

        $this->set(compact('defaultProjectTemplateCases'));
        $this->set('_serialize', ['defaultProjectTemplateCases']);
    }

    /**
     * View method
     *
     * @param string|null $id Default Project Template Case id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $defaultProjectTemplateCase = $this->DefaultProjectTemplateCases->get($id, [
            'contain' => ['Users', 'Companies', 'Templates']
        ]);

        $this->set('defaultProjectTemplateCase', $defaultProjectTemplateCase);
        $this->set('_serialize', ['defaultProjectTemplateCase']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $defaultProjectTemplateCase = $this->DefaultProjectTemplateCases->newEntity();
        if ($this->request->is('post')) {
            $defaultProjectTemplateCase = $this->DefaultProjectTemplateCases->patchEntity($defaultProjectTemplateCase, $this->request->getData());
            if ($this->DefaultProjectTemplateCases->save($defaultProjectTemplateCase)) {
                $this->Flash->success(__('The default project template case has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The default project template case could not be saved. Please, try again.'));
        }
        $users = $this->DefaultProjectTemplateCases->Users->find('list', ['limit' => 200]);
        $companies = $this->DefaultProjectTemplateCases->Companies->find('list', ['limit' => 200]);
        $templates = $this->DefaultProjectTemplateCases->Templates->find('list', ['limit' => 200]);
        $this->set(compact('defaultProjectTemplateCase', 'users', 'companies', 'templates'));
        $this->set('_serialize', ['defaultProjectTemplateCase']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Default Project Template Case id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $defaultProjectTemplateCase = $this->DefaultProjectTemplateCases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $defaultProjectTemplateCase = $this->DefaultProjectTemplateCases->patchEntity($defaultProjectTemplateCase, $this->request->getData());
            if ($this->DefaultProjectTemplateCases->save($defaultProjectTemplateCase)) {
                $this->Flash->success(__('The default project template case has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The default project template case could not be saved. Please, try again.'));
        }
        $users = $this->DefaultProjectTemplateCases->Users->find('list', ['limit' => 200]);
        $companies = $this->DefaultProjectTemplateCases->Companies->find('list', ['limit' => 200]);
        $templates = $this->DefaultProjectTemplateCases->Templates->find('list', ['limit' => 200]);
        $this->set(compact('defaultProjectTemplateCase', 'users', 'companies', 'templates'));
        $this->set('_serialize', ['defaultProjectTemplateCase']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Default Project Template Case id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $defaultProjectTemplateCase = $this->DefaultProjectTemplateCases->get($id);
        if ($this->DefaultProjectTemplateCases->delete($defaultProjectTemplateCase)) {
            $this->Flash->success(__('The default project template case has been deleted.'));
        } else {
            $this->Flash->error(__('The default project template case could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
