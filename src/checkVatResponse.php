<?php

namespace Compaya\ViesService;

class checkVatResponse {

	/**
	 * @var string $countryCode
	 */
	protected $countryCode = null;

	/**
	 * @var string $vatNumber
	 */
	protected $vatNumber = null;

	/**
	 * @var date $requestDate
	 */
	protected $requestDate = null;

	/**
	 * @var boolean $valid
	 */
	protected $valid = null;

	/**
	 * @var string $name
	 */
	protected $name = null;

	/**
	 * @var string $address
	 */
	protected $address = null;

	/**
	 * @param string  $countryCode
	 * @param string  $vatNumber
	 * @param date    $requestDate
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
	 * @return checkVatResponse
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
	 * @return checkVatResponse
	 */
	public function setVatNumber($vatNumber) {
		$this->vatNumber = $vatNumber;

		return $this;
	}

	/**
	 * @return date
	 */
	public function getRequestDate() {
		return $this->requestDate;
	}

	/**
	 * @param date $requestDate
	 * @return checkVatResponse
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
	 * @return checkVatResponse
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
	 * @return checkVatResponse
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
	 * @return checkVatResponse
	 */
	public function setAddress($address) {
		$this->address = $address;

		return $this;
	}

}
