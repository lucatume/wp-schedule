<?php


	abstract class WPSchedule_Schedule_AbstractSchedule implements WPSchedule_Schedule_ScheduleInterface {

		/**
		 * Checks if an hook is scheduled or not.
		 *
		 * @param       $hook
		 * @param array $args
		 *
		 * @throws Exception
		 * @return bool
		 */
		public function is_scheduled( $hook, array $args = null ) {
			throw new Exception( 'Method not implemented' );
		}

		/**
		 * Schedules an event.
		 *
		 * @param                                       $hook
		 * @param WPSchedule_Schedule_TimeInterface     $activation_time
		 * @param WPSchedule_Interval_IntervalInterface $recurrence_interval
		 * @param array                                 $args
		 *
		 * @throws Exception
		 * @return mixed
		 */
		public function schedule( $hook, WPSchedule_Schedule_TimeInterface $activation_time, WPSchedule_Interval_IntervalInterface $recurrence_interval, array $args = null ) {
			throw new Exception( 'Method not implemented' );
		}

		/**
		 * Removes an event from the schedule.
		 *
		 * @param       $hook
		 * @param array $args
		 *
		 * @throws Exception
		 * @return mixed
		 */
		public function clear_schedule( $hook, array $args = null ) {
			throw new Exception( 'Method not implemented' );
		}

		/**
		 * Schedules a single event.
		 *
		 * @param                                   $hook
		 * @param WPSchedule_Schedule_TimeInterface $activation_Time
		 * @param array                             $args
		 *
		 * @throws Exception
		 * @return mixed
		 */
		public function schedule_single_event( $hook, WPSchedule_Schedule_TimeInterface $activation_Time, array $args = null ) {
			throw new Exception( 'Method not implemented' );
		}

		/**
		 * Updates the schedule for an event.
		 *
		 * @param                                                                    $hook
		 * @param Time|WPSchedule_Schedule_TimeInterface                             $activation_Time
		 * @param WPSchedule_Interval_Interval|WPSchedule_Interval_IntervalInterface $recurrence_Interval
		 * @param array                                                              $args
		 *
		 * @throws Exception
		 * @return mixed
		 */
		public function reschedule( $hook, WPSchedule_Schedule_TimeInterface $activation_Time, WPSchedule_Interval_IntervalInterface $recurrence_Interval, array $args = null ) {
			throw new Exception( 'Method not implemented' );
		}
	}