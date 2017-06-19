<?php
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
	
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
	 
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
		/*$this->loadComponent('Auth', [
            'authorize' => 'Controller',
            'loginAction' => ['controller' => 'Users', 'action' => 'login']
        ]);
        $this->loadComponent('Cookie', ['expires' => '1 day']);//https://book.cakephp.org/3.0/en/controllers/components.html
         */
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }
	
    public function isAuthorized($user)
	{
    	// Admin can access every action
    	if (isset($user['role']) && $user['role'] === 'admin') {
        	return true;
    	}
    	return false;		
	}
 /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    { 
	    //$this->Auth->allow(['index', 'view', 'display','add']);
    }
	public function beforefilter(Event $event)
	{
		//$this->Auth->config('authorize', ['controller']);
		//$this->Auth->config('loginAction', ['controller' => 'Users', 'action' => 'login']);
	
		//$this->Cookie->config('name', 'CookieMonster');
		/*if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }*/
		//$this->Auth->allow(['index', 'view', 'display','add']);
	}
}
