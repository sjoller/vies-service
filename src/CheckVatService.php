<?php

namespace Compaya\ViesService;

use SoapClient;
use SoapFault;

class CheckVatService extends SoapClient {
	/**
	 * @param array  $options An array of config values
	 * @param string $wsdl    The wsdl file to use
	 * @throws SoapFault
	 */
	public function __construct(array $options = array(), $wsdl = 'https://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl') {
		parent::__construct($wsdl, $options);
	}

	/**
	 * @param CheckVat $parameters
	 * @return CheckVatResponse
	 */
	public function CheckVat(CheckVat $parameters) {
		return $this->__soapCall('checkVat', array($parameters));
	}

	/**
	 * @param CheckVatApprox $parameters
	 * @return CheckVatApproxResponse
	 */
	public function CheckVatApprox(CheckVatApprox $parameters) {
		return $this->__soapCall('checkVatApprox', array($parameters));
	}

}
