<?php

namespace Compaya\ViesService;

use Compaya\ViesService\CheckVat;
use Compaya\ViesService\CheckVatResponse;
use Compaya\ViesService\checkVatApprox;

class CheckVatTestService extends \SoapClient {
	/**
	 * @param array  $options A array of config values
	 * @param string $wsdl    The wsdl file to use
	 */
	public function __construct(array $options = [], $wsdl = 'https://ec.europa.eu/taxation_customs/vies/checkVatTestService.wsdl') {
		parent::__construct($wsdl, $options);
	}

	/**
	 * @param checkVat $parameters
	 * @return checkVatResponse
	 */
	public function checkVat(checkVat $parameters) {
		return $this->__soapCall('checkVat', array($parameters));
	}

	/**
	 * @param checkVatApprox $parameters
	 * @return checkVatApproxResponse
	 */
	public function checkVatApprox(checkVatApprox $parameters) {
		return $this->__soapCall('checkVatApprox', array($parameters));
	}

}
