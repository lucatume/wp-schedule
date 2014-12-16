<?php

interface WPSchedule_Interface_FactoryDataInterface {

	/**
	 * @return string
	 */
	public function getOptionPostfix();

	/**
	 * @return string
	 */
	public function getDefaultSlug();

	/**
	 * @return string
	 */
	public function getDefaultClass();

	/**
	 * @return array
	 */
	public function getSlugsAndClasses();
}