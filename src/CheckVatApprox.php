<?php

namespace Compaya\ViesService;

class CheckVatApprox {

	/**
	 * @var string $countryCode
	 */
	protected $countryCode;

	/**
	 * @var string $vatNumber
	 */
	protected $vatNumber;

	/**
	 * @var string $traderName
	 */
	protected $traderName;

	/**
	 * @var string $traderCompanyType
	 */
	protected $traderCompanyType;

	/**
	 * @var string $traderStreet
	 */
	protected $traderStreet;

	/**
	 * @var string $traderPostcode
	 */
	protected $traderPostcode;

	/**
	 * @var string $traderCity
	 */
	protected $traderCity;

	/**
	 * @var string $requesterCountryCode
	 */
	protected $requesterCountryCode;

	/**
	 * @var string $requesterVatNumber
	 */
	protected $requesterVatNumber;

	/**
	 * @param string          $countryCode
	 * @param string          $vatNumber
	 * @param string          $traderName
	 * @param string          $traderCompanyType
	 * @param string          $traderStreet
	 * @param string          $traderPostcode
	 * @param string          $traderCity
	 * @param string          $requesterCountryCode
	 * @param string          $requesterVatNumber
	 */
	public function __construct($countryCode, $vatNumber, $traderName, $traderCompanyType, $traderStreet, $traderPostcode, $traderCity, $requesterCountryCode, $requesterVatNumber) {
		$this->countryCode = $countryCode;
		$this->vatNumber = $vatNumber;
		$this->traderName = $traderName;
		$this->traderCompanyType = $traderCompanyType;
		$this->traderStreet = $traderStreet;
		$this->traderPostcode = $traderPostcode;
		$this->traderCity = $traderCity;
		$this->requesterCountryCode = $requesterCountryCode;
		$this->requesterVatNumber = $requesterVatNumber;
	}

	/**
	 * @return string
	 */
	public function getCountryCode() {
		return $this->countryCode;
	}

	/**
	 * @param string $countryCode
	 * @return CheckVatApprox
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
	 * @return CheckVatApprox
	 */
	public function setVatNumber($vatNumber) {
		$this->vatNumber = $vatNumber;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTraderName() {
		return $this->traderName;
	}

	/**
	 * @param string $traderName
	 * @return CheckVatApprox
	 */
	public function setTraderName($traderName) {
		$this->traderName = $traderName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTraderCompanyType() {
		return $this->traderCompanyType;
	}

	/**
	 * @param string $traderCompanyType
	 * @return CheckVatApprox
	 */
	public function setTraderCompanyType($traderCompanyType) {
		$this->traderCompanyType = $traderCompanyType;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTraderStreet() {
		return $this->traderStreet;
	}

	/**
	 * @param string $traderStreet
	 * @return CheckVatApprox
	 */
	public function setTraderStreet($traderStreet) {
		$this->traderStreet = $traderStreet;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTraderPostcode() {
		return $this->traderPostcode;
	}

	/**
	 * @param string $traderPostcode
	 * @return CheckVatApprox
	 */
	public function setTraderPostcode($traderPostcode) {
		$this->traderPostcode = $traderPostcode;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTraderCity() {
		return $this->traderCity;
	}

	/**
	 * @param string $traderCity
	 * @return CheckVatApprox
	 */
	public function setTraderCity($traderCity) {
		$this->traderCity = $traderCity;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRequesterCountryCode() {
		return $this->requesterCountryCode;
	}

	/**
	 * @param string $requesterCountryCode
	 * @return CheckVatApprox
	 */
	public function setRequesterCountryCode($requesterCountryCode) {
		$this->requesterCountryCode = $requesterCountryCode;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRequesterVatNumber() {
		return $this->requesterVatNumber;
	}

	/**
	 * @param string $requesterVatNumber
	 * @return CheckVatApprox
	 */
	public function setRequesterVatNumber($requesterVatNumber) {
		$this->requesterVatNumber = $requesterVatNumber;

		return $this;
	}

}
