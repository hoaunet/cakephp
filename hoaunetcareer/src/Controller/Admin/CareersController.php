<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Careers Controller
 *
 * @property \App\Model\Table\CareersTable $Careers
 *
 * @method \App\Model\Entity\Career[] paginate($object = null, array $settings = [])
 */
class CareersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentCareers', 'ChildCareers']
        ];
        $careers = $this->paginate($this->Careers);

        $this->set(compact('careers'));
        $this->set('_serialize', ['careers']);
    }

    /**
     * View method
     *
     * @param string|null $id Career id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $career = $this->Careers->get($id, [
            'contain' => ['ParentCareers', 'ChildCareers']
        ]);

        $this->set('career', $career);
        $this->set('_serialize', ['career']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $career = $this->Careers->newEntity();
        if ($this->request->is('post')) {
            $career = $this->Careers->patchEntity($career, $this->request->getData());
            if ($this->Careers->save($career)) {
                $this->Flash->success(__('The career has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The career could not be saved. Please, try again.'));
        }
        $parentCareers = $this->Careers->ParentCareers->find('list', ['keyField' => 'id','valueField' => 'career_name']);
		$this->set(compact('career', 'parentCareers'));
        $this->set('_serialize', ['career']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Career id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $career = $this->Careers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $career = $this->Careers->patchEntity($career, $this->request->getData());
            if ($this->Careers->save($career)) {
                $this->Flash->success(__('The career has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The career could not be saved. Please, try again.'));
        }
        $parentCareers = $this->Careers->ParentCareers->find('list', ['limit' => 200]);
        $this->set(compact('career', 'parentCareers'));
        $this->set('_serialize', ['career']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Career id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $career = $this->Careers->get($id);
        if ($this->Careers->delete($career)) {
            $this->Flash->success(__('The career has been deleted.'));
        } else {
            $this->Flash->error(__('The career could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}