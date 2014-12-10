<?php


	interface WPSchedule_Interface_FactoryInterface {

		public static function make( $hook, array $args = null );
	}