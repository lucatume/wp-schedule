<?php


	class WPSchedule_Time_Now extends WPSchedule_Time_AbstractTime {

		public function getTime() {
			return time();
		}

	}