<?php

namespace Compaya\ViesService;

use DateTime;

class CheckVatApproxResponse {

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
	 * @var string $traderName
	 */
	protected $traderName;

	/**
	 * @var string $traderCompanyType
	 */
	protected $traderCompanyType;

	/**
	 * @var string $traderAddress
	 */
	protected $traderAddress;

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
	 * @var MatchCode $traderNameMatch
	 */
	protected $traderNameMatch;

	/**
	 * @var MatchCode $traderCompanyTypeMatch
	 */
	protected $traderCompanyTypeMatch;

	/**
	 * @var MatchCode $traderStreetMatch
	 */
	protected $traderStreetMatch;

	/**
	 * @var MatchCode $traderPostcodeMatch
	 */
	protected $traderPostcodeMatch;

	/**
	 * @var MatchCode $traderCityMatch
	 */
	protected $traderCityMatch;

	/**
	 * @var string $requestIdentifier
	 */
	protected $requestIdentifier;

	/**
	 * @param string          $countryCode
	 * @param string          $vatNumber
	 * @param DateTime        $requestDate
	 * @param boolean         $valid
	 * @param string          $traderName
	 * @param string $traderCompanyType
	 * @param string          $traderAddress
	 * @param string          $traderStreet
	 * @param string          $traderPostcode
	 * @param string          $traderCity
	 * @param MatchCode       $traderNameMatch
	 * @param MatchCode       $traderCompanyTypeMatch
	 * @param MatchCode       $traderStreetMatch
	 * @param MatchCode       $traderPostcodeMatch
	 * @param MatchCode       $traderCityMatch
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
	 * @return CheckVatApproxResponse
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
	 * @return CheckVatApproxResponse
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
	 * @return CheckVatApproxResponse
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
	 * @return CheckVatApproxResponse
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
	 * @return CheckVatApproxResponse
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
	 * @return CheckVatApproxResponse
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
	 * @return CheckVatApproxResponse
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
	 * @return CheckVatApproxResponse
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
	 * @return CheckVatApproxResponse
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
	 * @return CheckVatApproxResponse
	 */
	public function setTraderCity($traderCity) {
		$this->traderCity = $traderCity;

		return $this;
	}

	/**
	 * @return MatchCode
	 */
	public function getTraderNameMatch() {
		return $this->traderNameMatch;
	}

	/**
	 * @param MatchCode $traderNameMatch
	 * @return CheckVatApproxResponse
	 */
	public function setTraderNameMatch($traderNameMatch) {
		$this->traderNameMatch = $traderNameMatch;

		return $this;
	}

	/**
	 * @return MatchCode
	 */
	public function getTraderCompanyTypeMatch() {
		return $this->traderCompanyTypeMatch;
	}

	/**
	 * @param MatchCode $traderCompanyTypeMatch
	 * @return CheckVatApproxResponse
	 */
	public function setTraderCompanyTypeMatch($traderCompanyTypeMatch) {
		$this->traderCompanyTypeMatch = $traderCompanyTypeMatch;

		return $this;
	}

	/**
	 * @return MatchCode
	 */
	public function getTraderStreetMatch() {
		return $this->traderStreetMatch;
	}

	/**
	 * @param MatchCode $traderStreetMatch
	 * @return CheckVatApproxResponse
	 */
	public function setTraderStreetMatch($traderStreetMatch) {
		$this->traderStreetMatch = $traderStreetMatch;

		return $this;
	}

	/**
	 * @return MatchCode
	 */
	public function getTraderPostcodeMatch() {
		return $this->traderPostcodeMatch;
	}

	/**
	 * @param MatchCode $traderPostcodeMatch
	 * @return CheckVatApproxResponse
	 */
	public function setTraderPostcodeMatch($traderPostcodeMatch) {
		$this->traderPostcodeMatch = $traderPostcodeMatch;

		return $this;
	}

	/**
	 * @return MatchCode
	 */
	public function getTraderCityMatch() {
		return $this->traderCityMatch;
	}

	/**
	 * @param MatchCode $traderCityMatch
	 * @return CheckVatApproxResponse
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
	 * @return CheckVatApproxResponse
	 */
	public function setRequestIdentifier($requestIdentifier) {
		$this->requestIdentifier = $requestIdentifier;

		return $this;
	}

}
