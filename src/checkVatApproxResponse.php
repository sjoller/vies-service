<?php

namespace Compaya\ViesService;

class checkVatApproxResponse {

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
	 * @var string $traderName
	 */
	protected $traderName = null;

	/**
	 * @var companyTypeCode $traderCompanyType
	 */
	protected $traderCompanyType = null;

	/**
	 * @var string $traderAddress
	 */
	protected $traderAddress = null;

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
	 * @var matchCode $traderNameMatch
	 */
	protected $traderNameMatch = null;

	/**
	 * @var matchCode $traderCompanyTypeMatch
	 */
	protected $traderCompanyTypeMatch = null;

	/**
	 * @var matchCode $traderStreetMatch
	 */
	protected $traderStreetMatch = null;

	/**
	 * @var matchCode $traderPostcodeMatch
	 */
	protected $traderPostcodeMatch = null;

	/**
	 * @var matchCode $traderCityMatch
	 */
	protected $traderCityMatch = null;

	/**
	 * @var string $requestIdentifier
	 */
	protected $requestIdentifier = null;

	/**
	 * @param string          $countryCode
	 * @param string          $vatNumber
	 * @param date            $requestDate
	 * @param boolean         $valid
	 * @param string          $traderName
	 * @param companyTypeCode $traderCompanyType
	 * @param string          $traderAddress
	 * @param string          $traderStreet
	 * @param string          $traderPostcode
	 * @param string          $traderCity
	 * @param matchCode       $traderNameMatch
	 * @param matchCode       $traderCompanyTypeMatch
	 * @param matchCode       $traderStreetMatch
	 * @param matchCode       $traderPostcodeMatch
	 * @param matchCode       $traderCityMatch
	 * @param string          $requestIdentifier
	 */
	public function __construct($countryCode, $vatNumber, $requestDate, $valid, $traderName, $traderCompanyType, $traderAddress, $traderStreet, $traderPostcode, $traderCity, $traderNameMatch, $traderCompanyTypeMatch, $traderStreetMatch, $traderPostcodeMatch, $traderCityMatch, $requestIdentifier) {
		$this->countryCode = $countryCode;
		$this->vatNumber = $vatNumber;
		$this->requestDate = $requestDate;
		$this->valid = $valid;
		$this->traderName = $traderName;
		$this->traderCompanyType = $traderCompanyType;
		$this->traderAddress = $traderAddress;
		$this->traderStreet = $traderStreet;
		$this->traderPostcode = $traderPostcode;
		$this->traderCity = $traderCity;
		$this->traderNameMatch = $traderNameMatch;
		$this->traderCompanyTypeMatch = $traderCompanyTypeMatch;
		$this->traderStreetMatch = $traderStreetMatch;
		$this->traderPostcodeMatch = $traderPostcodeMatch;
		$this->traderCityMatch = $traderCityMatch;
		$this->requestIdentifier = $requestIdentifier;
	}

	/**
	 * @return string
	 */
	public function getCountryCode() {
		return $this->countryCode;
	}

	/**
	 * @param string $countryCode
	 * @return checkVatApproxResponse
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
	 * @return checkVatApproxResponse
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
	 * @return checkVatApproxResponse
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
	 * @return checkVatApproxResponse
	 */
	public function setValid($valid) {
		$this->valid = $valid;

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
	 * @return checkVatApproxResponse
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
	 * @return checkVatApproxResponse
	 */
	public function setTraderCompanyType($traderCompanyType) {
		$this->traderCompanyType = $traderCompanyType;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTraderAddress() {
		return $this->traderAddress;
	}

	/**
	 * @param string $traderAddress
	 * @return checkVatApproxResponse
	 */
	public function setTraderAddress($traderAddress) {
		$this->traderAddress = $traderAddress;

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
	 * @return checkVatApproxResponse
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
	 * @return checkVatApproxResponse
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
	 * @return checkVatApproxResponse
	 */
	public function setTraderCity($traderCity) {
		$this->traderCity = $traderCity;

		return $this;
	}

	/**
	 * @return matchCode
	 */
	public function getTraderNameMatch() {
		return $this->traderNameMatch;
	}

	/**
	 * @param matchCode $traderNameMatch
	 * @return checkVatApproxResponse
	 */
	public function setTraderNameMatch($traderNameMatch) {
		$this->traderNameMatch = $traderNameMatch;

		return $this;
	}

	/**
	 * @return matchCode
	 */
	public function getTraderCompanyTypeMatch() {
		return $this->traderCompanyTypeMatch;
	}

	/**
	 * @param matchCode $traderCompanyTypeMatch
	 * @return checkVatApproxResponse
	 */
	public function setTraderCompanyTypeMatch($traderCompanyTypeMatch) {
		$this->traderCompanyTypeMatch = $traderCompanyTypeMatch;

		return $this;
	}

	/**
	 * @return matchCode
	 */
	public function getTraderStreetMatch() {
		return $this->traderStreetMatch;
	}

	/**
	 * @param matchCode $traderStreetMatch
	 * @return checkVatApproxResponse
	 */
	public function setTraderStreetMatch($traderStreetMatch) {
		$this->traderStreetMatch = $traderStreetMatch;

		return $this;
	}

	/**
	 * @return matchCode
	 */
	public function getTraderPostcodeMatch() {
		return $this->traderPostcodeMatch;
	}

	/**
	 * @param matchCode $traderPostcodeMatch
	 * @return checkVatApproxResponse
	 */
	public function setTraderPostcodeMatch($traderPostcodeMatch) {
		$this->traderPostcodeMatch = $traderPostcodeMatch;

		return $this;
	}

	/**
	 * @return matchCode
	 */
	public function getTraderCityMatch() {
		return $this->traderCityMatch;
	}

	/**
	 * @param matchCode $traderCityMatch
	 * @return checkVatApproxResponse
	 */
	public function setTraderCityMatch($traderCityMatch) {
		$this->traderCityMatch = $traderCityMatch;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRequestIdentifier() {
		return $this->requestIdentifier;
	}

	/**
	 * @param string $requestIdentifier
	 * @return checkVatApproxResponse
	 */
	public function setRequestIdentifier($requestIdentifier) {
		$this->requestIdentifier = $requestIdentifier;

		return $this;
	}

}
