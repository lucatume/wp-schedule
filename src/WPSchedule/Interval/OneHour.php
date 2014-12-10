<?php


	class WPSchedule_Interval_OneHour extends WPSchedule_Interval_AbstractInterval {

		public function getInterval() {
			return 3600;
		}

	}