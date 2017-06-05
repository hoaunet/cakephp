<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DefaultTemplates Controller
 *
 * @property \App\Model\Table\DefaultTemplatesTable $DefaultTemplates
 *
 * @method \App\Model\Entity\DefaultTemplate[] paginate($object = null, array $settings = [])
 */
class DefaultTemplatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $defaultTemplates = $this->paginate($this->DefaultTemplates);

        $this->set(compact('defaultTemplates'));
        $this->set('_serialize', ['defaultTemplates']);
    }

    /**
     * View method
     *
     * @param string|null $id Default Template id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $defaultTemplate = $this->DefaultTemplates->get($id, [
            'contain' => []
        ]);

        $this->set('defaultTemplate', $defaultTemplate);
        $this->set('_serialize', ['defaultTemplate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $defaultTemplate = $this->DefaultTemplates->newEntity();
        if ($this->request->is('post')) {
            $defaultTemplate = $this->DefaultTemplates->patchEntity($defaultTemplate, $this->request->getData());
            if ($this->DefaultTemplates->save($defaultTemplate)) {
                $this->Flash->success(__('The default template has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The default template could not be saved. Please, try again.'));
        }
        $this->set(compact('defaultTemplate'));
        $this->set('_serialize', ['defaultTemplate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Default Template id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $defaultTemplate = $this->DefaultTemplates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $defaultTemplate = $this->DefaultTemplates->patchEntity($defaultTemplate, $this->request->getData());
            if ($this->DefaultTemplates->save($defaultTemplate)) {
                $this->Flash->success(__('The default template has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The default template could not be saved. Please, try again.'));
        }
        $this->set(compact('defaultTemplate'));
        $this->set('_serialize', ['defaultTemplate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Default Template id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $defaultTemplate = $this->DefaultTemplates->get($id);
        if ($this->DefaultTemplates->delete($defaultTemplate)) {
            $this->Flash->success(__('The default template has been deleted.'));
        } else {
            $this->Flash->error(__('The default template could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
