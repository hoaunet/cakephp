<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Uniqs', 'Btprofiles', 'Timezones']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Uniqs', 'Btprofiles', 'Timezones', 'UserSubscriptions', 'Archives', 'CaseActions', 'CaseActivities', 'CaseFiles', 'CaseFilters', 'CaseRecents', 'CaseSettings', 'CaseTemplates', 'CaseUserEmails', 'CaseUserViews', 'CompanyUsers', 'CustomFilters', 'DailyUpdates', 'DailyupdateNotifications', 'DefaultProjectTemplateCases', 'DefaultProjectTemplates', 'EasycaseMilestones', 'Easycases', 'EmailReminders', 'LogActivities', 'Milestones', 'OsSessionLogs', 'ProjectTemplateCases', 'ProjectTemplates', 'ProjectUsers', 'Projects', 'SaveReports', 'TemplateModuleCases', 'Transactions', 'UserInfos', 'UserInvitations', 'UserLogins', 'UserNotifications']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $uniqs = $this->Users->Uniqs->find('list', ['limit' => 200]);
        $btprofiles = $this->Users->Btprofiles->find('list', ['limit' => 200]);
        $timezones = $this->Users->Timezones->find('list', ['limit' => 200]);
        $this->set(compact('user', 'uniqs', 'btprofiles', 'timezones'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $uniqs = $this->Users->Uniqs->find('list', ['limit' => 200]);
        $btprofiles = $this->Users->Btprofiles->find('list', ['limit' => 200]);
        $timezones = $this->Users->Timezones->find('list', ['limit' => 200]);
        $this->set(compact('user', 'uniqs', 'btprofiles', 'timezones'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
