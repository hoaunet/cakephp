<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Resumes Controller
 *
 * @property \App\Model\Table\ResumesTable $Resumes
 *
 * @method \App\Model\Entity\Resume[] paginate($object = null, array $settings = [])
 */
class ResumesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Careers', 'Degrees', 'Levels', 'Salaries', 'Schools']
        ];
        $resumes = $this->paginate($this->Resumes);

        $this->set(compact('resumes'));
        $this->set('_serialize', ['resumes']);
    }

    /**
     * View method
     *
     * @param string|null $id Resume id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $resume = $this->Resumes->get($id, [
            'contain' => ['Users', 'Careers', 'Degrees', 'Levels', 'Salaries', 'Schools']
        ]);

        $this->set('resume', $resume);
        $this->set('_serialize', ['resume']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $resume = $this->Resumes->newEntity();
        if ($this->request->is('post')) {
            $resume = $this->Resumes->patchEntity($resume, $this->request->getData());
            if ($this->Resumes->save($resume)) {
                $this->Flash->success(__('The resume has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resume could not be saved. Please, try again.'));
        }
        $users = $this->Resumes->Users->find('list', ['limit' => 200]);
        $careers = $this->Resumes->Careers->find('list', ['limit' => 200]);
        $degrees = $this->Resumes->Degrees->find('list', ['limit' => 200]);
        $levels = $this->Resumes->Levels->find('list', ['limit' => 200]);
        $salaries = $this->Resumes->Salaries->find('list', ['limit' => 200]);
        $schools = $this->Resumes->Schools->find('list', ['limit' => 200]);
        $this->set(compact('resume', 'users', 'careers', 'degrees', 'levels', 'salaries', 'schools'));
        $this->set('_serialize', ['resume']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Resume id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $resume = $this->Resumes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $resume = $this->Resumes->patchEntity($resume, $this->request->getData());
            if ($this->Resumes->save($resume)) {
                $this->Flash->success(__('The resume has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resume could not be saved. Please, try again.'));
        }
        $users = $this->Resumes->Users->find('list', ['limit' => 200]);
        $careers = $this->Resumes->Careers->find('list', ['limit' => 200]);
        $degrees = $this->Resumes->Degrees->find('list', ['limit' => 200]);
        $levels = $this->Resumes->Levels->find('list', ['limit' => 200]);
        $salaries = $this->Resumes->Salaries->find('list', ['limit' => 200]);
        $schools = $this->Resumes->Schools->find('list', ['limit' => 200]);
        $this->set(compact('resume', 'users', 'careers', 'degrees', 'levels', 'salaries', 'schools'));
        $this->set('_serialize', ['resume']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Resume id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resume = $this->Resumes->get($id);
        if ($this->Resumes->delete($resume)) {
            $this->Flash->success(__('The resume has been deleted.'));
        } else {
            $this->Flash->error(__('The resume could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
