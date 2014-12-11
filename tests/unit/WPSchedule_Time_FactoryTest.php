<?php

	use tad\FunctionMocker\FunctionMocker;

	class WPSchedule_Time_FactoryTest extends \PHPUnit_Framework_TestCase {

		protected function setUp() {
			FunctionMocker::setUp();
		}

		protected function tearDown() {
			FunctionMocker::tearDown();
		}

		/**
		 * @test
		 * it should return Now time if option not set
		 */
		public function it_should_return_now_time_if_option_not_set() {
			FunctionMocker::replace( 'get_option', false );

			$time = WPSchedule_Time_Factory::make( 'some_hook' );

			$this->assertInstanceOf( 'WPSchedule_Time_Now', $time );
		}

		public function notATimeSlug() {
			return [
				[ 23 ],
				[ 'foo' ],
				[ [ ] ],
				[ [ 'one' => 1 ] ],
				[ [ 'one' => 1, 'two' => 'two' ] ]
			];
		}

		/**
		 * @test
		 * it should return Now time by default
		 * @dataProvider notATimeSlug
		 */
		public function it_should_return_now_time_by_default( $timeSlug ) {
			FunctionMocker::replace( 'get_option', $timeSlug );

			$time = WPSchedule_Time_Factory::make( 'some_hook' );

			$this->assertInstanceOf( 'WPSchedule_Time_Now', $time );
		}

		public function legitTimeSlugs() {
			$pairs = WPSchedule_Time_Factory::getSlugsAndClasses();
			$out = [ ];
			array_walk( $pairs, function ( $class, $slug ) use ( &$out ) {
				$out[] = [ $slug, $class ];
			} );

			return $out;
		}

		/**
		 * @test
		 * it should return right time for slug
		 * @dataProvider legitTimeSlugs
		 */
		public function it_should_return_right_time_for_slug( $timeSlug, $class ) {
			FunctionMocker::replace( 'get_option', $timeSlug );

			$time = WPSchedule_Time_Factory::make( 'some_hook' );

			$this->assertInstanceOf( $class, $time );
		}
	}