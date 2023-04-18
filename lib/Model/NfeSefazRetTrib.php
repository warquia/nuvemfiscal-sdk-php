<?php
/**
 * NfeSefazRetTrib
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
 * OpenAPI Generator version: 6.5.0
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
 * NfeSefazRetTrib Class Doc Comment
 *
 * @category Class
 * @description Retenção de Tributos Federais.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazRetTrib implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazRetTrib';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'v_ret_pis' => 'float',
        'v_ret_cofins' => 'float',
        'v_ret_csll' => 'float',
        'v_bcirrf' => 'float',
        'v_irrf' => 'float',
        'v_bc_ret_prev' => 'float',
        'v_ret_prev' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'v_ret_pis' => null,
        'v_ret_cofins' => null,
        'v_ret_csll' => null,
        'v_bcirrf' => null,
        'v_irrf' => null,
        'v_bc_ret_prev' => null,
        'v_ret_prev' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'v_ret_pis' => false,
		'v_ret_cofins' => false,
		'v_ret_csll' => false,
		'v_bcirrf' => false,
		'v_irrf' => false,
		'v_bc_ret_prev' => false,
		'v_ret_prev' => false
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
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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
        'v_ret_pis' => 'vRetPIS',
        'v_ret_cofins' => 'vRetCOFINS',
        'v_ret_csll' => 'vRetCSLL',
        'v_bcirrf' => 'vBCIRRF',
        'v_irrf' => 'vIRRF',
        'v_bc_ret_prev' => 'vBCRetPrev',
        'v_ret_prev' => 'vRetPrev'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'v_ret_pis' => 'setVRetPis',
        'v_ret_cofins' => 'setVRetCofins',
        'v_ret_csll' => 'setVRetCsll',
        'v_bcirrf' => 'setVBcirrf',
        'v_irrf' => 'setVIrrf',
        'v_bc_ret_prev' => 'setVBcRetPrev',
        'v_ret_prev' => 'setVRetPrev'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'v_ret_pis' => 'getVRetPis',
        'v_ret_cofins' => 'getVRetCofins',
        'v_ret_csll' => 'getVRetCsll',
        'v_bcirrf' => 'getVBcirrf',
        'v_irrf' => 'getVIrrf',
        'v_bc_ret_prev' => 'getVBcRetPrev',
        'v_ret_prev' => 'getVRetPrev'
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
        $this->setIfExists('v_ret_pis', $data ?? [], null);
        $this->setIfExists('v_ret_cofins', $data ?? [], null);
        $this->setIfExists('v_ret_csll', $data ?? [], null);
        $this->setIfExists('v_bcirrf', $data ?? [], null);
        $this->setIfExists('v_irrf', $data ?? [], null);
        $this->setIfExists('v_bc_ret_prev', $data ?? [], null);
        $this->setIfExists('v_ret_prev', $data ?? [], null);
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
     * Gets v_ret_pis
     *
     * @return float|null
     */
    public function getVRetPis()
    {
        return $this->container['v_ret_pis'];
    }

    /**
     * Sets v_ret_pis
     *
     * @param float|null $v_ret_pis Valor Retido de PIS.
     *
     * @return self
     */
    public function setVRetPis($v_ret_pis)
    {
        if (is_null($v_ret_pis)) {
            throw new \InvalidArgumentException('non-nullable v_ret_pis cannot be null');
        }
        $this->container['v_ret_pis'] = $v_ret_pis;

        return $this;
    }

    /**
     * Gets v_ret_cofins
     *
     * @return float|null
     */
    public function getVRetCofins()
    {
        return $this->container['v_ret_cofins'];
    }

    /**
     * Sets v_ret_cofins
     *
     * @param float|null $v_ret_cofins Valor Retido de COFINS.
     *
     * @return self
     */
    public function setVRetCofins($v_ret_cofins)
    {
        if (is_null($v_ret_cofins)) {
            throw new \InvalidArgumentException('non-nullable v_ret_cofins cannot be null');
        }
        $this->container['v_ret_cofins'] = $v_ret_cofins;

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
     * @param float|null $v_ret_csll Valor Retido de CSLL.
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
     * Gets v_bcirrf
     *
     * @return float|null
     */
    public function getVBcirrf()
    {
        return $this->container['v_bcirrf'];
    }

    /**
     * Sets v_bcirrf
     *
     * @param float|null $v_bcirrf Base de Cálculo do IRRF.
     *
     * @return self
     */
    public function setVBcirrf($v_bcirrf)
    {
        if (is_null($v_bcirrf)) {
            throw new \InvalidArgumentException('non-nullable v_bcirrf cannot be null');
        }
        $this->container['v_bcirrf'] = $v_bcirrf;

        return $this;
    }

    /**
     * Gets v_irrf
     *
     * @return float|null
     */
    public function getVIrrf()
    {
        return $this->container['v_irrf'];
    }

    /**
     * Sets v_irrf
     *
     * @param float|null $v_irrf Valor Retido de IRRF.
     *
     * @return self
     */
    public function setVIrrf($v_irrf)
    {
        if (is_null($v_irrf)) {
            throw new \InvalidArgumentException('non-nullable v_irrf cannot be null');
        }
        $this->container['v_irrf'] = $v_irrf;

        return $this;
    }

    /**
     * Gets v_bc_ret_prev
     *
     * @return float|null
     */
    public function getVBcRetPrev()
    {
        return $this->container['v_bc_ret_prev'];
    }

    /**
     * Sets v_bc_ret_prev
     *
     * @param float|null $v_bc_ret_prev Base de Cálculo da Retenção da Previdêncica Social.
     *
     * @return self
     */
    public function setVBcRetPrev($v_bc_ret_prev)
    {
        if (is_null($v_bc_ret_prev)) {
            throw new \InvalidArgumentException('non-nullable v_bc_ret_prev cannot be null');
        }
        $this->container['v_bc_ret_prev'] = $v_bc_ret_prev;

        return $this;
    }

    /**
     * Gets v_ret_prev
     *
     * @return float|null
     */
    public function getVRetPrev()
    {
        return $this->container['v_ret_prev'];
    }

    /**
     * Sets v_ret_prev
     *
     * @param float|null $v_ret_prev Valor da Retenção da Previdêncica Social.
     *
     * @return self
     */
    public function setVRetPrev($v_ret_prev)
    {
        if (is_null($v_ret_prev)) {
            throw new \InvalidArgumentException('non-nullable v_ret_prev cannot be null');
        }
        $this->container['v_ret_prev'] = $v_ret_prev;

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


