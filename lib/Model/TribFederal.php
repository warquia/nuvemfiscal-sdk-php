<?php
/**
 * TribFederal
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Nuvem Fiscal
 *
 * API para automação comercial e documentos fiscais.
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NuvemFiscal\Model;

use \ArrayAccess;
use \NuvemFiscal\ObjectSerializer;

/**
 * TribFederal Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações de outros tributos relacionados ao serviço prestado.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TribFederal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TribFederal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'piscofins' => '\NuvemFiscal\Model\TribOutrosPisCofins',
        'v_ret_cp' => 'float',
        'v_ret_irrf' => 'float',
        'v_ret_csll' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'piscofins' => null,
        'v_ret_cp' => null,
        'v_ret_irrf' => null,
        'v_ret_csll' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'piscofins' => false,
		'v_ret_cp' => false,
		'v_ret_irrf' => false,
		'v_ret_csll' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'piscofins' => 'piscofins',
        'v_ret_cp' => 'vRetCP',
        'v_ret_irrf' => 'vRetIRRF',
        'v_ret_csll' => 'vRetCSLL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'piscofins' => 'setPiscofins',
        'v_ret_cp' => 'setVRetCp',
        'v_ret_irrf' => 'setVRetIrrf',
        'v_ret_csll' => 'setVRetCsll'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'piscofins' => 'getPiscofins',
        'v_ret_cp' => 'getVRetCp',
        'v_ret_irrf' => 'getVRetIrrf',
        'v_ret_csll' => 'getVRetCsll'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('piscofins', $data ?? [], null);
        $this->setIfExists('v_ret_cp', $data ?? [], null);
        $this->setIfExists('v_ret_irrf', $data ?? [], null);
        $this->setIfExists('v_ret_csll', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets piscofins
     *
     * @return \NuvemFiscal\Model\TribOutrosPisCofins|null
     */
    public function getPiscofins()
    {
        return $this->container['piscofins'];
    }

    /**
     * Sets piscofins
     *
     * @param \NuvemFiscal\Model\TribOutrosPisCofins|null $piscofins piscofins
     *
     * @return self
     */
    public function setPiscofins($piscofins)
    {

        if (is_null($piscofins)) {
            throw new \InvalidArgumentException('non-nullable piscofins cannot be null');
        }

        $this->container['piscofins'] = $piscofins;

        return $this;
    }

    /**
     * Gets v_ret_cp
     *
     * @return float|null
     */
    public function getVRetCp()
    {
        return $this->container['v_ret_cp'];
    }

    /**
     * Sets v_ret_cp
     *
     * @param float|null $v_ret_cp Valor monetário do CP(R$).
     *
     * @return self
     */
    public function setVRetCp($v_ret_cp)
    {

        if (is_null($v_ret_cp)) {
            throw new \InvalidArgumentException('non-nullable v_ret_cp cannot be null');
        }

        $this->container['v_ret_cp'] = $v_ret_cp;

        return $this;
    }

    /**
     * Gets v_ret_irrf
     *
     * @return float|null
     */
    public function getVRetIrrf()
    {
        return $this->container['v_ret_irrf'];
    }

    /**
     * Sets v_ret_irrf
     *
     * @param float|null $v_ret_irrf Valor monetário do IRRF (R$).
     *
     * @return self
     */
    public function setVRetIrrf($v_ret_irrf)
    {

        if (is_null($v_ret_irrf)) {
            throw new \InvalidArgumentException('non-nullable v_ret_irrf cannot be null');
        }

        $this->container['v_ret_irrf'] = $v_ret_irrf;

        return $this;
    }

    /**
     * Gets v_ret_csll
     *
     * @return float|null
     */
    public function getVRetCsll()
    {
        return $this->container['v_ret_csll'];
    }

    /**
     * Sets v_ret_csll
     *
     * @param float|null $v_ret_csll Valor monetário do CSLL (R$).
     *
     * @return self
     */
    public function setVRetCsll($v_ret_csll)
    {

        if (is_null($v_ret_csll)) {
            throw new \InvalidArgumentException('non-nullable v_ret_csll cannot be null');
        }

        $this->container['v_ret_csll'] = $v_ret_csll;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

