<?php


	class WPSchedule_Time_EightPM extends WPSchedule_Time_AbstractTime {

		public function getTime() {
			return strtotime( '8PM' );
		}

	}