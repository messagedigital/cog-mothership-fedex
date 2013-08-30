<?php

namespace Message\Mothership\Fedex\Api\Response;

use Message\Mothership\Fedex\Api\PreparedRequest;
use Message\Mothership\Fedex\Api\Request\RequestInterface;
use Message\Mothership\Fedex\Api\Notification;

/**
 * Defines a response from the FedEx API.
 *
 * @author Joe Holdcroft <joe@message.co.uk>
 */
interface ResponseInterface
{
	public function setPreparedRequest(PreparedRequest $request);

	public function setNotifications(Notification\Collection $collection);

	public function getPreparedRequest();

	public function getRequest();

	public function getRequestData();

	public function getNotifications();

	public function validate();

	public function init();
}