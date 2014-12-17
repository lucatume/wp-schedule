<?php


	class WPSchedule_Interval_Factory extends WPSchedule_Abstract_FactoryData {

		public $optionPostfix   = '_schedule_interval';
		public $defaultSlug     = '1m';
		public $defaultClass    = 'WPSchedule_Interval_OneMinute';
		public $slugsAndClasses = array(
			'1m' => 'WPSchedule_Interval_OneMinute',
			'1h' => 'WPSchedule_Interval_OneHour',
			'12h' => 'WPSchedule_Interval_TwelveHours',
		);

		public static $type = 'interval';

		public static function make( $hook, array $args = null ) {

			return WPSchedule_Factory_OptionFactory::make( self::$type, $hook, $args );
		}

	}


	WPSchedule_Factory_OptionFactory::register( WPSchedule_Interval_Factory::$type, new WPSchedule_Interval_Factory() );
