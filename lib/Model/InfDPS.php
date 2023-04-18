<?php
/**
 * InfDPS
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
 * InfDPS Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações da DPS relativas ao serviço prestado.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InfDPS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InfDPS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tp_amb' => 'int',
        'dh_emi' => '\DateTime',
        'ver_aplic' => 'string',
        'd_compet' => '\DateTime',
        'subst' => '\NuvemFiscal\Model\Substituicao',
        'prest' => '\NuvemFiscal\Model\InfoPrestador',
        'toma' => '\NuvemFiscal\Model\InfoTomador',
        'interm' => '\NuvemFiscal\Model\InfoIntermediario',
        'serv' => '\NuvemFiscal\Model\Serv',
        'valores' => '\NuvemFiscal\Model\InfoValores'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tp_amb' => null,
        'dh_emi' => 'date-time',
        'ver_aplic' => null,
        'd_compet' => 'date',
        'subst' => null,
        'prest' => null,
        'toma' => null,
        'interm' => null,
        'serv' => null,
        'valores' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tp_amb' => false,
		'dh_emi' => false,
		'ver_aplic' => false,
		'd_compet' => false,
		'subst' => false,
		'prest' => false,
		'toma' => false,
		'interm' => false,
		'serv' => false,
		'valores' => false
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
        'tp_amb' => 'tpAmb',
        'dh_emi' => 'dhEmi',
        'ver_aplic' => 'verAplic',
        'd_compet' => 'dCompet',
        'subst' => 'subst',
        'prest' => 'prest',
        'toma' => 'toma',
        'interm' => 'interm',
        'serv' => 'serv',
        'valores' => 'valores'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tp_amb' => 'setTpAmb',
        'dh_emi' => 'setDhEmi',
        'ver_aplic' => 'setVerAplic',
        'd_compet' => 'setDCompet',
        'subst' => 'setSubst',
        'prest' => 'setPrest',
        'toma' => 'setToma',
        'interm' => 'setInterm',
        'serv' => 'setServ',
        'valores' => 'setValores'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tp_amb' => 'getTpAmb',
        'dh_emi' => 'getDhEmi',
        'ver_aplic' => 'getVerAplic',
        'd_compet' => 'getDCompet',
        'subst' => 'getSubst',
        'prest' => 'getPrest',
        'toma' => 'getToma',
        'interm' => 'getInterm',
        'serv' => 'getServ',
        'valores' => 'getValores'
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
        $this->setIfExists('tp_amb', $data ?? [], null);
        $this->setIfExists('dh_emi', $data ?? [], null);
        $this->setIfExists('ver_aplic', $data ?? [], null);
        $this->setIfExists('d_compet', $data ?? [], null);
        $this->setIfExists('subst', $data ?? [], null);
        $this->setIfExists('prest', $data ?? [], null);
        $this->setIfExists('toma', $data ?? [], null);
        $this->setIfExists('interm', $data ?? [], null);
        $this->setIfExists('serv', $data ?? [], null);
        $this->setIfExists('valores', $data ?? [], null);
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

        if ($this->container['dh_emi'] === null) {
            $invalidProperties[] = "'dh_emi' can't be null";
        }
        if ($this->container['d_compet'] === null) {
            $invalidProperties[] = "'d_compet' can't be null";
        }
        if ($this->container['prest'] === null) {
            $invalidProperties[] = "'prest' can't be null";
        }
        if ($this->container['serv'] === null) {
            $invalidProperties[] = "'serv' can't be null";
        }
        if ($this->container['valores'] === null) {
            $invalidProperties[] = "'valores' can't be null";
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
     * Gets tp_amb
     *
     * @return int|null
     */
    public function getTpAmb()
    {
        return $this->container['tp_amb'];
    }

    /**
     * Sets tp_amb
     *
     * @param int|null $tp_amb Identificação do Ambiente:  * 1 - Produção  * 2 - Homologação
     *
     * @return self
     */
    public function setTpAmb($tp_amb)
    {
        if (is_null($tp_amb)) {
            throw new \InvalidArgumentException('non-nullable tp_amb cannot be null');
        }
        $this->container['tp_amb'] = $tp_amb;

        return $this;
    }

    /**
     * Gets dh_emi
     *
     * @return \DateTime
     */
    public function getDhEmi()
    {
        return $this->container['dh_emi'];
    }

    /**
     * Sets dh_emi
     *
     * @param \DateTime $dh_emi Data e hora da emissão do DPS. Data e hora no formato UTC (Universal Coordinated Time): AAAA-MM-DDThh:mm:ssTZD.
     *
     * @return self
     */
    public function setDhEmi($dh_emi)
    {
        if (is_null($dh_emi)) {
            throw new \InvalidArgumentException('non-nullable dh_emi cannot be null');
        }
        $this->container['dh_emi'] = $dh_emi;

        return $this;
    }

    /**
     * Gets ver_aplic
     *
     * @return string|null
     */
    public function getVerAplic()
    {
        return $this->container['ver_aplic'];
    }

    /**
     * Sets ver_aplic
     *
     * @param string|null $ver_aplic Versão do aplicativo que gerou o DPS.
     *
     * @return self
     */
    public function setVerAplic($ver_aplic)
    {
        if (is_null($ver_aplic)) {
            throw new \InvalidArgumentException('non-nullable ver_aplic cannot be null');
        }
        $this->container['ver_aplic'] = $ver_aplic;

        return $this;
    }

    /**
     * Gets d_compet
     *
     * @return \DateTime
     */
    public function getDCompet()
    {
        return $this->container['d_compet'];
    }

    /**
     * Sets d_compet
     *
     * @param \DateTime $d_compet Data em que se iniciou a prestação do serviço: Dia, mês e ano (AAAAMMDD).
     *
     * @return self
     */
    public function setDCompet($d_compet)
    {
        if (is_null($d_compet)) {
            throw new \InvalidArgumentException('non-nullable d_compet cannot be null');
        }
        $this->container['d_compet'] = $d_compet;

        return $this;
    }

    /**
     * Gets subst
     *
     * @return \NuvemFiscal\Model\Substituicao|null
     */
    public function getSubst()
    {
        return $this->container['subst'];
    }

    /**
     * Sets subst
     *
     * @param \NuvemFiscal\Model\Substituicao|null $subst subst
     *
     * @return self
     */
    public function setSubst($subst)
    {
        if (is_null($subst)) {
            throw new \InvalidArgumentException('non-nullable subst cannot be null');
        }
        $this->container['subst'] = $subst;

        return $this;
    }

    /**
     * Gets prest
     *
     * @return \NuvemFiscal\Model\InfoPrestador
     */
    public function getPrest()
    {
        return $this->container['prest'];
    }

    /**
     * Sets prest
     *
     * @param \NuvemFiscal\Model\InfoPrestador $prest prest
     *
     * @return self
     */
    public function setPrest($prest)
    {
        if (is_null($prest)) {
            throw new \InvalidArgumentException('non-nullable prest cannot be null');
        }
        $this->container['prest'] = $prest;

        return $this;
    }

    /**
     * Gets toma
     *
     * @return \NuvemFiscal\Model\InfoTomador|null
     */
    public function getToma()
    {
        return $this->container['toma'];
    }

    /**
     * Sets toma
     *
     * @param \NuvemFiscal\Model\InfoTomador|null $toma toma
     *
     * @return self
     */
    public function setToma($toma)
    {
        if (is_null($toma)) {
            throw new \InvalidArgumentException('non-nullable toma cannot be null');
        }
        $this->container['toma'] = $toma;

        return $this;
    }

    /**
     * Gets interm
     *
     * @return \NuvemFiscal\Model\InfoIntermediario|null
     */
    public function getInterm()
    {
        return $this->container['interm'];
    }

    /**
     * Sets interm
     *
     * @param \NuvemFiscal\Model\InfoIntermediario|null $interm interm
     *
     * @return self
     */
    public function setInterm($interm)
    {
        if (is_null($interm)) {
            throw new \InvalidArgumentException('non-nullable interm cannot be null');
        }
        $this->container['interm'] = $interm;

        return $this;
    }

    /**
     * Gets serv
     *
     * @return \NuvemFiscal\Model\Serv
     */
    public function getServ()
    {
        return $this->container['serv'];
    }

    /**
     * Sets serv
     *
     * @param \NuvemFiscal\Model\Serv $serv serv
     *
     * @return self
     */
    public function setServ($serv)
    {
        if (is_null($serv)) {
            throw new \InvalidArgumentException('non-nullable serv cannot be null');
        }
        $this->container['serv'] = $serv;

        return $this;
    }

    /**
     * Gets valores
     *
     * @return \NuvemFiscal\Model\InfoValores
     */
    public function getValores()
    {
        return $this->container['valores'];
    }

    /**
     * Sets valores
     *
     * @param \NuvemFiscal\Model\InfoValores $valores valores
     *
     * @return self
     */
    public function setValores($valores)
    {
        if (is_null($valores)) {
            throw new \InvalidArgumentException('non-nullable valores cannot be null');
        }
        $this->container['valores'] = $valores;

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


