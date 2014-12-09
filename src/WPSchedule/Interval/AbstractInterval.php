<?php


	abstract class WPSchedule_Interval_AbstractInterval implements WPSchedule_Interval_IntervalInterface {

		public function getInterval() {
			throw new Exception( 'Method not implemented' );
		}
	}