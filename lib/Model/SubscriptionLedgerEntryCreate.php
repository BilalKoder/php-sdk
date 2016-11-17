<?php
/**
 * Wallee SDK
 *
 * This library allows to interact with the Wallee payment service.
 * Wallee SDK: 1.0.0
 * 
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Wallee\Sdk\Model;

use \Wallee\Sdk\ValidationException;

/**
 * SubscriptionLedgerEntryCreate model
 *
 * @category    Class
 * @description The subscription ledger entry represents a single change on the subscription balance.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionLedgerEntryCreate extends SubscriptionLedgerEntry  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'SubscriptionLedgerEntry.Create';

    /**
     * An array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    private static $swaggerTypes = array(
    );

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
    public static function swaggerTypes() {
        return self::$swaggerTypes + parent::swaggerTypes();
    }
    
    
    

    /**
     * Constructor.
     *
     * @param mixed[] $data an associated array of property values initializing the model
     */
    public function __construct(array $data = null) {
        parent::__construct($data);

        $this->setAmountIncludingTax(isset($data['amountIncludingTax']) ? $data['amountIncludingTax'] : null);
        $this->setExternalId(isset($data['externalId']) ? $data['externalId'] : null);
        $this->setQuantity(isset($data['quantity']) ? $data['quantity'] : null);
        $this->setSubscriptionVersion(isset($data['subscriptionVersion']) ? $data['subscriptionVersion'] : null);
        $this->setTaxes(isset($data['taxes']) ? $data['taxes'] : null);
        $this->setTitle(isset($data['title']) ? $data['title'] : null);
    }


    /**
     * Returns amountIncludingTax.
     *
     * 
     *
     * @return float
     */
    public function getAmountIncludingTax() {
        return parent::getAmountIncludingTax();
    }

    /**
     * Sets amountIncludingTax.
     *
     * @param float $amountIncludingTax
     * @return SubscriptionLedgerEntryCreate
     */
    public function setAmountIncludingTax($amountIncludingTax) {
        return parent::setAmountIncludingTax($amountIncludingTax);
    }

    /**
     * Returns externalId.
     *
     * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
     *
     * @return string
     */
    public function getExternalId() {
        return parent::getExternalId();
    }

    /**
     * Sets externalId.
     *
     * @param string $externalId
     * @return SubscriptionLedgerEntryCreate
     */
    public function setExternalId($externalId) {
        return parent::setExternalId($externalId);
    }

    /**
     * Returns quantity.
     *
     * 
     *
     * @return float
     */
    public function getQuantity() {
        return parent::getQuantity();
    }

    /**
     * Sets quantity.
     *
     * @param float $quantity
     * @return SubscriptionLedgerEntryCreate
     */
    public function setQuantity($quantity) {
        return parent::setQuantity($quantity);
    }

    /**
     * Returns subscriptionVersion.
     *
     * @return \Wallee\Sdk\Model\EntityReference
     */
    public function getSubscriptionVersion() {
        return parent::getSubscriptionVersion();
    }

    /**
     * Sets subscriptionVersion.
     *
     * @param \Wallee\Sdk\Model\EntityReference $subscriptionVersion
     * @return SubscriptionLedgerEntryCreate
     */
    public function setSubscriptionVersion($subscriptionVersion) {
        return parent::setSubscriptionVersion($subscriptionVersion);
    }

    /**
     * Returns taxes.
     *
     * 
     *
     * @return \Wallee\Sdk\Model\TaxCreate[]
     */
    public function getTaxes() {
        return parent::getTaxes();
    }

    /**
     * Sets taxes.
     *
     * @param \Wallee\Sdk\Model\TaxCreate[] $taxes
     * @return SubscriptionLedgerEntryCreate
     */
    public function setTaxes($taxes) {
        return parent::setTaxes($taxes);
    }

    /**
     * Returns title.
     *
     * 
     *
     * @return string
     */
    public function getTitle() {
        return parent::getTitle();
    }

    /**
     * Sets title.
     *
     * @param string $title
     * @return SubscriptionLedgerEntryCreate
     */
    public function setTitle($title) {
        return parent::setTitle($title);
    }
    
    /**
     * Validates the model's properties and throws a ValidationException if the validation fails.
     *
     * @throws ValidationException
     */
    public function validate() {
        parent::validate();
        
        if ($this->getAmountIncludingTax() === null) {
        	throw new ValidationException("'amountIncludingTax' can't be null", 'amountIncludingTax', $this);
        }
        if ($this->getExternalId() === null) {
        	throw new ValidationException("'externalId' can't be null", 'externalId', $this);
        }
        if ($this->getQuantity() === null) {
        	throw new ValidationException("'quantity' can't be null", 'quantity', $this);
        }
        if ($this->getTitle() === null) {
        	throw new ValidationException("'title' can't be null", 'title', $this);
        }
    }

    /**
     * Returns true if all the properties in the model are valid.
     *
     * @return boolean
     */
    public function isValid() {
    	try {
    		$this->validate();
    		return true;
    	} catch (ValidationException $e) {
    		return false;
    	}
    }

    /**
     * Returns the string presentation of the object.
     *
     * @return string
     */
    public function __toString() {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this));
    }
    
}
