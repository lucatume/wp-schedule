<?php


	class WPSchedule_Time_EightAM extends WPSchedule_Time_AbstractTime {

		public function getTime() {
			return strtotime( '8AM' );
		}

	}