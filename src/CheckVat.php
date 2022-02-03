<?php

namespace Compaya\ViesService;

class CheckVat {

	/**
	 * @var string $countryCode
	 */
	protected $countryCode;

	/**
	 * @var string $vatNumber
	 */
	protected $vatNumber;

	/**
	 * @param string $countryCode
	 * @param string $vatNumber
	 */
	public function __construct($countryCode, $vatNumber) {
		$this->countryCode = $countryCode;
		$this->vatNumber = $vatNumber;
	}

	/**
	 * @return string
	 */
	public function getCountryCode() {
		return $this->countryCode;
	}

	/**
	 * @param string $countryCode
	 * @return CheckVat
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
	 * @return CheckVat
	 */
	public function setVatNumber($vatNumber) {
		$this->vatNumber = $vatNumber;

		return $this;
	}

}
