<?php


	class WPSchedule_Schedule_ScheduleTest extends \PHPUnit_Framework_TestCase {

		/**
		 * @var WPSchedule_Schedule_Schedule
		 */
		protected $sut;

		/**
		 * @var string
		 */
		protected $sutClass = 'WPSchedule_Schedule_Schedule';

		protected function setUp() {
			$this->sut = new WPSchedule_Schedule_Schedule();
		}

		protected function tearDown() {
		}

		/**
		 * @test
		 * it should be initializable
		 */
		public function it_should_be_initializable() {
			$this->assertInstanceOf( $this->sutClass, $this->sut );
		}

	}