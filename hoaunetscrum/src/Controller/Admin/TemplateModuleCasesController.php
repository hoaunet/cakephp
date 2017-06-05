<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TemplateModuleCases Controller
 *
 * @property \App\Model\Table\TemplateModuleCasesTable $TemplateModuleCases
 *
 * @method \App\Model\Entity\TemplateModuleCase[] paginate($object = null, array $settings = [])
 */
class TemplateModuleCasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Companies', 'TemplateModules', 'Projects']
        ];
        $templateModuleCases = $this->paginate($this->TemplateModuleCases);

        $this->set(compact('templateModuleCases'));
        $this->set('_serialize', ['templateModuleCases']);
    }

    /**
     * View method
     *
     * @param string|null $id Template Module Case id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $templateModuleCase = $this->TemplateModuleCases->get($id, [
            'contain' => ['Users', 'Companies', 'TemplateModules', 'Projects']
        ]);

        $this->set('templateModuleCase', $templateModuleCase);
        $this->set('_serialize', ['templateModuleCase']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $templateModuleCase = $this->TemplateModuleCases->newEntity();
        if ($this->request->is('post')) {
            $templateModuleCase = $this->TemplateModuleCases->patchEntity($templateModuleCase, $this->request->getData());
            if ($this->TemplateModuleCases->save($templateModuleCase)) {
                $this->Flash->success(__('The template module case has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The template module case could not be saved. Please, try again.'));
        }
        $users = $this->TemplateModuleCases->Users->find('list', ['limit' => 200]);
        $companies = $this->TemplateModuleCases->Companies->find('list', ['limit' => 200]);
        $templateModules = $this->TemplateModuleCases->TemplateModules->find('list', ['limit' => 200]);
        $projects = $this->TemplateModuleCases->Projects->find('list', ['limit' => 200]);
        $this->set(compact('templateModuleCase', 'users', 'companies', 'templateModules', 'projects'));
        $this->set('_serialize', ['templateModuleCase']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Template Module Case id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $templateModuleCase = $this->TemplateModuleCases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $templateModuleCase = $this->TemplateModuleCases->patchEntity($templateModuleCase, $this->request->getData());
            if ($this->TemplateModuleCases->save($templateModuleCase)) {
                $this->Flash->success(__('The template module case has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The template module case could not be saved. Please, try again.'));
        }
        $users = $this->TemplateModuleCases->Users->find('list', ['limit' => 200]);
        $companies = $this->TemplateModuleCases->Companies->find('list', ['limit' => 200]);
        $templateModules = $this->TemplateModuleCases->TemplateModules->find('list', ['limit' => 200]);
        $projects = $this->TemplateModuleCases->Projects->find('list', ['limit' => 200]);
        $this->set(compact('templateModuleCase', 'users', 'companies', 'templateModules', 'projects'));
        $this->set('_serialize', ['templateModuleCase']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Template Module Case id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $templateModuleCase = $this->TemplateModuleCases->get($id);
        if ($this->TemplateModuleCases->delete($templateModuleCase)) {
            $this->Flash->success(__('The template module case has been deleted.'));
        } else {
            $this->Flash->error(__('The template module case could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
