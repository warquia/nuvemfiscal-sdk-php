<?php
/**
 * ComExterior
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
 * ComExterior Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações relativas à exportação/importação de serviço prestado.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComExterior implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ComExterior';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'md_prestacao' => 'int',
        'vinc_prest' => 'int',
        'tp_moeda' => 'string',
        'v_serv_moeda' => 'float',
        'mec_af_comex_p' => 'string',
        'mec_af_comex_t' => 'string',
        'mov_temp_bens' => 'int',
        'n_di' => 'string',
        'n_re' => 'string',
        'mdic' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'md_prestacao' => null,
        'vinc_prest' => null,
        'tp_moeda' => null,
        'v_serv_moeda' => null,
        'mec_af_comex_p' => null,
        'mec_af_comex_t' => null,
        'mov_temp_bens' => null,
        'n_di' => null,
        'n_re' => null,
        'mdic' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'md_prestacao' => true,
		'vinc_prest' => true,
		'tp_moeda' => true,
		'v_serv_moeda' => true,
		'mec_af_comex_p' => true,
		'mec_af_comex_t' => true,
		'mov_temp_bens' => true,
		'n_di' => true,
		'n_re' => true,
		'mdic' => true
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
        'md_prestacao' => 'mdPrestacao',
        'vinc_prest' => 'vincPrest',
        'tp_moeda' => 'tpMoeda',
        'v_serv_moeda' => 'vServMoeda',
        'mec_af_comex_p' => 'mecAFComexP',
        'mec_af_comex_t' => 'mecAFComexT',
        'mov_temp_bens' => 'movTempBens',
        'n_di' => 'nDI',
        'n_re' => 'nRE',
        'mdic' => 'mdic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'md_prestacao' => 'setMdPrestacao',
        'vinc_prest' => 'setVincPrest',
        'tp_moeda' => 'setTpMoeda',
        'v_serv_moeda' => 'setVServMoeda',
        'mec_af_comex_p' => 'setMecAfComexP',
        'mec_af_comex_t' => 'setMecAfComexT',
        'mov_temp_bens' => 'setMovTempBens',
        'n_di' => 'setNDi',
        'n_re' => 'setNRe',
        'mdic' => 'setMdic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'md_prestacao' => 'getMdPrestacao',
        'vinc_prest' => 'getVincPrest',
        'tp_moeda' => 'getTpMoeda',
        'v_serv_moeda' => 'getVServMoeda',
        'mec_af_comex_p' => 'getMecAfComexP',
        'mec_af_comex_t' => 'getMecAfComexT',
        'mov_temp_bens' => 'getMovTempBens',
        'n_di' => 'getNDi',
        'n_re' => 'getNRe',
        'mdic' => 'getMdic'
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
        $this->setIfExists('md_prestacao', $data ?? [], null);
        $this->setIfExists('vinc_prest', $data ?? [], null);
        $this->setIfExists('tp_moeda', $data ?? [], null);
        $this->setIfExists('v_serv_moeda', $data ?? [], null);
        $this->setIfExists('mec_af_comex_p', $data ?? [], null);
        $this->setIfExists('mec_af_comex_t', $data ?? [], null);
        $this->setIfExists('mov_temp_bens', $data ?? [], null);
        $this->setIfExists('n_di', $data ?? [], null);
        $this->setIfExists('n_re', $data ?? [], null);
        $this->setIfExists('mdic', $data ?? [], null);
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

        if ($this->container['md_prestacao'] === null) {
            $invalidProperties[] = "'md_prestacao' can't be null";
        }
        if ($this->container['vinc_prest'] === null) {
            $invalidProperties[] = "'vinc_prest' can't be null";
        }
        if ($this->container['tp_moeda'] === null) {
            $invalidProperties[] = "'tp_moeda' can't be null";
        }
        if ($this->container['v_serv_moeda'] === null) {
            $invalidProperties[] = "'v_serv_moeda' can't be null";
        }
        if ($this->container['mec_af_comex_p'] === null) {
            $invalidProperties[] = "'mec_af_comex_p' can't be null";
        }
        if ($this->container['mec_af_comex_t'] === null) {
            $invalidProperties[] = "'mec_af_comex_t' can't be null";
        }
        if ($this->container['mov_temp_bens'] === null) {
            $invalidProperties[] = "'mov_temp_bens' can't be null";
        }
        if ($this->container['mdic'] === null) {
            $invalidProperties[] = "'mdic' can't be null";
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
     * Gets md_prestacao
     *
     * @return int
     */
    public function getMdPrestacao()
    {
        return $this->container['md_prestacao'];
    }

    /**
     * Sets md_prestacao
     *
     * @param int $md_prestacao Modo de Prestação:  * 0 - Desconhecido (tipo não informado na nota de origem)  * 1 - Transfronteiriço  * 2 - Consumo no Brasil  * 3 - Presença Comercial no Exterior  * 4 - Movimento Temporário de Pessoas Físicas
     *
     * @return self
     */
    public function setMdPrestacao($md_prestacao)
    {
        if (is_null($md_prestacao)) {
            array_push($this->openAPINullablesSetToNull, 'md_prestacao');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('md_prestacao', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['md_prestacao'] = $md_prestacao;

        return $this;
    }

    /**
     * Gets vinc_prest
     *
     * @return int
     */
    public function getVincPrest()
    {
        return $this->container['vinc_prest'];
    }

    /**
     * Sets vinc_prest
     *
     * @param int $vinc_prest Vínculo entre as partes no negócio:  * 0 - Sem vínculo com o tomador/ Prestador  * 1 - Controlada  * 2 - Controladora  * 3 - Coligada  * 4 - Matriz  * 5 - Filial ou sucursal  * 6 - Outro vínculo
     *
     * @return self
     */
    public function setVincPrest($vinc_prest)
    {
        if (is_null($vinc_prest)) {
            array_push($this->openAPINullablesSetToNull, 'vinc_prest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vinc_prest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vinc_prest'] = $vinc_prest;

        return $this;
    }

    /**
     * Gets tp_moeda
     *
     * @return string
     */
    public function getTpMoeda()
    {
        return $this->container['tp_moeda'];
    }

    /**
     * Sets tp_moeda
     *
     * @param string $tp_moeda Identifica a moeda da transação comercial.
     *
     * @return self
     */
    public function setTpMoeda($tp_moeda)
    {
        if (is_null($tp_moeda)) {
            array_push($this->openAPINullablesSetToNull, 'tp_moeda');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_moeda', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_moeda'] = $tp_moeda;

        return $this;
    }

    /**
     * Gets v_serv_moeda
     *
     * @return float
     */
    public function getVServMoeda()
    {
        return $this->container['v_serv_moeda'];
    }

    /**
     * Sets v_serv_moeda
     *
     * @param float $v_serv_moeda Valor do serviço prestado expresso em moeda estrangeira especificada em tpmoeda.
     *
     * @return self
     */
    public function setVServMoeda($v_serv_moeda)
    {
        if (is_null($v_serv_moeda)) {
            array_push($this->openAPINullablesSetToNull, 'v_serv_moeda');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_serv_moeda', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_serv_moeda'] = $v_serv_moeda;

        return $this;
    }

    /**
     * Gets mec_af_comex_p
     *
     * @return string
     */
    public function getMecAfComexP()
    {
        return $this->container['mec_af_comex_p'];
    }

    /**
     * Sets mec_af_comex_p
     *
     * @param string $mec_af_comex_p Mecanismo de apoio/fomento ao Comércio Exterior utilizado pelo prestador do serviço:  * 00 - Desconhecido (tipo não informado na nota de origem)  * 01 - Nenhum  * 02 - ACC - Adiantamento sobre Contrato de Câmbio - Redução a Zero do IR e do IOF  * 03 - ACE - Adiantamento sobre Cambiais Entregues - Redução a Zero do IR e do IOF  * 04 - BNDES-Exim Pós-Embarque - Serviços  * 05 - BNDES-Exim Pré-Embarque - Serviços  * 06 - FGE - Fundo de Garantia à Exportação  * 07 - PROEX - EQUALIZAÇÃO  * 08 - PROEX - Financiamento
     *
     * @return self
     */
    public function setMecAfComexP($mec_af_comex_p)
    {
        if (is_null($mec_af_comex_p)) {
            array_push($this->openAPINullablesSetToNull, 'mec_af_comex_p');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mec_af_comex_p', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mec_af_comex_p'] = $mec_af_comex_p;

        return $this;
    }

    /**
     * Gets mec_af_comex_t
     *
     * @return string
     */
    public function getMecAfComexT()
    {
        return $this->container['mec_af_comex_t'];
    }

    /**
     * Sets mec_af_comex_t
     *
     * @param string $mec_af_comex_t Mecanismo de apoio/fomento ao Comércio Exterior utilizado pelo tomador do serviço:  * 00 - Desconhecido (tipo não informado na nota de origem)  * 01 - Nenhum  * 02 - Adm. Pública e Repr. Internacional  * 03 - Alugueis e Arrend. Mercantil de maquinas, equip., embarc. e aeronaves  * 04 - Arrendamento Mercantil de aeronave para empresa de transporte aéreo público  * 05 - Comissão a agentes externos na exportação  * 06 - Despesas de armazenagem, mov. e transporte de carga no exterior  * 07 - Eventos FIFA (subsidiária)  * 08 - Eventos FIFA  * 09 - Fretes, arrendamentos de embarcações ou aeronaves e outros  * 10 - Material Aeronáutico  * 11 - Promoção de Bens no Exterior  * 12 - Promoção de Dest. Turísticos Brasileiros  * 13 - Promoção do Brasil no Exterior  * 14 - Promoção Serviços no Exterior  * 15 - RECINE  * 16 - RECOPA  * 17 - Registro e Manutenção de marcas, patentes e cultivares  * 18 - REICOMP  * 19 - REIDI  * 20 - REPENEC  * 21 - REPES  * 22 - RETAERO  * 23 - RETID  * 24 - Royalties, Assistência Técnica, Científica e Assemelhados  * 25 - Serviços de avaliação da conformidade vinculados aos Acordos da OMC  * 26 - ZPE
     *
     * @return self
     */
    public function setMecAfComexT($mec_af_comex_t)
    {
        if (is_null($mec_af_comex_t)) {
            array_push($this->openAPINullablesSetToNull, 'mec_af_comex_t');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mec_af_comex_t', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mec_af_comex_t'] = $mec_af_comex_t;

        return $this;
    }

    /**
     * Gets mov_temp_bens
     *
     * @return int
     */
    public function getMovTempBens()
    {
        return $this->container['mov_temp_bens'];
    }

    /**
     * Sets mov_temp_bens
     *
     * @param int $mov_temp_bens Operação está vinculada à Movimentação Temporária de Bens:  * 0 - Desconhecido (tipo não informado na nota de origem)  * 1 - Não  * 2 - Vinculada - Declaração de Importação  * 3 - Vinculada - Declaração de Exportação
     *
     * @return self
     */
    public function setMovTempBens($mov_temp_bens)
    {
        if (is_null($mov_temp_bens)) {
            array_push($this->openAPINullablesSetToNull, 'mov_temp_bens');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mov_temp_bens', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mov_temp_bens'] = $mov_temp_bens;

        return $this;
    }

    /**
     * Gets n_di
     *
     * @return string|null
     */
    public function getNDi()
    {
        return $this->container['n_di'];
    }

    /**
     * Sets n_di
     *
     * @param string|null $n_di Número da Declaração de Importação (DI/DSI/DA/DRI-E) averbado.
     *
     * @return self
     */
    public function setNDi($n_di)
    {
        if (is_null($n_di)) {
            array_push($this->openAPINullablesSetToNull, 'n_di');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_di', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_di'] = $n_di;

        return $this;
    }

    /**
     * Gets n_re
     *
     * @return string|null
     */
    public function getNRe()
    {
        return $this->container['n_re'];
    }

    /**
     * Sets n_re
     *
     * @param string|null $n_re Número do Registro de Exportação (RE) averbado.
     *
     * @return self
     */
    public function setNRe($n_re)
    {
        if (is_null($n_re)) {
            array_push($this->openAPINullablesSetToNull, 'n_re');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_re', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_re'] = $n_re;

        return $this;
    }

    /**
     * Gets mdic
     *
     * @return int
     */
    public function getMdic()
    {
        return $this->container['mdic'];
    }

    /**
     * Sets mdic
     *
     * @param int $mdic Compartilhar as informações da NFS-e gerada a partir desta DPS com a Secretaria de Comércio Exterior:  * 0 - Não enviar para o MDIC  * 1 - Enviar para o MDIC
     *
     * @return self
     */
    public function setMdic($mdic)
    {
        if (is_null($mdic)) {
            array_push($this->openAPINullablesSetToNull, 'mdic');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mdic', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mdic'] = $mdic;

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


