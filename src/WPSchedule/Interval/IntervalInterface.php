<?php


	interface WPSchedule_Interval_IntervalInterface {

		/**
		 * Returns a time interval in seconds.
		 *
		 * @return int
		 */
		public function getInterval();
	}