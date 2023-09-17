<?php
/**
 * CteSefazUnidadeTransp
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
 * CteSefazUnidadeTransp Class Doc Comment
 *
 * @category Class
 * @description Informações das Unidades de Transporte (Carreta/Reboque/Vagão).  Deve ser preenchido com as informações das unidades de transporte utilizadas.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazUnidadeTransp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazUnidadeTransp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tp_unid_transp' => 'int',
        'id_unid_transp' => 'string',
        'lac_unid_transp' => '\NuvemFiscal\Model\CteSefazLacUnidTransp[]',
        'inf_unid_carga' => '\NuvemFiscal\Model\CteSefazUnidCarga[]',
        'qtd_rat' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tp_unid_transp' => null,
        'id_unid_transp' => null,
        'lac_unid_transp' => null,
        'inf_unid_carga' => null,
        'qtd_rat' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tp_unid_transp' => true,
		'id_unid_transp' => true,
		'lac_unid_transp' => false,
		'inf_unid_carga' => false,
		'qtd_rat' => true
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
        'tp_unid_transp' => 'tpUnidTransp',
        'id_unid_transp' => 'idUnidTransp',
        'lac_unid_transp' => 'lacUnidTransp',
        'inf_unid_carga' => 'infUnidCarga',
        'qtd_rat' => 'qtdRat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tp_unid_transp' => 'setTpUnidTransp',
        'id_unid_transp' => 'setIdUnidTransp',
        'lac_unid_transp' => 'setLacUnidTransp',
        'inf_unid_carga' => 'setInfUnidCarga',
        'qtd_rat' => 'setQtdRat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tp_unid_transp' => 'getTpUnidTransp',
        'id_unid_transp' => 'getIdUnidTransp',
        'lac_unid_transp' => 'getLacUnidTransp',
        'inf_unid_carga' => 'getInfUnidCarga',
        'qtd_rat' => 'getQtdRat'
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
        $this->setIfExists('tp_unid_transp', $data ?? [], null);
        $this->setIfExists('id_unid_transp', $data ?? [], null);
        $this->setIfExists('lac_unid_transp', $data ?? [], null);
        $this->setIfExists('inf_unid_carga', $data ?? [], null);
        $this->setIfExists('qtd_rat', $data ?? [], null);
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

        if ($this->container['tp_unid_transp'] === null) {
            $invalidProperties[] = "'tp_unid_transp' can't be null";
        }
        if ($this->container['id_unid_transp'] === null) {
            $invalidProperties[] = "'id_unid_transp' can't be null";
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
     * Gets tp_unid_transp
     *
     * @return int
     */
    public function getTpUnidTransp()
    {
        return $this->container['tp_unid_transp'];
    }

    /**
     * Sets tp_unid_transp
     *
     * @param int $tp_unid_transp Tipo da Unidade de Transporte.  * 1 - Rodoviário Tração  * 2 - Rodoviário Reboque  * 3 - Navio  * 4 - Balsa  * 5 - Aeronave  * 6 - Vagão  * 7 - Outros
     *
     * @return self
     */
    public function setTpUnidTransp($tp_unid_transp)
    {
        if (is_null($tp_unid_transp)) {
            array_push($this->openAPINullablesSetToNull, 'tp_unid_transp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_unid_transp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_unid_transp'] = $tp_unid_transp;

        return $this;
    }

    /**
     * Gets id_unid_transp
     *
     * @return string
     */
    public function getIdUnidTransp()
    {
        return $this->container['id_unid_transp'];
    }

    /**
     * Sets id_unid_transp
     *
     * @param string $id_unid_transp Identificação da Unidade de Transporte.  Informar a identificação conforme o tipo de unidade de transporte.  Por exemplo: para rodoviário tração ou reboque deverá preencher com a placa do veículo.
     *
     * @return self
     */
    public function setIdUnidTransp($id_unid_transp)
    {
        if (is_null($id_unid_transp)) {
            array_push($this->openAPINullablesSetToNull, 'id_unid_transp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_unid_transp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_unid_transp'] = $id_unid_transp;

        return $this;
    }

    /**
     * Gets lac_unid_transp
     *
     * @return \NuvemFiscal\Model\CteSefazLacUnidTransp[]|null
     */
    public function getLacUnidTransp()
    {
        return $this->container['lac_unid_transp'];
    }

    /**
     * Sets lac_unid_transp
     *
     * @param \NuvemFiscal\Model\CteSefazLacUnidTransp[]|null $lac_unid_transp lac_unid_transp
     *
     * @return self
     */
    public function setLacUnidTransp($lac_unid_transp)
    {
        if (is_null($lac_unid_transp)) {
            throw new \InvalidArgumentException('non-nullable lac_unid_transp cannot be null');
        }
        $this->container['lac_unid_transp'] = $lac_unid_transp;

        return $this;
    }

    /**
     * Gets inf_unid_carga
     *
     * @return \NuvemFiscal\Model\CteSefazUnidCarga[]|null
     */
    public function getInfUnidCarga()
    {
        return $this->container['inf_unid_carga'];
    }

    /**
     * Sets inf_unid_carga
     *
     * @param \NuvemFiscal\Model\CteSefazUnidCarga[]|null $inf_unid_carga inf_unid_carga
     *
     * @return self
     */
    public function setInfUnidCarga($inf_unid_carga)
    {
        if (is_null($inf_unid_carga)) {
            throw new \InvalidArgumentException('non-nullable inf_unid_carga cannot be null');
        }
        $this->container['inf_unid_carga'] = $inf_unid_carga;

        return $this;
    }

    /**
     * Gets qtd_rat
     *
     * @return float|null
     */
    public function getQtdRat()
    {
        return $this->container['qtd_rat'];
    }

    /**
     * Sets qtd_rat
     *
     * @param float|null $qtd_rat Quantidade rateada (Peso,Volume).
     *
     * @return self
     */
    public function setQtdRat($qtd_rat)
    {
        if (is_null($qtd_rat)) {
            array_push($this->openAPINullablesSetToNull, 'qtd_rat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('qtd_rat', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['qtd_rat'] = $qtd_rat;

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


