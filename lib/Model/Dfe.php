<?php
/**
 * Dfe
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
 * Dfe Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Dfe implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Dfe';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'ambiente' => 'string',
        'created_at' => '\DateTime',
        'status' => 'string',
        'referencia' => 'string',
        'data_emissao' => '\DateTime',
        'modelo' => 'int',
        'serie' => 'int',
        'numero' => 'int',
        'valor_total' => 'float',
        'chave' => 'string',
        'autorizacao' => '\NuvemFiscal\Model\DfeAutorizacao'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'ambiente' => null,
        'created_at' => 'date-time',
        'status' => null,
        'referencia' => null,
        'data_emissao' => 'date-time',
        'modelo' => null,
        'serie' => null,
        'numero' => null,
        'valor_total' => null,
        'chave' => null,
        'autorizacao' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'ambiente' => false,
		'created_at' => false,
		'status' => false,
		'referencia' => false,
		'data_emissao' => false,
		'modelo' => false,
		'serie' => false,
		'numero' => false,
		'valor_total' => false,
		'chave' => false,
		'autorizacao' => false
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
        'id' => 'id',
        'ambiente' => 'ambiente',
        'created_at' => 'created_at',
        'status' => 'status',
        'referencia' => 'referencia',
        'data_emissao' => 'data_emissao',
        'modelo' => 'modelo',
        'serie' => 'serie',
        'numero' => 'numero',
        'valor_total' => 'valor_total',
        'chave' => 'chave',
        'autorizacao' => 'autorizacao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ambiente' => 'setAmbiente',
        'created_at' => 'setCreatedAt',
        'status' => 'setStatus',
        'referencia' => 'setReferencia',
        'data_emissao' => 'setDataEmissao',
        'modelo' => 'setModelo',
        'serie' => 'setSerie',
        'numero' => 'setNumero',
        'valor_total' => 'setValorTotal',
        'chave' => 'setChave',
        'autorizacao' => 'setAutorizacao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ambiente' => 'getAmbiente',
        'created_at' => 'getCreatedAt',
        'status' => 'getStatus',
        'referencia' => 'getReferencia',
        'data_emissao' => 'getDataEmissao',
        'modelo' => 'getModelo',
        'serie' => 'getSerie',
        'numero' => 'getNumero',
        'valor_total' => 'getValorTotal',
        'chave' => 'getChave',
        'autorizacao' => 'getAutorizacao'
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

    public const AMBIENTE_HOMOLOGACAO = 'homologacao';
    public const AMBIENTE_PRODUCAO = 'producao';
    public const STATUS_PENDENTE = 'pendente';
    public const STATUS_AUTORIZADO = 'autorizado';
    public const STATUS_REJEITADO = 'rejeitado';
    public const STATUS_DENEGADO = 'denegado';
    public const STATUS_ENCERRADO = 'encerrado';
    public const STATUS_CANCELADO = 'cancelado';
    public const STATUS_ERRO = 'erro';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAmbienteAllowableValues()
    {
        return [
            self::AMBIENTE_HOMOLOGACAO,
            self::AMBIENTE_PRODUCAO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDENTE,
            self::STATUS_AUTORIZADO,
            self::STATUS_REJEITADO,
            self::STATUS_DENEGADO,
            self::STATUS_ENCERRADO,
            self::STATUS_CANCELADO,
            self::STATUS_ERRO,
        ];
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('ambiente', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('referencia', $data ?? [], null);
        $this->setIfExists('data_emissao', $data ?? [], null);
        $this->setIfExists('modelo', $data ?? [], null);
        $this->setIfExists('serie', $data ?? [], null);
        $this->setIfExists('numero', $data ?? [], null);
        $this->setIfExists('valor_total', $data ?? [], null);
        $this->setIfExists('chave', $data ?? [], null);
        $this->setIfExists('autorizacao', $data ?? [], null);
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

        $allowedValues = $this->getAmbienteAllowableValues();
        if (!is_null($this->container['ambiente']) && !in_array($this->container['ambiente'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ambiente', must be one of '%s'",
                $this->container['ambiente'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ID único gerado pela Nuvem Fiscal para este documento.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ambiente
     *
     * @return string|null
     */
    public function getAmbiente()
    {
        return $this->container['ambiente'];
    }

    /**
     * Sets ambiente
     *
     * @param string|null $ambiente ambiente
     *
     * @return self
     */
    public function setAmbiente($ambiente)
    {
        if (is_null($ambiente)) {
            throw new \InvalidArgumentException('non-nullable ambiente cannot be null');
        }
        $allowedValues = $this->getAmbienteAllowableValues();
        if (!in_array($ambiente, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ambiente', must be one of '%s'",
                    $ambiente,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ambiente'] = $ambiente;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Data/hora em que o documento foi criado na Nuvem Fiscal. Representado no formato <a href=\"https://en.wikipedia.org/wiki/ISO_8601\" target=\"blank\">`ISO 8601`</a>.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets referencia
     *
     * @return string|null
     */
    public function getReferencia()
    {
        return $this->container['referencia'];
    }

    /**
     * Sets referencia
     *
     * @param string|null $referencia Seu identificador único para este documento. Opcional, ajuda a evitar o envio duplicado de um mesmo documento.
     *
     * @return self
     */
    public function setReferencia($referencia)
    {
        if (is_null($referencia)) {
            throw new \InvalidArgumentException('non-nullable referencia cannot be null');
        }
        $this->container['referencia'] = $referencia;

        return $this;
    }

    /**
     * Gets data_emissao
     *
     * @return \DateTime|null
     */
    public function getDataEmissao()
    {
        return $this->container['data_emissao'];
    }

    /**
     * Sets data_emissao
     *
     * @param \DateTime|null $data_emissao data_emissao
     *
     * @return self
     */
    public function setDataEmissao($data_emissao)
    {
        if (is_null($data_emissao)) {
            throw new \InvalidArgumentException('non-nullable data_emissao cannot be null');
        }
        $this->container['data_emissao'] = $data_emissao;

        return $this;
    }

    /**
     * Gets modelo
     *
     * @return int|null
     */
    public function getModelo()
    {
        return $this->container['modelo'];
    }

    /**
     * Sets modelo
     *
     * @param int|null $modelo modelo
     *
     * @return self
     */
    public function setModelo($modelo)
    {
        if (is_null($modelo)) {
            throw new \InvalidArgumentException('non-nullable modelo cannot be null');
        }
        $this->container['modelo'] = $modelo;

        return $this;
    }

    /**
     * Gets serie
     *
     * @return int|null
     */
    public function getSerie()
    {
        return $this->container['serie'];
    }

    /**
     * Sets serie
     *
     * @param int|null $serie serie
     *
     * @return self
     */
    public function setSerie($serie)
    {
        if (is_null($serie)) {
            throw new \InvalidArgumentException('non-nullable serie cannot be null');
        }
        $this->container['serie'] = $serie;

        return $this;
    }

    /**
     * Gets numero
     *
     * @return int|null
     */
    public function getNumero()
    {
        return $this->container['numero'];
    }

    /**
     * Sets numero
     *
     * @param int|null $numero numero
     *
     * @return self
     */
    public function setNumero($numero)
    {
        if (is_null($numero)) {
            throw new \InvalidArgumentException('non-nullable numero cannot be null');
        }
        $this->container['numero'] = $numero;

        return $this;
    }

    /**
     * Gets valor_total
     *
     * @return float|null
     */
    public function getValorTotal()
    {
        return $this->container['valor_total'];
    }

    /**
     * Sets valor_total
     *
     * @param float|null $valor_total valor_total
     *
     * @return self
     */
    public function setValorTotal($valor_total)
    {
        if (is_null($valor_total)) {
            throw new \InvalidArgumentException('non-nullable valor_total cannot be null');
        }
        $this->container['valor_total'] = $valor_total;

        return $this;
    }

    /**
     * Gets chave
     *
     * @return string|null
     */
    public function getChave()
    {
        return $this->container['chave'];
    }

    /**
     * Sets chave
     *
     * @param string|null $chave Chave de acesso do DF-e.
     *
     * @return self
     */
    public function setChave($chave)
    {
        if (is_null($chave)) {
            throw new \InvalidArgumentException('non-nullable chave cannot be null');
        }
        $this->container['chave'] = $chave;

        return $this;
    }

    /**
     * Gets autorizacao
     *
     * @return \NuvemFiscal\Model\DfeAutorizacao|null
     */
    public function getAutorizacao()
    {
        return $this->container['autorizacao'];
    }

    /**
     * Sets autorizacao
     *
     * @param \NuvemFiscal\Model\DfeAutorizacao|null $autorizacao autorizacao
     *
     * @return self
     */
    public function setAutorizacao($autorizacao)
    {
        if (is_null($autorizacao)) {
            throw new \InvalidArgumentException('non-nullable autorizacao cannot be null');
        }
        $this->container['autorizacao'] = $autorizacao;

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


