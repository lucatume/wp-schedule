<?php


	interface WPSchedule_Schedule_ScheduleInterface {

		/**
		 * Checks if an hook is scheduled or not.
		 *
		 * @param       $hook
		 * @param array $args
		 *
		 * @return bool
		 */
		public function is_scheduled( $hook, array $args = null );

		/**
		 * Schedules an event.
		 *
		 * @param WPSchedule_Time_TimeInterface     $activation_time
		 * @param WPSchedule_Interval_IntervalInterface $recurrence_interval
		 * @param string                                $hook
		 * @param array                                 $args
		 *
		 * @return mixed
		 */
		public function schedule( WPSchedule_Time_TimeInterface $activation_time, WPSchedule_Interval_IntervalInterface $recurrence_interval, $hook, array $args = null );

		/**
		 * Removes an event from the schedule.
		 *
		 * @param       $hook
		 * @param array $args
		 *
		 * @return mixed
		 */
		public function clear_schedule( $hook, array $args = null );

		/**
		 * Schedules a single event.
		 *
		 * @param WPSchedule_Time_TimeInterface $activation_Time
		 * @param string                            $hook
		 * @param array                             $args
		 *
		 * @return mixed
		 */
		public function schedule_single_event( WPSchedule_Time_TimeInterface $activation_Time, $hook, array $args = null );

		/**
		 * Updates the schedule for an event.
		 *
		 * @param Time|WPSchedule_Time_TimeInterface $activation_Time
		 * @param WPSchedule_Interval_IntervalInterface  $recurrence_Interval
		 * @param string                                 $hook
		 * @param array                                  $args
		 *
		 * @return mixed
		 */
		public function reschedule( WPSchedule_Time_TimeInterface $activation_Time, WPSchedule_Interval_IntervalInterface $recurrence_Interval, $hook, array $args = null );

	}

