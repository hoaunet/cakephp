<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Companies Controller
 *
 * @property \App\Model\Table\CompaniesTable $Companies
 *
 * @method \App\Model\Entity\Company[] paginate($object = null, array $settings = [])
 */
class CompaniesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subscriptions']
        ];
        $companies = $this->paginate($this->Companies);

        $this->set(compact('companies'));
        $this->set('_serialize', ['companies']);
    }

    /**
     * View method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $company = $this->Companies->get($id, [
            'contain' => ['Companyusers']
        ]);

        $this->set('company', $company);
        $this->set('_serialize', ['company']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $company = $this->Companies->newEntity();
        if ($this->request->is('post')) {
            $company = $this->Companies->patchEntity($company, $this->request->getData(),[
							'associated' => ['Companyusers','Companyusers.Users']
						]);
            if ($this->Companies->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company could not be saved. Please, try again.'));
        }
		$province = TableRegistry::get('provinces');
		$provinces= $province->find('list',['keyField' => 'id','valueField' => 'province_name'])->order(['province_name' => 'ASC']);
		$career   = TableRegistry::get('careers');
		$careers  = $career->find('list',['keyField' => 'id','valueField' => 'career_name'])->order(['career_name' => 'ASC']);
		$salary   = TableRegistry::get('salaries');
		$salaries = $salary->find('list',['keyField' => 'id','valueField' => 'name'])->order(['id' => 'ASC']);
		$language   = TableRegistry::get('salaries');
		$languages = $language->find('list',['keyField' => 'id','valueField' => 'name'])->order(['id' => 'ASC']);
		$this->set(compact('careers', 'provinces','salaries','languages'));
        //$uniqs = $this->Companies->Uniqs->find('list', ['limit' => 200]);
        //$subscriptions = $this->Companies->Subscriptions->find('list', ['limit' => 200]);
        $this->set(compact('company'));
        $this->set('_serialize', ['company']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $company = $this->Companies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $company = $this->Companies->patchEntity($company, $this->request->getData());
            if ($this->Companies->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company could not be saved. Please, try again.'));
        }
        $uniqs = $this->Companies->Uniqs->find('list', ['limit' => 200]);
        $subscriptions = $this->Companies->Subscriptions->find('list', ['limit' => 200]);
        $this->set(compact('company', 'uniqs', 'subscriptions'));
        $this->set('_serialize', ['company']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $company = $this->Companies->get($id);
        if ($this->Companies->delete($company)) {
            $this->Flash->success(__('The company has been deleted.'));
        } else {
            $this->Flash->error(__('The company could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
