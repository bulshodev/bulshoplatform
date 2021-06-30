<?php

App::uses('CasinoAppController', 'Casino.Controller');

class GameLogsController extends CasinoAppController
{
    /**
     * Controller name
     *
     * @var string
     */
    public $name = 'GameLogs';

    /**
     * An array containing the class names of models this controller uses.
     *
     * @var array A single name as a string or a list of names as an array.
     */
    public $uses = array('Casino.GameLog', 'User');

    public function admin_highlow($conditions = array(), $model = null)
    {
        $this->Paginator->settings  =   array($this->GameLog->name => array(
			'conditions'    =>  array(
                'GameLog.game' => 'High Low'
            ),
            'fields' => array(
                'GameLog.id',
				'GameLog.user_id',
				'User.username',
				'GameLog.message',
				'GameLog.game',
				'GameLog.created'
            ),
            'limit' => Configure::read('Settings.itemsPerPage')
        ));

        $data    =   $this->Paginator->paginate( $this->GameLog->name );
        $this->set('data', $data);
        $this->set('model', 'GameLog');
		$this->set('model2', 'User');
		$this->set('tabs', $this->GameLog->getTabs($this->request->params));
    }
	
	public function admin_blackjack($conditions = array(), $model = null)
    {
        $this->Paginator->settings  =   array($this->GameLog->name => array(
			'conditions'    =>  array(
                'GameLog.game' => 'BlackJack'
            ),
            'fields' => array(
                'GameLog.id',
				'GameLog.user_id',
				'User.username',
				'GameLog.message',
				'GameLog.game',
				'GameLog.created'
            ),
            'limit' => Configure::read('Settings.itemsPerPage')
        ));

        $data    =   $this->Paginator->paginate( $this->GameLog->name );
        $this->set('data', $data);
        $this->set('model', 'GameLog');
		$this->set('model2', 'User');
		$this->set('tabs', $this->GameLog->getTabs($this->request->params));
    }
	
	public function admin_roulette($conditions = array(), $model = null)
    {
        $this->Paginator->settings  =   array($this->GameLog->name => array(
			'conditions'    =>  array(
                'GameLog.game' => 'Roulette'
            ),
            'fields' => array(
                'GameLog.id',
				'GameLog.user_id',
				'User.username',
				'GameLog.message',
				'GameLog.game',
				'GameLog.created'
            ),
            'limit' => Configure::read('Settings.itemsPerPage')
        ));

        $data    =   $this->Paginator->paginate( $this->GameLog->name );
        $this->set('data', $data);
        $this->set('model', 'GameLog');
		$this->set('model2', 'User');
		$this->set('tabs', $this->GameLog->getTabs($this->request->params));
    }
	
	public function admin_baccarat($conditions = array(), $model = null)
    {
        $this->Paginator->settings  =   array($this->GameLog->name => array(
			'conditions'    =>  array(
                'GameLog.game' => 'Baccarat'
            ),
            'fields' => array(
                'GameLog.id',
				'GameLog.user_id',
				'User.username',
				'GameLog.message',
				'GameLog.game',
				'GameLog.created'
            ),
            'limit' => Configure::read('Settings.itemsPerPage')
        ));

        $data    =   $this->Paginator->paginate( $this->GameLog->name );
        $this->set('data', $data);
        $this->set('model', 'GameLog');
		$this->set('model2', 'User');
		$this->set('tabs', $this->GameLog->getTabs($this->request->params));
    }
	
	public function admin_stud($conditions = array(), $model = null)
    {
        $this->Paginator->settings  =   array($this->GameLog->name => array(
			'conditions'    =>  array(
                'GameLog.game' => 'Caribbean Stud'
            ),
            'fields' => array(
                'GameLog.id',
				'GameLog.user_id',
				'User.username',
				'GameLog.message',
				'GameLog.game',
				'GameLog.created'
            ),
            'limit' => Configure::read('Settings.itemsPerPage')
        ));

        $data    =   $this->Paginator->paginate( $this->GameLog->name );
        $this->set('data', $data);
        $this->set('model', 'GameLog');
		$this->set('model2', 'User');
		$this->set('tabs', $this->GameLog->getTabs($this->request->params));
    }
	
	public function admin_scratch($conditions = array(), $model = null)
    {
        $this->Paginator->settings  =   array($this->GameLog->name => array(
			'conditions'    =>  array(
                'GameLog.game' => 'Scratch fruit'
            ),
            'fields' => array(
                'GameLog.id',
				'GameLog.user_id',
				'User.username',
				'GameLog.message',
				'GameLog.game',
				'GameLog.created'
            ),
            'limit' => Configure::read('Settings.itemsPerPage')
        ));

        $data    =   $this->Paginator->paginate( $this->GameLog->name );
        $this->set('data', $data);
        $this->set('model', 'GameLog');
		$this->set('model2', 'User');
		$this->set('tabs', $this->GameLog->getTabs($this->request->params));
    }
	
