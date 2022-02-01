<?php

namespace Compaya\ViesService;

use Compaya\ViesService\CheckVat;
use \Compaya\ViesService\checkVatResponse;
use Compaya\ViesService\checkVatApprox;
use Compaya\ViesService\checkVatApproxResponse;

class CheckVatService extends \SoapClient {
	/**
	 * @param array  $options A array of config values
	 * @param string $wsdl    The wsdl file to use
	 */
	public function __construct(array $options = array(), $wsdl = 'https://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl') {
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
