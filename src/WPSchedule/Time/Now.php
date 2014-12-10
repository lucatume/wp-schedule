<?php


	class WPSchedule_Time_Now extends WPSchedule_Schedule_AbstractTime {

		public function getTime() {
			return time();
		}

	}