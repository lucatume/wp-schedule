<?php


	interface WPSchedule_Interface_FactoryInterface {

		public function make( $hook, array $args = null );

		public function getSlugsAndClasses();

		public function isLegitSlug( $slug );

		public function getDefaultClass();
	}