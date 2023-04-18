<?php
/**
 * Endereco
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
 * Endereco Class Doc Comment
 *
 * @category Class
 * @description Dados de endereço.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Endereco implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Endereco';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'end_nac' => '\NuvemFiscal\Model\EnderNac',
        'end_ext' => '\NuvemFiscal\Model\EnderExt',
        'x_lgr' => 'string',
        'nro' => 'string',
        'x_cpl' => 'string',
        'x_bairro' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'end_nac' => null,
        'end_ext' => null,
        'x_lgr' => null,
        'nro' => null,
        'x_cpl' => null,
        'x_bairro' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'end_nac' => false,
		'end_ext' => false,
		'x_lgr' => false,
		'nro' => false,
		'x_cpl' => false,
		'x_bairro' => false
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
        'end_nac' => 'endNac',
        'end_ext' => 'endExt',
        'x_lgr' => 'xLgr',
        'nro' => 'nro',
        'x_cpl' => 'xCpl',
        'x_bairro' => 'xBairro'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_nac' => 'setEndNac',
        'end_ext' => 'setEndExt',
        'x_lgr' => 'setXLgr',
        'nro' => 'setNro',
        'x_cpl' => 'setXCpl',
        'x_bairro' => 'setXBairro'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_nac' => 'getEndNac',
        'end_ext' => 'getEndExt',
        'x_lgr' => 'getXLgr',
        'nro' => 'getNro',
        'x_cpl' => 'getXCpl',
        'x_bairro' => 'getXBairro'
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
        $this->setIfExists('end_nac', $data ?? [], null);
        $this->setIfExists('end_ext', $data ?? [], null);
        $this->setIfExists('x_lgr', $data ?? [], null);
        $this->setIfExists('nro', $data ?? [], null);
        $this->setIfExists('x_cpl', $data ?? [], null);
        $this->setIfExists('x_bairro', $data ?? [], null);
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
     * Gets end_nac
     *
     * @return \NuvemFiscal\Model\EnderNac|null
     */
    public function getEndNac()
    {
        return $this->container['end_nac'];
    }

    /**
     * Sets end_nac
     *
     * @param \NuvemFiscal\Model\EnderNac|null $end_nac end_nac
     *
     * @return self
     */
    public function setEndNac($end_nac)
    {
        if (is_null($end_nac)) {
            throw new \InvalidArgumentException('non-nullable end_nac cannot be null');
        }
        $this->container['end_nac'] = $end_nac;

        return $this;
    }

    /**
     * Gets end_ext
     *
     * @return \NuvemFiscal\Model\EnderExt|null
     */
    public function getEndExt()
    {
        return $this->container['end_ext'];
    }

    /**
     * Sets end_ext
     *
     * @param \NuvemFiscal\Model\EnderExt|null $end_ext end_ext
     *
     * @return self
     */
    public function setEndExt($end_ext)
    {
        if (is_null($end_ext)) {
            throw new \InvalidArgumentException('non-nullable end_ext cannot be null');
        }
        $this->container['end_ext'] = $end_ext;

        return $this;
    }

    /**
     * Gets x_lgr
     *
     * @return string|null
     */
    public function getXLgr()
    {
        return $this->container['x_lgr'];
    }

    /**
     * Sets x_lgr
     *
     * @param string|null $x_lgr Tipo e nome do logradouro da localização do imóvel.
     *
     * @return self
     */
    public function setXLgr($x_lgr)
    {
        if (is_null($x_lgr)) {
            throw new \InvalidArgumentException('non-nullable x_lgr cannot be null');
        }
        $this->container['x_lgr'] = $x_lgr;

        return $this;
    }

    /**
     * Gets nro
     *
     * @return string|null
     */
    public function getNro()
    {
        return $this->container['nro'];
    }

    /**
     * Sets nro
     *
     * @param string|null $nro Número do imóvel.
     *
     * @return self
     */
    public function setNro($nro)
    {
        if (is_null($nro)) {
            throw new \InvalidArgumentException('non-nullable nro cannot be null');
        }
        $this->container['nro'] = $nro;

        return $this;
    }

    /**
     * Gets x_cpl
     *
     * @return string|null
     */
    public function getXCpl()
    {
        return $this->container['x_cpl'];
    }

    /**
     * Sets x_cpl
     *
     * @param string|null $x_cpl Complemento do endereço.
     *
     * @return self
     */
    public function setXCpl($x_cpl)
    {
        if (is_null($x_cpl)) {
            throw new \InvalidArgumentException('non-nullable x_cpl cannot be null');
        }
        $this->container['x_cpl'] = $x_cpl;

        return $this;
    }

    /**
     * Gets x_bairro
     *
     * @return string|null
     */
    public function getXBairro()
    {
        return $this->container['x_bairro'];
    }

    /**
     * Sets x_bairro
     *
     * @param string|null $x_bairro Bairro.
     *
     * @return self
     */
    public function setXBairro($x_bairro)
    {
        if (is_null($x_bairro)) {
            throw new \InvalidArgumentException('non-nullable x_bairro cannot be null');
        }
        $this->container['x_bairro'] = $x_bairro;

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


