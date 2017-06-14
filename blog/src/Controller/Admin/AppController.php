<?php
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
	 public $components = [
		'Cookie',
		'Auth' => [
			'authenticate' => [
				'Form',
				'Xety/Cake3CookieAuth.Cookie'
			]
		]
	
	];
    
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
            	'loginRedirect' => [
                	'controller' => 'Articles',
                	'action' => 'index'
            	],
            	'logoutRedirect' => [
                	'controller' => 'Users',
                	'action' => 'index'
            	]
				
        	]);
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
		//Automaticaly Login.
		if (!$this->Auth->user() && $this->Cookie->read('CookieAuth')) {
			$this->loadModel('Users');
	
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
	
				$user = $this->Users->newEntity($user);
				$user->isNew(false);
	
				//Last login date
				$user->last_login = new Time();
				//Last login IP
				$user->last_login_ip = $this->request->clientIp();
				//etc...
	
				$this->Users->save($user);
			} else {
				$this->Cookie->delete('CookieAuth');
			}
		}
		//$this->Auth->allow(['index', 'view', 'display','add']);
	}
}
