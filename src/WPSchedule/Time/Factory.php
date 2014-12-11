<?php


	class WPSchedule_Time_Factory implements WPSchedule_Interface_FactoryInterface {

		protected static $slugsAndClasses = array(
			'now' => 'WPSchedule_Time_Now',
			'8pm' => 'WPSchedule_Time_EightPM',
			'8am' => 'WPSchedule_Time_EightAM'
		);

		const OPTION_POSTFIX = '_schedule_time';

		protected static $defaultSlug = 'now';

		public static function make( $hook, array $args = null ) {
			if ( ! is_string( $hook ) ) {
				throw new Exception( 'Hook name must be a string' );
			}

			$timeSlug = get_option( $hook . self::OPTION_POSTFIX, self::$defaultSlug );
			$timeSlug = self::isLegitSlug( $timeSlug ) ? $timeSlug : self::$defaultSlug;

			$instance = null;

			$slugsAndClasses = self::getSlugsAndClasses();
			$class = $slugsAndClasses[ $timeSlug ];

			return new $class;
		}

		public static function getSlugsAndClasses() {
			return self::$slugsAndClasses;
		}

		public static function isLegitSlug( $timeSlug ) {
			$slugsAndClasses = self::getSlugsAndClasses();

			return is_string( $timeSlug ) && array_key_exists( $timeSlug, $slugsAndClasses );
		}
	}