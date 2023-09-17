<?php
/**
 * NfeSefazTransporta
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
 * NfeSefazTransporta Class Doc Comment
 *
 * @category Class
 * @description Dados do transportador.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazTransporta implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazTransporta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj' => 'string',
        'cpf' => 'string',
        'x_nome' => 'string',
        'ie' => 'string',
        'x_ender' => 'string',
        'x_mun' => 'string',
        'uf' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cnpj' => null,
        'cpf' => null,
        'x_nome' => null,
        'ie' => null,
        'x_ender' => null,
        'x_mun' => null,
        'uf' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cnpj' => true,
		'cpf' => true,
		'x_nome' => true,
		'ie' => true,
		'x_ender' => true,
		'x_mun' => true,
		'uf' => true
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
        'cnpj' => 'CNPJ',
        'cpf' => 'CPF',
        'x_nome' => 'xNome',
        'ie' => 'IE',
        'x_ender' => 'xEnder',
        'x_mun' => 'xMun',
        'uf' => 'UF'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cnpj' => 'setCnpj',
        'cpf' => 'setCpf',
        'x_nome' => 'setXNome',
        'ie' => 'setIe',
        'x_ender' => 'setXEnder',
        'x_mun' => 'setXMun',
        'uf' => 'setUf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cnpj' => 'getCnpj',
        'cpf' => 'getCpf',
        'x_nome' => 'getXNome',
        'ie' => 'getIe',
        'x_ender' => 'getXEnder',
        'x_mun' => 'getXMun',
        'uf' => 'getUf'
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
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('cpf', $data ?? [], null);
        $this->setIfExists('x_nome', $data ?? [], null);
        $this->setIfExists('ie', $data ?? [], null);
        $this->setIfExists('x_ender', $data ?? [], null);
        $this->setIfExists('x_mun', $data ?? [], null);
        $this->setIfExists('uf', $data ?? [], null);
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
     * Gets cnpj
     *
     * @return string|null
     */
    public function getCnpj()
    {
        return $this->container['cnpj'];
    }

    /**
     * Sets cnpj
     *
     * @param string|null $cnpj CNPJ do transportador.
     *
     * @return self
     */
    public function setCnpj($cnpj)
    {
        if (is_null($cnpj)) {
            array_push($this->openAPINullablesSetToNull, 'cnpj');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnpj', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets cpf
     *
     * @return string|null
     */
    public function getCpf()
    {
        return $this->container['cpf'];
    }

    /**
     * Sets cpf
     *
     * @param string|null $cpf CPF do transportador.
     *
     * @return self
     */
    public function setCpf($cpf)
    {
        if (is_null($cpf)) {
            array_push($this->openAPINullablesSetToNull, 'cpf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cpf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cpf'] = $cpf;

        return $this;
    }

    /**
     * Gets x_nome
     *
     * @return string|null
     */
    public function getXNome()
    {
        return $this->container['x_nome'];
    }

    /**
     * Sets x_nome
     *
     * @param string|null $x_nome Razão Social ou nome do transportador.
     *
     * @return self
     */
    public function setXNome($x_nome)
    {
        if (is_null($x_nome)) {
            array_push($this->openAPINullablesSetToNull, 'x_nome');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_nome', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['x_nome'] = $x_nome;

        return $this;
    }

    /**
     * Gets ie
     *
     * @return string|null
     */
    public function getIe()
    {
        return $this->container['ie'];
    }

    /**
     * Sets ie
     *
     * @param string|null $ie Inscrição Estadual (v2.0).
     *
     * @return self
     */
    public function setIe($ie)
    {
        if (is_null($ie)) {
            array_push($this->openAPINullablesSetToNull, 'ie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ie'] = $ie;

        return $this;
    }

    /**
     * Gets x_ender
     *
     * @return string|null
     */
    public function getXEnder()
    {
        return $this->container['x_ender'];
    }

    /**
     * Sets x_ender
     *
     * @param string|null $x_ender Endereço completo.
     *
     * @return self
     */
    public function setXEnder($x_ender)
    {
        if (is_null($x_ender)) {
            array_push($this->openAPINullablesSetToNull, 'x_ender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_ender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['x_ender'] = $x_ender;

        return $this;
    }

    /**
     * Gets x_mun
     *
     * @return string|null
     */
    public function getXMun()
    {
        return $this->container['x_mun'];
    }

    /**
     * Sets x_mun
     *
     * @param string|null $x_mun Nome do munícipio.
     *
     * @return self
     */
    public function setXMun($x_mun)
    {
        if (is_null($x_mun)) {
            array_push($this->openAPINullablesSetToNull, 'x_mun');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_mun', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['x_mun'] = $x_mun;

        return $this;
    }

    /**
     * Gets uf
     *
     * @return string|null
     */
    public function getUf()
    {
        return $this->container['uf'];
    }

    /**
     * Sets uf
     *
     * @param string|null $uf Sigla da UF.
     *
     * @return self
     */
    public function setUf($uf)
    {
        if (is_null($uf)) {
            array_push($this->openAPINullablesSetToNull, 'uf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uf'] = $uf;

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


