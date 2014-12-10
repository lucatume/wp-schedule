<?php


	class WPSchedule_Interval_Factory implements WPSchedule_Interface_FactoryInterface {

		public static function make( $hook, array $args = null ) {
			if ( ! is_string( $hook ) ) {
				throw new Exception( 'Hook name must be a string' );
			}

			$intervalSlug = get_option( $hook . '_schedule_interval', '1m' );
			$intervalSlug = is_string( $intervalSlug ) ? $intervalSlug : '1m';

			$instance = null;

			switch ( $intervalSlug ) {
				case '12h':
					$instance = new WPSchedule_Interval_TwelveHours();
					break;
				case '1h':
					$instance = new WPSchedule_Interval_OneHour();
					break;
				case '1m':
					$instance = new WPSchedule_Interval_OneMinute();
					break;
				default:
					$instance = new WPSchedule_Interval_OneMinute();
					break;
			}

			return $instance;
		}
	}