<?php
/**
 * @copyright   Copyright (C) 2010-2020 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

namespace Combodo\iTop\Service;


/**
 * Data given to the Event Service callbacks
 * Class EventServiceData
 *
 * @package Combodo\iTop\Service
 */
class EventData
{
	private $sEvent;
	private $sEventSource;
	private $mEventData;
	private $mCallbackData;

	/**
	 * EventServiceData constructor.
	 *
	 * @param $sEvent
	 * @param $sEventSource
	 * @param $mEventData
	 * @param $mCallbackData
	 */
	public function __construct($sEvent, $sEventSource, $mEventData, $mCallbackData)
	{
		$this->sEvent = $sEvent;
		$this->mEventData = $mEventData;
		$this->sEventSource = $sEventSource;
		$this->mCallbackData = $mCallbackData;
	}

	/**
	 * @return string
	 */
	public function GetEvent()
	{
		return $this->sEvent;
	}

	/**
	 * @return string
	 */
	public function GetEventSource()
	{
		return $this->sEventSource;
	}

	/**
	 * @return mixed
	 */
	public function GetEventData()
	{
		return $this->mEventData;
	}

	/**
	 * @return mixed
	 */
	public function GetCallbackData()
	{
		return $this->mCallbackData;
	}
}
