<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Companyusers Controller
 *
 * @property \App\Model\Table\CompanyusersTable $Companyusers
 *
 * @method \App\Model\Entity\Companyuser[] paginate($object = null, array $settings = [])
 */
class CompanyusersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies', 'Users']
        ];
        $companyusers = $this->paginate($this->Companyusers);

        $this->set(compact('companyusers'));
        $this->set('_serialize', ['companyusers']);
    }

    /**
     * View method
     *
     * @param string|null $id Companyuser id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companyuser = $this->Companyusers->get($id, [
            'contain' => ['Companies', 'CompanyUniqs', 'Users']
        ]);

        $this->set('companyuser', $companyuser);
        $this->set('_serialize', ['companyuser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companyuser = $this->Companyusers->newEntity();
        if ($this->request->is('post')) {
            $companyuser = $this->Companyusers->patchEntity($companyuser, $this->request->getData());
            if ($this->Companyusers->save($companyuser)) {
                $this->Flash->success(__('The companyuser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The companyuser could not be saved. Please, try again.'));
        }
        $companies = $this->Companyusers->Companies->find('list', ['limit' => 200]);
        //$companyUniqs = $this->Companyusers->CompanyUniqs->find('list', ['limit' => 200]);
        $users = $this->Companyusers->Users->find('list', ['limit' => 200]);
		$province = TableRegistry::get('provinces');
		$provinces= $province->find('list',['keyField' => 'id','valueField' => 'province_name'])->order(['province_name' => 'ASC']);
		$career   = TableRegistry::get('careers');
		$careers  = $career->find('list',['keyField' => 'id','valueField' => 'career_name'])->order(['career_name' => 'ASC']);
		$salary   = TableRegistry::get('salaries');
		$salaries = $salary->find('list',['keyField' => 'id','valueField' => 'name'])->order(['id' => 'ASC']);
		$language   = TableRegistry::get('languages');
		$languages = $language->find('list',['keyField' => 'id','valueField' => 'name'])->order(['id' => 'ASC']);
		$this->set(compact('careers', 'provinces','salaries','languages','companyuser', 'companies',  'users'));        
        $this->set('_serialize', ['companyuser']);
    }

    
}
