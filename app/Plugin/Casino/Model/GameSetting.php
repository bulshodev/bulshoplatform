<?php

App::uses('CasinoAppModel', 'Casino.Model');

class GameSetting extends AppModel
{
    /**
     * Model name
     *
     * @var $name string
     */
    public $name = 'game_settings';

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
        'value'     => array(
            'type'      => 'string',
            'length'    => 3200,
            'null'      => false
        ),
        'key'       => array(
            'type'      => 'string',
            'length'    => 255,
            'null'      => false
        )
    );

    /**
     * Save settings
     *
     * @param $settings
     * @param $settingsType
     * @return bool|mixed
     */
    public function saveSettings($settings, $settingsType)
    {
        switch($settingsType) {
            case 'highLowSettings':
                $db_settings = $this->getHighLowSettings();
                break;

            case 'blackJackSettings':
                $db_settings = $this->getBlackJackSettings();
                break;
				
			case 'rouletteSettings':
                $db_settings = $this->getRouletteSettings();
                break;
				
			case 'baccaratSettings':
                $db_settings = $this->getBaccaratSettings();
                break;
				
			case 'studSettings':
                $db_settings = $this->getStudSettings();
                break;
				
			case 'scratchSettings':
                $db_settings = $this->getScratchSettings();
                break;
				
			case 'slotChristmasSettings':
                $db_settings = $this->getSlotChristmasSettings();
                break;
				
			case 'slotChickenSettings':
                $db_settings = $this->getSlotChickenSettings();
                break;
				
			case 'slotRamsesSettings':
                $db_settings = $this->getSlotRamsesSettings();
                break;
				
			case 'slotSpaceSettings':
                $db_settings = $this->getSlotSpaceSettings();
                break;
				
			case 'slotFruitsSettings':
                $db_settings = $this->getSlotFruitsSettings();
                break;

            default:
                return false;
                break;
        }

        $settings = array_map(function($setting) USE ($settings) {
            if(isset($settings['GameSetting'][$setting['id']])) {
                return array(
                    'id'    =>  $setting['id'],
                    'value' =>  $settings['GameSetting'][$setting['id']]
                );
            }
            return array();
        }, $db_settings);
		
		

        return $this->saveAll(array_filter(array_values($settings)));
    }

    /**
     * Updates setting field
     *
     * @param $field
     * @param $value
     */
    function updateField($field, $value) {
        $options['conditions'] = array(
            'Setting.key' => $field
        );
        $data = $this->find('first', $options);
        $data['Setting']['value'] = $value;
        $this->save($data);
    }

    /**
     * Returns High Low game settings
     *
     * @return array
     */
    public function getHighLowSettings()
    {
		$list = array();
        $options['conditions'] = array(
            'GameSetting.key' => array(
                'high_low_win_occurence',
				'high_low_max_possible_winings',
				'high_low_fiches_value_1',
				'high_low_fiches_value_2',
				'high_low_fiches_value_3',
				'high_low_fiches_value_4',
				'high_low_fiches_value_5',
				'high_low_card_turn_speed',
				'high_low_show_text_speed',
				'high_low_show_credits',
				'high_low_fullscreen',
				'high_low_check_orientation',
				'high_low_auto_lose_threshold'
            )
        );
        $settings = $this->find('all', $options);
        foreach ($settings as $setting) {
            $list[$setting['GameSetting']['key']] = $setting['GameSetting'];
        }
        return $list;
    }

    /**
     * Returns BlackJack game settings
     *
     * @return array
     */
    public function getBlackJackSettings()
    {
		$list = array();
        $options['conditions'] = array(
            'GameSetting.key' => array(
                'black_jack_win_occurence',
				'black_jack_min_bet',
				'black_jack_max_bet',
				'black_jack_bet_time',
				'black_jack_payout',
				'black_jack_game_cash',
				'black_jack_show_credits',
				'black_jack_fullscreen',
				'black_jack_check_orientation',
				'black_jack_auto_lose_threshold'
            )
        );
        $settings = $this->find('all', $options);
        foreach ($settings as $setting) {
            $list[$setting['GameSetting']['key']] = $setting['GameSetting'];
        }
        return $list;
    }
	
	/**
     * Returns Roulette game settings
     *
     * @return array
     */
    public function getRouletteSettings()
    {
		$list = array();
        $options['conditions'] = array(
            'GameSetting.key' => array(
                'roulette_win_occurence',
				'roulette_min_bet',
				'roulette_max_bet',
				'roulette_time_bet',
				'roulette_time_winner',
				'roulette_casino_cash',
				'roulette_fullscreen',
				'roulette_check_orientation',
				'roulette_auto_lose_threshold'
            )
        );
        $settings = $this->find('all', $options);
        foreach ($settings as $setting) {
            $list[$setting['GameSetting']['key']] = $setting['GameSetting'];
        }
        return $list;
    }
	
	/**
     * Returns Baccarat game settings
     *
     * @return array
     */
    public function getBaccaratSettings()
    {
		$list = array();
        $options['conditions'] = array(
            'GameSetting.key' => array(
                'baccarat_win_occurence',
				'baccarat_bet_occurence_tie',
				'baccarat_bet_occurence_banker',
				'baccarat_bet_occurence_player',
				'baccarat_min_bet',
				'baccarat_max_bet',
				'baccarat_multiplier_tie',
				'baccarat_multiplier_banker',
				'baccarat_multiplier_player',
				'baccarat_auto_lose_threshold',
				'baccarat_time_show_hand',
				'baccarat_fullscreen',
				'baccarat_check_orientation'
            )
        );
        $settings = $this->find('all', $options);
        foreach ($settings as $setting) {
            $list[$setting['GameSetting']['key']] = $setting['GameSetting'];
        }
        return $list;
    }	
	
	/**
     * Returns Caribbean Stud game settings
     *
     * @return array
     */
    public function getStudSettings()
    {
		$list = array();
        $options['conditions'] = array(
            'GameSetting.key' => array(
                'stud_win_occurence',
				'stud_min_bet',
				'stud_max_bet',
				'stud_auto_lose_threshold',
				'stud_payout_royal_flush',
				'stud_payout_straight_flush',
				'stud_payout_four_of_a_kind',
				'stud_payout_full_house',
				'stud_payout_flush',
				'stud_payout_straight',
				'stud_payout_three_of_a_kind',
				'stud_payout_two_pair',
				'stud_payout_one_pair_or_less',
				'stud_time_show_hand',
				'stud_show_credits',
				'stud_fullscreen',
				'stud_check_orientation'
            )
        );
        $settings = $this->find('all', $options);
        foreach ($settings as $setting) {
            $list[$setting['GameSetting']['key']] = $setting['GameSetting'];
        }
        return $list;
    }
	
	/**
     * Returns Scratch fruit game settings
     *
     * @return array
     */
    public function getScratchSettings()
    {
		$list = array();
        $options['conditions'] = array(
            'GameSetting.key' => array(
                'scratch_show_credits',
				'scratch_fullscreen',
				'scratch_check_orientation',
				'scratch_bet_1',
				'scratch_bet_2',
				'scratch_bet_3',
				'scratch_prize_1',
				'scratch_prize_2',
				'scratch_prize_3',
				'scratch_prize_4',
				'scratch_prize_5',
				'scratch_prize_6',
				'scratch_prize_7',
				'scratch_prize_8',
				'scratch_prize_9',
				'scratch_win_occurence',
				'scratch_prize_probability_1',
				'scratch_prize_probability_2',
				'scratch_prize_probability_3',
				'scratch_prize_probability_4',
				'scratch_prize_probability_5',
				'scratch_prize_probability_6',
				'scratch_prize_probability_7',
				'scratch_prize_probability_8',
				'scratch_prize_probability_9',
				'scratch_win_percentage_1_rows',
				'scratch_win_percentage_2_rows',
				'scratch_win_percentage_3_rows'
            )
        );
        $settings = $this->find('all', $options);
        foreach ($settings as $setting) {
            $list[$setting['GameSetting']['key']] = $setting['GameSetting'];
        }
        return $list;
    }
	
	/**
     * Returns Slot Christmas game settings
     *
     * @return array
     */
    public function getSlotChristmasSettings()
    {
		$list = array();
        $options['conditions'] = array(
            'GameSetting.key' => array(
                'slot_christmas_win_occurence',
				'slot_christmas_min_bet',
				'slot_christmas_max_bet',
				'slot_christmas_auto_lose_threshold',
				'slot_christmas_show_credits',
				'slot_christmas_fullscreen',
				'slot_christmas_check_orientation',
				'slot_christmas_bonus_occurence',
				'slot_christmas_maximum_hold_reels',
				'slot_christmas_bonus_occurence_1',
				'slot_christmas_bonus_occurence_2',
				'slot_christmas_bonus_occurence_3',
				'slot_christmas_paytable_1',
				'slot_christmas_paytable_2',
				'slot_christmas_paytable_3',
				'slot_christmas_paytable_4',
				'slot_christmas_paytable_5',
				'slot_christmas_paytable_6',
				'slot_christmas_paytable_7',
				'slot_christmas_paytable_8',
				'slot_christmas_bonus_1',
				'slot_christmas_bonus_2',
				'slot_christmas_bonus_3'
            )
        );
		
        $settings = $this->find('all', $options);
        foreach ($settings as $setting) {
            $list[$setting['GameSetting']['key']] = $setting['GameSetting'];
        }
        return $list;
    }
	
	/**
     * Returns Slot chicken game settings
     *
     * @return array
     */
    public function getSlotChickenSettings()
    {
		$list = array();
        $options['conditions'] = array(
            'GameSetting.key' => array(
                'slot_chicken_win_occurence',
				'slot_chicken_min_bet',
				'slot_chicken_max_bet',
				'slot_chicken_auto_lose_threshold',
				'slot_chicken_show_credits',
				'slot_chicken_fullscreen',
				'slot_chicken_check_orientation',
				'slot_chicken_bonus_occurence',
				'slot_chicken_maximum_hold_reels',
				'slot_chicken_bonus_occurence_1',
				'slot_chicken_bonus_occurence_2',
				'slot_chicken_bonus_occurence_3',
				'slot_chicken_paytable_1',
				'slot_chicken_paytable_2',
				'slot_chicken_paytable_3',
				'slot_chicken_paytable_4',
				'slot_chicken_paytable_5',
				'slot_chicken_paytable_6',
				'slot_chicken_paytable_7',
				'slot_chicken_paytable_8',
				'slot_chicken_bonus_1',
				'slot_chicken_bonus_2',
				'slot_chicken_bonus_3'
            )
        );
		
        $settings = $this->find('all', $options);
        foreach ($settings as $setting) {
            $list[$setting['GameSetting']['key']] = $setting['GameSetting'];
        }
        return $list;
    }
	
	/**
     * Returns Slot ramses game settings
     *
     * @return array
     */
    public function getSlotRamsesSettings()
    {
		$list = array();
        $options['conditions'] = array(
            'GameSetting.key' => array(
                'slot_ramses_win_occurence',
				'slot_ramses_min_bet',
				'slot_ramses_max_bet',
				'slot_ramses_auto_lose_threshold',
				'slot_ramses_show_credits',
				'slot_ramses_fullscreen',
				'slot_ramses_check_orientation',
				'slot_ramses_bonus_occurence',
				'slot_ramses_maximum_hold_reels',
				'slot_ramses_bonus_occurence_1',
				'slot_ramses_bonus_occurence_2',
				'slot_ramses_bonus_occurence_3',
				'slot_ramses_paytable_1',
				'slot_ramses_paytable_2',
				'slot_ramses_paytable_3',
				'slot_ramses_paytable_4',
				'slot_ramses_paytable_5',
				'slot_ramses_paytable_6',
				'slot_ramses_paytable_7',
				'slot_ramses_paytable_8',
				'slot_ramses_bonus_1',
				'slot_ramses_bonus_2',
				'slot_ramses_bonus_3'
            )
        );
		
        $settings = $this->find('all', $options);
        foreach ($settings as $setting) {
            $list[$setting['GameSetting']['key']] = $setting['GameSetting'];
        }
        return $list;
    }
	
	/**
     * Returns Slot space game settings
     *
     * @return array
     */
    public function getSlotSpaceSettings()
    {
		$list = array();
        $options['conditions'] = array(
            'GameSetting.key' => array(
                'slot_space_win_occurence',
				'slot_space_min_bet',
				'slot_space_max_bet',
				'slot_space_auto_lose_threshold',
				'slot_space_show_credits',
				'slot_space_fullscreen',
				'slot_space_check_orientation',
				'slot_space_bonus_occurence',
				'slot_space_maximum_hold_reels',
				'slot_space_bonus_occurence_1',
				'slot_space_bonus_occurence_2',
				'slot_space_bonus_occurence_3',
				'slot_space_paytable_1',
				'slot_space_paytable_2',
				'slot_space_paytable_3',
				'slot_space_paytable_4',
				'slot_space_paytable_5',
				'slot_space_paytable_6',
				'slot_space_paytable_7',
				'slot_space_paytable_8',
				'slot_space_bonus_1',
				'slot_space_bonus_2',
				'slot_space_bonus_3'
            )
        );
		
        $settings = $this->find('all', $options);
        foreach ($settings as $setting) {
            $list[$setting['GameSetting']['key']] = $setting['GameSetting'];
        }
        return $list;
    }
	
	/**
     * Returns Slot fruits game settings
     *
     * @return array
     */
    public function getSlotFruitsSettings()
    {
		$list = array();
        $options['conditions'] = array(
            'GameSetting.key' => array(
                'slot_fruits_win_occurence',
				'slot_fruits_min_bet',
				'slot_fruits_max_bet',
				'slot_fruits_auto_lose_threshold',
				'slot_fruits_show_credits',
				'slot_fruits_fullscreen',
				'slot_fruits_check_orientation',
				'slot_fruits_bonus_occurence',
				'slot_fruits_maximum_hold_reels',
				'slot_fruits_bonus_occurence_1',
				'slot_fruits_bonus_occurence_2',
				'slot_fruits_bonus_occurence_3',
				'slot_fruits_paytable_1',
				'slot_fruits_paytable_2',
				'slot_fruits_paytable_3',
				'slot_fruits_paytable_4',
				'slot_fruits_paytable_5',
				'slot_fruits_paytable_6',
				'slot_fruits_paytable_7',
				'slot_fruits_paytable_8',
				'slot_fruits_bonus_1',
				'slot_fruits_bonus_2',
				'slot_fruits_bonus_3'
            )
        );
		
        $settings = $this->find('all', $options);
        foreach ($settings as $setting) {
            $list[$setting['GameSetting']['key']] = $setting['GameSetting'];
        }
        return $list;
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
                    'controller'    =>  'GameSettings',
                    'action'        =>  'admin_highlow'
                )
            ),
            1   =>  array(
                'name'      =>  __('BlackJack', true),
                'active'    =>  $params['action'] == 'admin_blackjack',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameSettings',
                    'action'        =>  'admin_blackjack'
                )
            ),
            2   =>  array(
                'name'      =>  __('Roulettes', true),
                'active'    =>  $params['action'] == 'admin_roulette',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameSettings',
                    'action'        =>  'admin_roulette'
                )
            ),
			3   =>  array(
                'name'      =>  __('Baccarat', true),
                'active'    =>  $params['action'] == 'admin_baccarat',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameSettings',
                    'action'        =>  'admin_baccarat'
                )
            ),
			4   =>  array(
                'name'      =>  __('Caribbean Stud', true),
                'active'    =>  $params['action'] == 'admin_stud',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameSettings',
                    'action'        =>  'admin_stud'
                )
            ),
			5   =>  array(
                'name'      =>  __('Scratch fruit', true),
                'active'    =>  $params['action'] == 'admin_scratch',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameSettings',
                    'action'        =>  'admin_scratch'
                )
            ),
			6   =>  array(
                'name'      =>  __('Slot Christmas', true),
                'active'    =>  $params['action'] == 'admin_slot_christmas',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameSettings',
                    'action'        =>  'admin_slot_christmas'
                )
            ),
			7   =>  array(
                'name'      =>  __('Slot chicken', true),
                'active'    =>  $params['action'] == 'admin_slot_chicken',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameSettings',
                    'action'        =>  'admin_slot_chicken'
                )
            ),
			8   =>  array(
                'name'      =>  __('Slot ramses', true),
                'active'    =>  $params['action'] == 'admin_slot_ramses',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameSettings',
                    'action'        =>  'admin_slot_ramses'
                )
            ),
			9   =>  array(
                'name'      =>  __('Slot space', true),
                'active'    =>  $params['action'] == 'admin_slot_space',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameSettings',
                    'action'        =>  'admin_slot_space'
                )
            ),
			10   =>  array(
                'name'      =>  __('Slot fruits', true),
                'active'    =>  $params['action'] == 'admin_slot_fruits',
                'url'       =>  array(
                    'plugin'        =>  'casino',
                    'controller'    =>  'GameSettings',
                    'action'        =>  'admin_slot_fruits'
                )
            )
        );
    }
}