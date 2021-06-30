<?php

App::uses('CasinoAppModel', 'Casino.Model');

class GameLog extends AppModel
{
    /**
     * Model name
     *
     * @var $name string
     */
    public $name = 'GameLog';

    /**
     * Custom database table name, or null/false if no table association is desired.
     *
     * @var $useTable string
     */
    public $useTable = 'game_logs';
	
	public function beforeSave($options = array()) {
		
		return true;
	}

    /**
     * Model schema
     *
     * @var $_schema array
     */
    protected $_schema = array(
        'id'        => array(
            'type'      => 'int',
            'length'    => 11,
            'null'      => false
        ),
        'user_id'   => array(
            'type'      => 'int',
            'length'    => 11,
            'null'      => false
        ),
        'message'   => array(
            'type'      => 'string',
            'length'    => 255,
            'null'      => false
        ),
		'game'   => array(
            'type'      => 'string',
            'length'    => 255,
            'null'      => false
        ),
        'created'    => array(
            'type'      => 'datetime',
            'length'    => null,
            'null'      => false
        )
    );
	
	/**
     * Detailed list of belongsTo associations.
     *
     * @var $belongsTo array
     */
    public $belongsTo = array('User');

    /**
     * Writes log
     *
     * @param $userId
     * @param $message
	 * @param $game
     * @return mixed
     */
    public function write($userId, $message, $game)
    {
        $data['GameLog']['user_id'] = $userId;
        $data['GameLog']['message'] = $message;
		$data['GameLog']['game'] = $game;
        return $this->saveAll($data);
    }
	
	/**
     * Returns admin scaffold tabs
     *
     * @param array $params - url params
     *
     * @return array
     */
    public function getTabs(array $params)
    {
        return array(
            0   =>  array(
                'name'      =>  __('High Low', true),
                'active'    =>  $params['action'] == 'admin_highlow',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameLogs',
                    'action'        =>  'admin_highlow'
                )
            ),
            1   =>  array(
                'name'      =>  __('BlackJack', true),
                'active'    =>  $params['action'] == 'admin_blackjack',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameLogs',
                    'action'        =>  'admin_blackjack'
                )
            ),
            2   =>  array(
                'name'      =>  __('Roulettes', true),
                'active'    =>  $params['action'] == 'admin_roulette',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameLogs',
                    'action'        =>  'admin_roulette'
                )
            ),
			3   =>  array(
                'name'      =>  __('Baccarat', true),
                'active'    =>  $params['action'] == 'admin_baccarat',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameLogs',
                    'action'        =>  'admin_baccarat'
                )
            ),
			4   =>  array(
                'name'      =>  __('Caribbean Stud', true),
                'active'    =>  $params['action'] == 'admin_stud',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameLogs',
                    'action'        =>  'admin_stud'
                )
            ),
			5   =>  array(
                'name'      =>  __('Scratch fruit', true),
                'active'    =>  $params['action'] == 'admin_scratch',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameLogs',
                    'action'        =>  'admin_scratch'
                )
            ),
			6   =>  array(
                'name'      =>  __('Slot Christmas', true),
                'active'    =>  $params['action'] == 'admin_slot_christmas',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameLogs',
                    'action'        =>  'admin_slot_christmas'
                )
            ),
			7   =>  array(
                'name'      =>  __('Slot chicken', true),
                'active'    =>  $params['action'] == 'admin_slot_chicken',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameLogs',
                    'action'        =>  'admin_slot_chicken'
                )
            ),
			8   =>  array(
                'name'      =>  __('Slot ramses', true),
                'active'    =>  $params['action'] == 'admin_slot_ramses',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameLogs',
                    'action'        =>  'admin_slot_ramses'
                )
            ),
			9   =>  array(
                'name'      =>  __('Slot space', true),
                'active'    =>  $params['action'] == 'admin_slot_space',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameLogs',
                    'action'        =>  'admin_slot_space'
                )
            ),
			10   =>  array(
                'name'      =>  __('Slot fruits', true),
                'active'    =>  $params['action'] == 'admin_slot_fruits',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameLogs',
                    'action'        =>  'admin_slot_fruits'
                )
            )
        );
    }

    /**
     * ???
     *
     * @return array
     */
    public function getItemActions() {
        return array();
    }
}
