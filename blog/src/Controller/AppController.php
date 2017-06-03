<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
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
            'loginRedirect' => [
                'controller' => 'Articles',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
            ]
        ]);*/

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }
    public function isAuthorized($user)
	{
    	/*// Admin can access every action
    	if (isset($user['role']) && $user['role'] === 'admin') {
        	return true;
    	}

    	// Default deny
    	return false;*/
		// All registered users can add articles
		if ($this->request->getParam('action') === 'add') {
			return true;
		}
	
		// The owner of an article can edit and delete it
		if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
			$articleId = (int)$this->request->getParam('pass.0');
			if ($this->Articles->isOwnedBy($articleId, $user['id'])) {
				return true;
			}
		}
	
		return parent::isAuthorized($user);
	}
 /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
		//$this->Auth->allow(['index', 'view', 'display']);
    }
}
