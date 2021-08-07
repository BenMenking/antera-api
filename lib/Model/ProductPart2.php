<?php
/**
 * ProductPart2
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Antera Api v1
 *
 * Antera API v1
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.27
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ProductPart2 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductPart2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductPart2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sku' => 'string',
'part_id' => 'string',
'inventory_key' => 'string',
'color_array' => '\Swagger\Client\Model\ColorArray',
'apparel_size' => '\Swagger\Client\Model\ApparelSize',
'part_price' => '\Swagger\Client\Model\PartPrice4'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sku' => null,
'part_id' => null,
'inventory_key' => null,
'color_array' => null,
'apparel_size' => null,
'part_price' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sku' => 'sku',
'part_id' => 'partId',
'inventory_key' => 'inventoryKey',
'color_array' => 'ColorArray',
'apparel_size' => 'ApparelSize',
'part_price' => 'partPrice'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
'part_id' => 'setPartId',
'inventory_key' => 'setInventoryKey',
'color_array' => 'setColorArray',
'apparel_size' => 'setApparelSize',
'part_price' => 'setPartPrice'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
'part_id' => 'getPartId',
'inventory_key' => 'getInventoryKey',
'color_array' => 'getColorArray',
'apparel_size' => 'getApparelSize',
'part_price' => 'getPartPrice'    ];

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
        return self::$swaggerModelName;
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
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['part_id'] = isset($data['part_id']) ? $data['part_id'] : null;
        $this->container['inventory_key'] = isset($data['inventory_key']) ? $data['inventory_key'] : null;
        $this->container['color_array'] = isset($data['color_array']) ? $data['color_array'] : null;
        $this->container['apparel_size'] = isset($data['apparel_size']) ? $data['apparel_size'] : null;
        $this->container['part_price'] = isset($data['part_price']) ? $data['part_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['part_id'] === null) {
            $invalidProperties[] = "'part_id' can't be null";
        }
        if ($this->container['inventory_key'] === null) {
            $invalidProperties[] = "'inventory_key' can't be null";
        }
        if ($this->container['color_array'] === null) {
            $invalidProperties[] = "'color_array' can't be null";
        }
        if ($this->container['apparel_size'] === null) {
            $invalidProperties[] = "'apparel_size' can't be null";
        }
        if ($this->container['part_price'] === null) {
            $invalidProperties[] = "'part_price' can't be null";
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
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets part_id
     *
     * @return string
     */
    public function getPartId()
    {
        return $this->container['part_id'];
    }

    /**
     * Sets part_id
     *
     * @param string $part_id part_id
     *
     * @return $this
     */
    public function setPartId($part_id)
    {
        $this->container['part_id'] = $part_id;

        return $this;
    }

    /**
     * Gets inventory_key
     *
     * @return string
     */
    public function getInventoryKey()
    {
        return $this->container['inventory_key'];
    }

    /**
     * Sets inventory_key
     *
     * @param string $inventory_key inventory_key
     *
     * @return $this
     */
    public function setInventoryKey($inventory_key)
    {
        $this->container['inventory_key'] = $inventory_key;

        return $this;
    }

    /**
     * Gets color_array
     *
     * @return \Swagger\Client\Model\ColorArray
     */
    public function getColorArray()
    {
        return $this->container['color_array'];
    }

    /**
     * Sets color_array
     *
     * @param \Swagger\Client\Model\ColorArray $color_array color_array
     *
     * @return $this
     */
    public function setColorArray($color_array)
    {
        $this->container['color_array'] = $color_array;

        return $this;
    }

    /**
     * Gets apparel_size
     *
     * @return \Swagger\Client\Model\ApparelSize
     */
    public function getApparelSize()
    {
        return $this->container['apparel_size'];
    }

    /**
     * Sets apparel_size
     *
     * @param \Swagger\Client\Model\ApparelSize $apparel_size apparel_size
     *
     * @return $this
     */
    public function setApparelSize($apparel_size)
    {
        $this->container['apparel_size'] = $apparel_size;

        return $this;
    }

    /**
     * Gets part_price
     *
     * @return \Swagger\Client\Model\PartPrice4
     */
    public function getPartPrice()
    {
        return $this->container['part_price'];
    }

    /**
     * Sets part_price
     *
     * @param \Swagger\Client\Model\PartPrice4 $part_price part_price
     *
     * @return $this
     */
    public function setPartPrice($part_price)
    {
        $this->container['part_price'] = $part_price;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
