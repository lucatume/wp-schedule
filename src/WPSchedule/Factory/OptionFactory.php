<?php


	class WPSchedule_Factory_OptionFactory {

		/** @var WPSchedule_Interface_FactoryDataInterface[] */
		protected static $clients;

		public static function register( $type, WPSchedule_Interface_FactoryDataInterface $data ) {
			Arg::_( $type )->is_string();

			if ( empty( self::$clients ) ) {
				self::$clients = array();
			}

			self::$clients[ $type ] = $data;
		}

		public static function make( $type, $hook, array $args = null ) {
			Arg::_( $type, 'Type' )->is_string()
			   ->assert( is_array( self::$clients ) && array_key_exists( $type, self::$clients ), 'Type is not a registered factory client' );
			Arg::_( $hook, 'Hook name' )->is_string();

			$data = self::$clients[ $type ];

			$timeSlug = get_option( $hook . $data->getOptionPostfix(), $data->getDefaultSlug() );
			$timeSlug = $data->isLegitSlug( $timeSlug ) ? $timeSlug : $data->getDefaultSlug();

			$slugsAndClasses = $data->getSlugsAndClasses();
			$class = $slugsAndClasses[ $timeSlug ];

			return new $class;
		}

	}