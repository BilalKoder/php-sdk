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
 * SubscriptionProductComponentReference model
 *
 * @category    Class
 * @description The product component reference binds components from different product versions together. By binding them together the product version migration can be realized.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionProductComponentReference  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'SubscriptionProductComponentReference';

    /**
     * An array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    private static $swaggerTypes = array(
        'id' => 'int',
        'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
        'name' => 'string',
        'plannedPurgeDate' => 'string',
        'spaceId' => 'int',
        'state' => 'string',
        'version' => 'int'    );

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
    public static function swaggerTypes() {
        return self::$swaggerTypes;
    }
    
    
    /**
     * Values of state.
     */ 
    const STATE_CREATE = 'CREATE';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_DELETING = 'DELETING';
    const STATE_DELETED = 'DELETED';
    
    /**
     * Returns allowable values of state.
     *
     * @return string[]
     */
    public function getStateAllowableValues() {
        return [
            self::STATE_CREATE,
            self::STATE_ACTIVE,
            self::STATE_DELETING,
            self::STATE_DELETED,
        ];
    }
    
    
    /**
     * The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @var int
     */
    private $id;
    
    /**
     * @var \Wallee\Sdk\Model\EntityReference
     */
    private $linkedSpaceId;
    
    /**
     * The component reference name is used internally to identify the reference. For example the name is used within search fields and hence it should be distinct and descriptive.
     *
     * @var string
     */
    private $name;
    
    /**
     * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @var string
     */
    private $plannedPurgeDate;
    
    /**
     * 
     *
     * @var int
     */
    private $spaceId;
    
    /**
     * 
     *
     * @var string
     */
    private $state;
    
    /**
     * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
     *
     * @var int
     */
    private $version;
    

    /**
     * Constructor.
     *
     * @param mixed[] $data an associated array of property values initializing the model
     */
    public function __construct(array $data = null) {
        $this->setLinkedSpaceId(isset($data['linkedSpaceId']) ? $data['linkedSpaceId'] : null);
    }


    /**
     * Returns id.
     *
     * The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param int $id
     * @return SubscriptionProductComponentReference
     */
    protected function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Returns linkedSpaceId.
     *
     * @return \Wallee\Sdk\Model\EntityReference
     */
    public function getLinkedSpaceId() {
        return $this->linkedSpaceId;
    }

    /**
     * Sets linkedSpaceId.
     *
     * @param \Wallee\Sdk\Model\EntityReference $linkedSpaceId
     * @return SubscriptionProductComponentReference
     */
    public function setLinkedSpaceId($linkedSpaceId) {
        $this->linkedSpaceId = $linkedSpaceId;

        return $this;
    }

    /**
     * Returns name.
     *
     * The component reference name is used internally to identify the reference. For example the name is used within search fields and hence it should be distinct and descriptive.
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string $name
     * @return SubscriptionProductComponentReference
     */
    protected function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Returns plannedPurgeDate.
     *
     * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @return string
     */
    public function getPlannedPurgeDate() {
        return $this->plannedPurgeDate;
    }

    /**
     * Sets plannedPurgeDate.
     *
     * @param string $plannedPurgeDate
     * @return SubscriptionProductComponentReference
     */
    protected function setPlannedPurgeDate($plannedPurgeDate) {
        $this->plannedPurgeDate = $plannedPurgeDate;

        return $this;
    }

    /**
     * Returns spaceId.
     *
     * 
     *
     * @return int
     */
    public function getSpaceId() {
        return $this->spaceId;
    }

    /**
     * Sets spaceId.
     *
     * @param int $spaceId
     * @return SubscriptionProductComponentReference
     */
    protected function setSpaceId($spaceId) {
        $this->spaceId = $spaceId;

        return $this;
    }

    /**
     * Returns state.
     *
     * 
     *
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Sets state.
     *
     * @param string $state
     * @return SubscriptionProductComponentReference
     */
    protected function setState($state) {
        $allowed_values = array('CREATE', 'ACTIVE', 'DELETING', 'DELETED');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'ACTIVE', 'DELETING', 'DELETED'");
        }
        $this->state = $state;

        return $this;
    }

    /**
     * Returns version.
     *
     * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
     *
     * @return int
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * Sets version.
     *
     * @param int $version
     * @return SubscriptionProductComponentReference
     */
    protected function setVersion($version) {
        $this->version = $version;

        return $this;
    }
    
    /**
     * Validates the model's properties and throws a ValidationException if the validation fails.
     *
     * @throws ValidationException
     */
    public function validate() {
        
        if ($this->getName() === null) {
        	throw new ValidationException("'name' can't be null", 'name', $this);
        }
        $allowed_values = ["CREATE", "ACTIVE", "DELETING", "DELETED"];
        if (!in_array($this->getState(), $allowed_values)) {
            throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
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
