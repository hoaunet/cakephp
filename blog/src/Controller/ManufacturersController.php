<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Manufacturers Controller
 *
 * @property \App\Model\Table\ManufacturersTable $Manufacturers
 *
 * @method \App\Model\Entity\Manufacturer[] paginate($object = null, array $settings = [])
 */
class ManufacturersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => []
        ];
        $manufacturers = $this->paginate($this->Manufacturers);       
        $this->set(compact('manufacturers'));
        $this->set('_serialize', ['manufacturers']);
    }
	public function view($id = null)
    {
		$manufacturers = $this->Manufacturers->get($id, [
            'contain' => ['Products']
        ]);
        //$manufacturers = $this->paginate($this->Manufacturers);       
        $this->set(compact('manufacturers'));
        $this->set('_serialize', ['manufacturers']);
	}
}
