<?php
/**
 * Fontis Westpac QuickGateway Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so they can send you a copy immediately.
 *
 * @category   Fontis
 * @package    Fontis_Westpac
 * @author     Chris Norton
 * @author     Tom Greenaway
 * @author     Peter Spiller
 * @copyright  Copyright (c) 2009 Fontis Pty. Ltd. (http://www.fontis.com.au)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Fontis_Westpac_Model_QuickGateway_Api_Request extends Varien_Object
{
	public function __call($method, $args)
	{
		switch (substr($method, 0, 3)) {
			case 'get' :
				$key = substr($method,3);
				$data = $this->getData($key, isset($args[0]) ? $args[0] : null);
				return $data;

			case 'set' :
				$key = substr($method,3);
				$result = $this->setData($key, isset($args[0]) ? $args[0] : null);
				return $result;

			default:
				return parent::__call($method, $args);
		}
		throw new Varien_Exception("Invalid method ".get_class($this)."::".$method."(".print_r($args,1).")");
	}
}

?>
