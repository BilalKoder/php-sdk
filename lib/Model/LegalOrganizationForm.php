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
 * LegalOrganizationForm model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class LegalOrganizationForm  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'LegalOrganizationForm';

    /**
     * An array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    private static $swaggerTypes = array(
        'country' => 'string',
        'description' => '\Wallee\Sdk\Model\LocalizedString[]',
        'englishDescription' => 'string',
        'id' => 'int',
        'shortcut' => '\Wallee\Sdk\Model\LocalizedString[]'    );

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
    public static function swaggerTypes() {
        return self::$swaggerTypes;
    }
    
    
    
    /**
     * 
     *
     * @var string
     */
    private $country;
    
    /**
     * 
     *
     * @var \Wallee\Sdk\Model\LocalizedString[]
     */
    private $description;
    
    /**
     * 
     *
     * @var string
     */
    private $englishDescription;
    
    /**
     * The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @var int
     */
    private $id;
    
    /**
     * 
     *
     * @var \Wallee\Sdk\Model\LocalizedString[]
     */
    private $shortcut;
    

    /**
     * Constructor.
     *
     * @param mixed[] $data an associated array of property values initializing the model
     */
    public function __construct(array $data = null) {
        $this->setDescription(isset($data['description']) ? $data['description'] : null);
        $this->setShortcut(isset($data['shortcut']) ? $data['shortcut'] : null);
    }


    /**
     * Returns country.
     *
     * 
     *
     * @return string
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Sets country.
     *
     * @param string $country
     * @return LegalOrganizationForm
     */
    protected function setCountry($country) {
        $this->country = $country;

        return $this;
    }

    /**
     * Returns description.
     *
     * 
     *
     * @return \Wallee\Sdk\Model\LocalizedString[]
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Sets description.
     *
     * @param \Wallee\Sdk\Model\LocalizedString[] $description
     * @return LegalOrganizationForm
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Returns englishDescription.
     *
     * 
     *
     * @return string
     */
    public function getEnglishDescription() {
        return $this->englishDescription;
    }

    /**
     * Sets englishDescription.
     *
     * @param string $englishDescription
     * @return LegalOrganizationForm
     */
    protected function setEnglishDescription($englishDescription) {
        $this->englishDescription = $englishDescription;

        return $this;
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
     * @return LegalOrganizationForm
     */
    protected function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Returns shortcut.
     *
     * 
     *
     * @return \Wallee\Sdk\Model\LocalizedString[]
     */
    public function getShortcut() {
        return $this->shortcut;
    }

    /**
     * Sets shortcut.
     *
     * @param \Wallee\Sdk\Model\LocalizedString[] $shortcut
     * @return LegalOrganizationForm
     */
    public function setShortcut($shortcut) {
        $this->shortcut = $shortcut;

        return $this;
    }
    
    /**
     * Validates the model's properties and throws a ValidationException if the validation fails.
     *
     * @throws ValidationException
     */
    public function validate() {
        
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
