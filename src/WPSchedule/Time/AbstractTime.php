<?php


	abstract class WPSchedule_Schedule_AbstractTime implements WPSchedule_Time_TimeInterface {

		public function getTime() {
			throw new Exception('Method not implemented');
		}
	}