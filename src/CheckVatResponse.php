<?php

namespace Compaya\ViesService;

use DateTime;

class CheckVatResponse {

	/**
	 * @var string $countryCode
	 */
	protected $countryCode;

	/**
	 * @var string $vatNumber
	 */
	protected $vatNumber;

	/**
	 * @var DateTime $requestDate
	 */
	protected $requestDate;

	/**
	 * @var boolean $valid
	 */
	protected $valid;

	/**
	 * @var string $name
	 */
	protected $name;

	/**
	 * @var string $address
	 */
	protected $address;

	/**
	 * @param string  $countryCode
	 * @param string  $vatNumber
	 * @param DateTime$requestDate
	 * @param boolean $valid
	 * @param string  $name
	 * @param string  $address
	 */
	public function __construct($countryCode, $vatNumber, $requestDate, $valid, $name, $address) {
		$this->countryCode = $countryCode;
		$this->vatNumber = $vatNumber;
		$this->requestDate = $requestDate;
		$this->valid = $valid;
		$this->name = $name;
		$this->address = $address;
	}

	/**
	 * @return string
	 */
	public function getCountryCode() {
		return $this->countryCode;
	}

	/**
	 * @param string $countryCode
	 * @return CheckVatResponse
	 */
	public function setCountryCode($countryCode) {
		$this->countryCode = $countryCode;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getVatNumber() {
		return $this->vatNumber;
	}

	/**
	 * @param string $vatNumber
	 * @return CheckVatResponse
	 */
	public function setVatNumber($vatNumber) {
		$this->vatNumber = $vatNumber;

		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getRequestDate() {
		return $this->requestDate;
	}

	/**
	 * @param DateTime $requestDate
	 * @return CheckVatResponse
	 */
	public function setRequestDate($requestDate) {
		$this->requestDate = $requestDate;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getValid() {
		return $this->valid;
	}

	/**
	 * @param boolean $valid
	 * @return CheckVatResponse
	 */
	public function setValid($valid) {
		$this->valid = $valid;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return CheckVatResponse
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @param string $address
	 * @return CheckVatResponse
	 */
	public function setAddress($address) {
		$this->address = $address;

		return $this;
	}

}
