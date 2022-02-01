<?php

namespace Compaya\ViesService;

class checkVatApprox {

	/**
	 * @var string $countryCode
	 */
	protected $countryCode = null;

	/**
	 * @var string $vatNumber
	 */
	protected $vatNumber = null;

	/**
	 * @var string $traderName
	 */
	protected $traderName = null;

	/**
	 * @var companyTypeCode $traderCompanyType
	 */
	protected $traderCompanyType = null;

	/**
	 * @var string $traderStreet
	 */
	protected $traderStreet = null;

	/**
	 * @var string $traderPostcode
	 */
	protected $traderPostcode = null;

	/**
	 * @var string $traderCity
	 */
	protected $traderCity = null;

	/**
	 * @var string $requesterCountryCode
	 */
	protected $requesterCountryCode = null;

	/**
	 * @var string $requesterVatNumber
	 */
	protected $requesterVatNumber = null;

	/**
	 * @param string          $countryCode
	 * @param string          $vatNumber
	 * @param string          $traderName
	 * @param companyTypeCode $traderCompanyType
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
	 * @return checkVatApprox
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
	 * @return checkVatApprox
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
	 * @return checkVatApprox
	 */
	public function setTraderName($traderName) {
		$this->traderName = $traderName;

		return $this;
	}

	/**
	 * @return companyTypeCode
	 */
	public function getTraderCompanyType() {
		return $this->traderCompanyType;
	}

	/**
	 * @param companyTypeCode $traderCompanyType
	 * @return checkVatApprox
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
	 * @return checkVatApprox
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
	 * @return checkVatApprox
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
	 * @return checkVatApprox
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
	 * @return checkVatApprox
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
	 * @return checkVatApprox
	 */
	public function setRequesterVatNumber($requesterVatNumber) {
		$this->requesterVatNumber = $requesterVatNumber;

		return $this;
	}

}
