<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Transactions Controller
 *
 * @property \App\Model\Table\TransactionsTable $Transactions
 *
 * @method \App\Model\Entity\Transaction[] paginate($object = null, array $settings = [])
 */
class TransactionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Btsubscriptions', 'Plans', 'Invoices', 'Companies', 'Users']
        ];
        $transactions = $this->paginate($this->Transactions);

        $this->set(compact('transactions'));
        $this->set('_serialize', ['transactions']);
    }

    /**
     * View method
     *
     * @param string|null $id Transaction id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transaction = $this->Transactions->get($id, [
            'contain' => ['Btsubscriptions', 'Plans', 'Invoices', 'Companies', 'Users', 'Transactions']
        ]);

        $this->set('transaction', $transaction);
        $this->set('_serialize', ['transaction']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transaction = $this->Transactions->newEntity();
        if ($this->request->is('post')) {
            $transaction = $this->Transactions->patchEntity($transaction, $this->request->getData());
            if ($this->Transactions->save($transaction)) {
                $this->Flash->success(__('The transaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transaction could not be saved. Please, try again.'));
        }
        $btsubscriptions = $this->Transactions->Btsubscriptions->find('list', ['limit' => 200]);
        $plans = $this->Transactions->Plans->find('list', ['limit' => 200]);
        $invoices = $this->Transactions->Invoices->find('list', ['limit' => 200]);
        $companies = $this->Transactions->Companies->find('list', ['limit' => 200]);
        $users = $this->Transactions->Users->find('list', ['limit' => 200]);
        $this->set(compact('transaction', 'btsubscriptions', 'plans', 'invoices', 'companies', 'users'));
        $this->set('_serialize', ['transaction']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transaction id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transaction = $this->Transactions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transaction = $this->Transactions->patchEntity($transaction, $this->request->getData());
            if ($this->Transactions->save($transaction)) {
                $this->Flash->success(__('The transaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transaction could not be saved. Please, try again.'));
        }
        $btsubscriptions = $this->Transactions->Btsubscriptions->find('list', ['limit' => 200]);
        $plans = $this->Transactions->Plans->find('list', ['limit' => 200]);
        $invoices = $this->Transactions->Invoices->find('list', ['limit' => 200]);
        $companies = $this->Transactions->Companies->find('list', ['limit' => 200]);
        $users = $this->Transactions->Users->find('list', ['limit' => 200]);
        $this->set(compact('transaction', 'btsubscriptions', 'plans', 'invoices', 'companies', 'users'));
        $this->set('_serialize', ['transaction']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transaction id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transaction = $this->Transactions->get($id);
        if ($this->Transactions->delete($transaction)) {
            $this->Flash->success(__('The transaction has been deleted.'));
        } else {
            $this->Flash->error(__('The transaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
