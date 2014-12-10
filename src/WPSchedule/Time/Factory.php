<?php


	class WPSchedule_Time_Factory implements WPSchedule_Interface_FactoryInterface {

		public static function make( $hook, array $args = null ) {
			if ( ! is_string( $hook ) ) {
				throw new Exception( 'Hook name must be a string' );
			}

			$timeSlug = get_option( $hook . '_schedule_time', 'now' );
			$timeSlug = is_string( $timeSlug ) ? $timeSlug : 'now';

			$instance = null;

			switch ( $timeSlug ) {
				case '8pm':
					$instance = new WPSchedule_Time_EightPM();
					break;
				case '8am':
					$instance = new WPSchedule_Time_EightAM();
					break;
				case 'now':
					$instance = new WPSchedule_Time_Now();
					break;
				default:
					$instance = new WPSchedule_Time_Now();
					break;
			}

			return $instance;
		}
	}