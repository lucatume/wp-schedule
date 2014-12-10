<?php


	abstract class WPSchedule_Time_AbstractTime implements WPSchedule_Time_TimeInterface {

		public function getTime() {
			throw new Exception('Method not implemented');
		}
	}