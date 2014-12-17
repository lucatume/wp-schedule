<?php


	class WPSchedule_Time_Factory extends WPSchedule_Abstract_FactoryData {

		public $optionPostfix   = '_schedule_time';
		public $defaultSlug     = 'now';
		public $defaultClass    = 'WPSchedule_Time_Now';
		public $slugsAndClasses = array(
			'now' => 'WPSchedule_Time_Now',
			'8pm' => 'WPSchedule_Time_EightPM',
			'8am' => 'WPSchedule_Time_EightAM'
		);

		public static $type = 'time';

		public static function make( $hook, array $args = null ) {

			return WPSchedule_Factory_OptionFactory::make( self::$type, $hook, $args );
		}

	}


	WPSchedule_Factory_OptionFactory::register( WPSchedule_Time_Factory::$type, new WPSchedule_Time_Factory() );
