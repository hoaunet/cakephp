<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Articles Controller
 *
 *
 * @method \App\Model\Entity\Article[] paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{   
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
		$this->loadComponent('Auth');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $articles = $this->paginate($this->Articles);

        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);
    }
	/*public function isAuthorized($user)
	{
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
*/    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('article', $article);
        $this->set('_serialize', ['article']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				if (!empty($this->request->data['upload']['name'])) {					
					$file = $this->request->data['upload']; //put the data into a var for easy use				
					$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
					$arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions
					$setNewFileName = time() . "_" . rand(000000, 999999);
				
					//only process if the extension is valid
					if (in_array($ext, $arr_ext)) {
						//do the actual uploading of the file. First arg is the tmp name, second arg is 
						//where we are putting it
						move_uploaded_file($file['tmp_name'], WWW_ROOT . '/img/news/' . $setNewFileName . '.' . $ext);
				
						//prepare the filename for database entry 
						$this->request->data['articles_image'] = 'news/'.$setNewFileName . '.' . $ext;
					}
				}
			}
            $article = $this->Articles->patchEntity($article, $this->request->getData());
			$article->user_id = $this->Auth->user('id');
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
		$this->set('article', $article);
        //$this->set(compact('article'));
        //$this->set('_serialize', ['article']);
		$categories = $this->Articles->Categories->find('treeList');
		$this->set(compact('categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
			if (!empty($this->request->data)) {
				if (!empty($this->request->data['upload']['name'])) {
					if (is_dir(WWW_ROOT . 'img/news/')) {					
						$file = $this->request->data['upload']; //put the data into a var for easy use						
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						$arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions
						$setNewFileName = time() . "_" . rand(000000, 999999);
						
						//only process if the extension is valid
						if (in_array($ext, $arr_ext)) {
							chmod(WWW_ROOT . 'img/news/', 755);							
							move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/news/' . $setNewFileName . '.' . $ext);							
							chmod(WWW_ROOT . 'img/news/', 600); 
							$this->request->data['articles_image'] = 'news/'.$setNewFileName . '.' . $ext;
						}else $this->Flash->error(__('File hợp lẽ jpg, jpeg, gif, png'));
						
					}else $this->Flash->error(__('Thư mục chưa tồn tại.'));
				}
			}
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $this->set('article', $article);
        //$this->set(compact('article'));
        //$this->set('_serialize', ['article']);
		$categories = $this->Articles->Categories->find('treeList');
		$this->set(compact('categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
