<?php


	class WPSchedule_Schedule_Schedule extends WPSchedule_Schedule_AbstractSchedule {
        public function isScheduled($hook, $args = null){
            return wp_next_scheduled( $hook, $args );            
        }
	}