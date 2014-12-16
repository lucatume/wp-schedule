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

		protected static $type = 'interval';

		public static function make( $hook, array $args = null ) {
			WPSchedule_Factory_OptionFactory::register( self::$type, new self() );

			return WPSchedule_Factory_OptionFactory::make( self::$type, $hook, $args );
		}

	}
