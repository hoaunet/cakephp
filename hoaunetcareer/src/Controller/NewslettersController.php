<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


/**
 * Newsletters Controller
 *
 * @property \App\Model\Table\NewslettersTable $Newsletters
 *
 * @method \App\Model\Entity\Newsletter[] paginate($object = null, array $settings = [])
 */
class NewslettersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Careers', 'Levels', 'Users']
        ];
        $newsletters = $this->paginate($this->Newsletters);

        $this->set(compact('newsletters'));
        $this->set('_serialize', ['newsletters']);
    }

    /**
     * View method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newsletter = $this->Newsletters->get($id, [
            'contain' => ['Careers', 'Levels', 'Users']
        ]);

        $this->set('newsletter', $newsletter);
        $this->set('_serialize', ['newsletter']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newsletter = $this->Newsletters->newEntity();
        if ($this->request->is('post')) {			 
            $newsletter = $this->Newsletters->patchEntity($newsletter, $this->request->getData());
			$user = TableRegistry::get('users');
			$query = $user->find()->select(['id'])->where(['email'=>$newsletter->email])->toArray();                  
			$newsletter->user_id = (is_array($query) && count($query) >0)?$query[0]->id:0;			
            if ($this->Newsletters->save($newsletter)) {
                $this->Flash->success(__('The newsletter has been saved.'));

                return $this->redirect(['controller'=>'Pages','action' => 'display']);
            }
            $this->Flash->error(__('The newsletter could not be saved. Please, try again.'));
        }
        $careers = $this->Newsletters->Careers->find('list',['keyField' => 'id','valueField' => 'career_name'])->order(['career_name' => 'ASC']);
        $levels = $this->Newsletters->Levels->find('list',['keyField' => 'id','valueField' => 'level_name'])->order(['level_name' => 'ASC']);
        
        $this->set(compact('newsletter', 'careers', 'levels'));
        $this->set('_serialize', ['newsletter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newsletter = $this->Newsletters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newsletter = $this->Newsletters->patchEntity($newsletter, $this->request->getData());
            if ($this->Newsletters->save($newsletter)) {
                $this->Flash->success(__('The newsletter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newsletter could not be saved. Please, try again.'));
        }
        $careers = $this->Newsletters->Careers->find('list', ['limit' => 200]);
        $levels = $this->Newsletters->Levels->find('list', ['limit' => 200]);
        $users = $this->Newsletters->Users->find('list', ['limit' => 200]);
        $this->set(compact('newsletter', 'careers', 'levels', 'users'));
        $this->set('_serialize', ['newsletter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newsletter = $this->Newsletters->get($id);
        if ($this->Newsletters->delete($newsletter)) {
            $this->Flash->success(__('The newsletter has been deleted.'));
        } else {
            $this->Flash->error(__('The newsletter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
