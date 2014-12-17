<?php


	class WPSchedule_Abstract_FactoryData implements WPSchedule_Interface_FactoryDataInterface, WPSchedule_Interface_FactoryInterface {

		/**
		 * @return string
		 */
		public function getOptionPostfix() {
			return $this->optionPostfix;
		}

		/**
		 * @return string
		 */
		public function getDefaultSlug() {
			return $this->defaultSlug;
		}

		/**
		 * @return string
		 */
		public function getDefaultClass() {
			return $this->defaultClass;
		}

		/**
		 * @return array
		 */
		public function getSlugsAndClasses() {
			return $this->slugsAndClasses;
		}

		public function isLegitSlug( $slug ) {
			$slugsAndClasses = $this->getSlugsAndClasses();

			return is_string( $slug ) && array_key_exists( $slug, $slugsAndClasses );
		}

		public static function make( $hook, array $args = null ) {
			throw new Exception( 'Method not implemented1' );
		}
	}