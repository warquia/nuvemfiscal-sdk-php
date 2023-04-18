<?php
/**
 * MdfeSefazProdPred
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
 * MdfeSefazProdPred Class Doc Comment
 *
 * @category Class
 * @description Produto predominante.  Informar a descrição do produto predominante.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazProdPred implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazProdPred';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tp_carga' => 'string',
        'x_prod' => 'string',
        'c_ean' => 'string',
        'ncm' => 'string',
        'inf_lotacao' => '\NuvemFiscal\Model\MdfeSefazInfLotacao'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tp_carga' => null,
        'x_prod' => null,
        'c_ean' => null,
        'ncm' => null,
        'inf_lotacao' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tp_carga' => false,
		'x_prod' => false,
		'c_ean' => false,
		'ncm' => false,
		'inf_lotacao' => false
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
        'tp_carga' => 'tpCarga',
        'x_prod' => 'xProd',
        'c_ean' => 'cEAN',
        'ncm' => 'NCM',
        'inf_lotacao' => 'infLotacao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tp_carga' => 'setTpCarga',
        'x_prod' => 'setXProd',
        'c_ean' => 'setCEan',
        'ncm' => 'setNcm',
        'inf_lotacao' => 'setInfLotacao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tp_carga' => 'getTpCarga',
        'x_prod' => 'getXProd',
        'c_ean' => 'getCEan',
        'ncm' => 'getNcm',
        'inf_lotacao' => 'getInfLotacao'
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
        $this->setIfExists('tp_carga', $data ?? [], null);
        $this->setIfExists('x_prod', $data ?? [], null);
        $this->setIfExists('c_ean', $data ?? [], null);
        $this->setIfExists('ncm', $data ?? [], null);
        $this->setIfExists('inf_lotacao', $data ?? [], null);
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

        if ($this->container['tp_carga'] === null) {
            $invalidProperties[] = "'tp_carga' can't be null";
        }
        if ($this->container['x_prod'] === null) {
            $invalidProperties[] = "'x_prod' can't be null";
        }
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
     * Gets tp_carga
     *
     * @return string
     */
    public function getTpCarga()
    {
        return $this->container['tp_carga'];
    }

    /**
     * Sets tp_carga
     *
     * @param string $tp_carga Tipo de Carga.  Conforme Resolução ANTT nº.  5.849/2019.  * 01 - Granel sólido  * 02 - Granel líquido  * 03 - Frigorificada  * 04 - Conteinerizada  * 05 - Carga Geral  * 06 - Neogranel  * 07 - Perigosa (granel sólido)  * 08 - Perigosa (granel líquido)  * 09 - Perigosa (carga frigorificada)  * 10 - Perigosa (conteinerizada)  * 11 - Perigosa (carga geral)
     *
     * @return self
     */
    public function setTpCarga($tp_carga)
    {
        if (is_null($tp_carga)) {
            throw new \InvalidArgumentException('non-nullable tp_carga cannot be null');
        }
        $this->container['tp_carga'] = $tp_carga;

        return $this;
    }

    /**
     * Gets x_prod
     *
     * @return string
     */
    public function getXProd()
    {
        return $this->container['x_prod'];
    }

    /**
     * Sets x_prod
     *
     * @param string $x_prod Descrição do produto.
     *
     * @return self
     */
    public function setXProd($x_prod)
    {
        if (is_null($x_prod)) {
            throw new \InvalidArgumentException('non-nullable x_prod cannot be null');
        }
        $this->container['x_prod'] = $x_prod;

        return $this;
    }

    /**
     * Gets c_ean
     *
     * @return string|null
     */
    public function getCEan()
    {
        return $this->container['c_ean'];
    }

    /**
     * Sets c_ean
     *
     * @param string|null $c_ean GTIN (Global Trade Item Number) do produto, antigo código EAN ou código de barras.
     *
     * @return self
     */
    public function setCEan($c_ean)
    {
        if (is_null($c_ean)) {
            throw new \InvalidArgumentException('non-nullable c_ean cannot be null');
        }
        $this->container['c_ean'] = $c_ean;

        return $this;
    }

    /**
     * Gets ncm
     *
     * @return string|null
     */
    public function getNcm()
    {
        return $this->container['ncm'];
    }

    /**
     * Sets ncm
     *
     * @param string|null $ncm Código NCM.
     *
     * @return self
     */
    public function setNcm($ncm)
    {
        if (is_null($ncm)) {
            throw new \InvalidArgumentException('non-nullable ncm cannot be null');
        }
        $this->container['ncm'] = $ncm;

        return $this;
    }

    /**
     * Gets inf_lotacao
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfLotacao|null
     */
    public function getInfLotacao()
    {
        return $this->container['inf_lotacao'];
    }

    /**
     * Sets inf_lotacao
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfLotacao|null $inf_lotacao inf_lotacao
     *
     * @return self
     */
    public function setInfLotacao($inf_lotacao)
    {
        if (is_null($inf_lotacao)) {
            throw new \InvalidArgumentException('non-nullable inf_lotacao cannot be null');
        }
        $this->container['inf_lotacao'] = $inf_lotacao;

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