	public function admin_slot_christmas($conditions = array(), $model = null)
    {
        $this->Paginator->settings  =   array($this->GameLog->name => array(
			'conditions'    =>  array(
                'GameLog.game' => 'Slot Christmas'
            ),
            'fields' => array(
                'GameLog.id',
				'GameLog.user_id',
				'User.username',
				'GameLog.message',
				'GameLog.game',
				'GameLog.created'
            ),
            'limit' => Configure::read('Settings.itemsPerPage')
        ));

        $data    =   $this->Paginator->paginate( $this->GameLog->name );
        $this->set('data', $data);
        $this->set('model', 'GameLog');
		$this->set('model2', 'User');
		$this->set('tabs', $this->GameLog->getTabs($this->request->params));
    }
	
	public function admin_slot_chicken($conditions = array(), $model = null)
    {
        $this->Paginator->settings  =   array($this->GameLog->name => array(
			'conditions'    =>  array(
                'GameLog.game' => 'Slot chicken'
            ),
            'fields' => array(
                'GameLog.id',
				'GameLog.user_id',
				'User.username',
				'GameLog.message',
				'GameLog.game',
				'GameLog.created'
            ),
            'limit' => Configure::read('Settings.itemsPerPage')
        ));

        $data    =   $this->Paginator->paginate( $this->GameLog->name );
        $this->set('data', $data);
        $this->set('model', 'GameLog');
		$this->set('model2', 'User');
		$this->set('tabs', $this->GameLog->getTabs($this->request->params));
    }
	
	public function admin_slot_ramses($conditions = array(), $model = null)
    {
        $this->Paginator->settings  =   array($this->GameLog->name => array(
			'conditions'    =>  array(
                'GameLog.game' => 'Slot ramses'
            ),
            'fields' => array(
                'GameLog.id',
				'GameLog.user_id',
				'User.username',
				'GameLog.message',
				'GameLog.game',
				'GameLog.created'
            ),
            'limit' => Configure::read('Settings.itemsPerPage')
        ));

        $data    =   $this->Paginator->paginate( $this->GameLog->name );
        $this->set('data', $data);
        $this->set('model', 'GameLog');
		$this->set('model2', 'User');
		$this->set('tabs', $this->GameLog->getTabs($this->request->params));
    }
	
	public function admin_slot_space($conditions = array(), $model = null)
    {
        $this->Paginator->settings  =   array($this->GameLog->name => array(
			'conditions'    =>  array(
                'GameLog.game' => 'Slot space'
            ),
            'fields' => array(
                'GameLog.id',
				'GameLog.user_id',
				'User.username',
				'GameLog.message',
				'GameLog.game',
				'GameLog.created'
            ),
            'limit' => Configure::read('Settings.itemsPerPage')
        ));

        $data    =   $this->Paginator->paginate( $this->GameLog->name );
        $this->set('data', $data);
        $this->set('model', 'GameLog');
		$this->set('model2', 'User');
		$this->set('tabs', $this->GameLog->getTabs($this->request->params));
    }
	
	public function admin_slot_fruits($conditions = array(), $model = null)
    {
        $this->Paginator->settings  =   array($this->GameLog->name => array(
			'conditions'    =>  array(
                'GameLog.game' => 'Slot fruits'
            ),
            'fields' => array(
                'GameLog.id',
				'GameLog.user_id',
				'User.username',
				'GameLog.message',
				'GameLog.game',
				'GameLog.created'
            ),
            'limit' => Configure::read('Settings.itemsPerPage')
        ));

        $data    =   $this->Paginator->paginate( $this->GameLog->name );
        $this->set('data', $data);
        $this->set('model', 'GameLog');
		$this->set('model2', 'User');
		$this->set('tabs', $this->GameLog->getTabs($this->request->params));
    }
	
    public function index()
    {
        $this->layout = 'user-panel';
        $userId = $this->Auth->user('id');
        $this->Paginator->settings  =   array($this->GameLog->name => array(
            "conditions"    =>  array(
                'GameLog.user_id'    => $userId
            ),
            "order" =>  array(
                'GameLog.created' => 'DESC'
            ),
            "limit" =>  20
        ));

        $gamelogs = $this->Paginator->paginate( $this->GameLog->name );

        $this->set(compact('gamelogs'));
    }
}