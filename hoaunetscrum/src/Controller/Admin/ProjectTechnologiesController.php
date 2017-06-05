<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProjectTechnologies Controller
 *
 * @property \App\Model\Table\ProjectTechnologiesTable $ProjectTechnologies
 *
 * @method \App\Model\Entity\ProjectTechnology[] paginate($object = null, array $settings = [])
 */
class ProjectTechnologiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects', 'Technologies']
        ];
        $projectTechnologies = $this->paginate($this->ProjectTechnologies);

        $this->set(compact('projectTechnologies'));
        $this->set('_serialize', ['projectTechnologies']);
    }

    /**
     * View method
     *
     * @param string|null $id Project Technology id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projectTechnology = $this->ProjectTechnologies->get($id, [
            'contain' => ['Projects', 'Technologies']
        ]);

        $this->set('projectTechnology', $projectTechnology);
        $this->set('_serialize', ['projectTechnology']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projectTechnology = $this->ProjectTechnologies->newEntity();
        if ($this->request->is('post')) {
            $projectTechnology = $this->ProjectTechnologies->patchEntity($projectTechnology, $this->request->getData());
            if ($this->ProjectTechnologies->save($projectTechnology)) {
                $this->Flash->success(__('The project technology has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project technology could not be saved. Please, try again.'));
        }
        $projects = $this->ProjectTechnologies->Projects->find('list', ['limit' => 200]);
        $technologies = $this->ProjectTechnologies->Technologies->find('list', ['limit' => 200]);
        $this->set(compact('projectTechnology', 'projects', 'technologies'));
        $this->set('_serialize', ['projectTechnology']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Project Technology id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projectTechnology = $this->ProjectTechnologies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projectTechnology = $this->ProjectTechnologies->patchEntity($projectTechnology, $this->request->getData());
            if ($this->ProjectTechnologies->save($projectTechnology)) {
                $this->Flash->success(__('The project technology has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project technology could not be saved. Please, try again.'));
        }
        $projects = $this->ProjectTechnologies->Projects->find('list', ['limit' => 200]);
        $technologies = $this->ProjectTechnologies->Technologies->find('list', ['limit' => 200]);
        $this->set(compact('projectTechnology', 'projects', 'technologies'));
        $this->set('_serialize', ['projectTechnology']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Project Technology id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectTechnology = $this->ProjectTechnologies->get($id);
        if ($this->ProjectTechnologies->delete($projectTechnology)) {
            $this->Flash->success(__('The project technology has been deleted.'));
        } else {
            $this->Flash->error(__('The project technology could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
