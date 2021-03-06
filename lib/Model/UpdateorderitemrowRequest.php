<?php
/**
 * UpdateorderitemrowRequest
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
 * UpdateorderitemrowRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateorderitemrowRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateorderitemrowRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'size' => 'string',
'color' => 'string',
'quantity' => 'string',
'price' => 'string',
'total_price' => 'string',
'cost' => 'string',
'total_cost' => 'string',
'profit' => 'string',
'po_type' => 'string',
'product' => '\Swagger\Client\Model\Product2',
'tax' => 'string',
'disable_tax' => 'string',
'receiving' => '\Swagger\Client\Model\Receiving',
'warehouse' => 'string',
'distributor_warehouse' => '\Swagger\Client\Model\DistributorWarehouse1',
'image' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'size' => null,
'color' => null,
'quantity' => null,
'price' => null,
'total_price' => null,
'cost' => null,
'total_cost' => null,
'profit' => null,
'po_type' => null,
'product' => null,
'tax' => null,
'disable_tax' => null,
'receiving' => null,
'warehouse' => null,
'distributor_warehouse' => null,
'image' => null    ];

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
        'size' => 'size',
'color' => 'color',
'quantity' => 'quantity',
'price' => 'price',
'total_price' => 'totalPrice',
'cost' => 'cost',
'total_cost' => 'totalCost',
'profit' => 'profit',
'po_type' => 'poType',
'product' => 'product',
'tax' => 'tax',
'disable_tax' => 'disableTax',
'receiving' => 'receiving',
'warehouse' => 'warehouse',
'distributor_warehouse' => 'distributorWarehouse',
'image' => 'image'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'size' => 'setSize',
'color' => 'setColor',
'quantity' => 'setQuantity',
'price' => 'setPrice',
'total_price' => 'setTotalPrice',
'cost' => 'setCost',
'total_cost' => 'setTotalCost',
'profit' => 'setProfit',
'po_type' => 'setPoType',
'product' => 'setProduct',
'tax' => 'setTax',
'disable_tax' => 'setDisableTax',
'receiving' => 'setReceiving',
'warehouse' => 'setWarehouse',
'distributor_warehouse' => 'setDistributorWarehouse',
'image' => 'setImage'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'size' => 'getSize',
'color' => 'getColor',
'quantity' => 'getQuantity',
'price' => 'getPrice',
'total_price' => 'getTotalPrice',
'cost' => 'getCost',
'total_cost' => 'getTotalCost',
'profit' => 'getProfit',
'po_type' => 'getPoType',
'product' => 'getProduct',
'tax' => 'getTax',
'disable_tax' => 'getDisableTax',
'receiving' => 'getReceiving',
'warehouse' => 'getWarehouse',
'distributor_warehouse' => 'getDistributorWarehouse',
'image' => 'getImage'    ];

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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['total_cost'] = isset($data['total_cost']) ? $data['total_cost'] : null;
        $this->container['profit'] = isset($data['profit']) ? $data['profit'] : null;
        $this->container['po_type'] = isset($data['po_type']) ? $data['po_type'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['disable_tax'] = isset($data['disable_tax']) ? $data['disable_tax'] : null;
        $this->container['receiving'] = isset($data['receiving']) ? $data['receiving'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['distributor_warehouse'] = isset($data['distributor_warehouse']) ? $data['distributor_warehouse'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['total_price'] === null) {
            $invalidProperties[] = "'total_price' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['total_cost'] === null) {
            $invalidProperties[] = "'total_cost' can't be null";
        }
        if ($this->container['profit'] === null) {
            $invalidProperties[] = "'profit' can't be null";
        }
        if ($this->container['po_type'] === null) {
            $invalidProperties[] = "'po_type' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
        }
        if ($this->container['tax'] === null) {
            $invalidProperties[] = "'tax' can't be null";
        }
        if ($this->container['disable_tax'] === null) {
            $invalidProperties[] = "'disable_tax' can't be null";
        }
        if ($this->container['receiving'] === null) {
            $invalidProperties[] = "'receiving' can't be null";
        }
        if ($this->container['warehouse'] === null) {
            $invalidProperties[] = "'warehouse' can't be null";
        }
        if ($this->container['distributor_warehouse'] === null) {
            $invalidProperties[] = "'distributor_warehouse' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
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
     * Gets size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param string $total_price total_price
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param string $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets total_cost
     *
     * @return string
     */
    public function getTotalCost()
    {
        return $this->container['total_cost'];
    }

    /**
     * Sets total_cost
     *
     * @param string $total_cost total_cost
     *
     * @return $this
     */
    public function setTotalCost($total_cost)
    {
        $this->container['total_cost'] = $total_cost;

        return $this;
    }

    /**
     * Gets profit
     *
     * @return string
     */
    public function getProfit()
    {
        return $this->container['profit'];
    }

    /**
     * Sets profit
     *
     * @param string $profit profit
     *
     * @return $this
     */
    public function setProfit($profit)
    {
        $this->container['profit'] = $profit;

        return $this;
    }

    /**
     * Gets po_type
     *
     * @return string
     */
    public function getPoType()
    {
        return $this->container['po_type'];
    }

    /**
     * Sets po_type
     *
     * @param string $po_type po_type
     *
     * @return $this
     */
    public function setPoType($po_type)
    {
        $this->container['po_type'] = $po_type;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Swagger\Client\Model\Product2
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Swagger\Client\Model\Product2 $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return string
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param string $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets disable_tax
     *
     * @return string
     */
    public function getDisableTax()
    {
        return $this->container['disable_tax'];
    }

    /**
     * Sets disable_tax
     *
     * @param string $disable_tax disable_tax
     *
     * @return $this
     */
    public function setDisableTax($disable_tax)
    {
        $this->container['disable_tax'] = $disable_tax;

        return $this;
    }

    /**
     * Gets receiving
     *
     * @return \Swagger\Client\Model\Receiving
     */
    public function getReceiving()
    {
        return $this->container['receiving'];
    }

    /**
     * Sets receiving
     *
     * @param \Swagger\Client\Model\Receiving $receiving receiving
     *
     * @return $this
     */
    public function setReceiving($receiving)
    {
        $this->container['receiving'] = $receiving;

        return $this;
    }

    /**
     * Gets warehouse
     *
     * @return string
     */
    public function getWarehouse()
    {
        return $this->container['warehouse'];
    }

    /**
     * Sets warehouse
     *
     * @param string $warehouse warehouse
     *
     * @return $this
     */
    public function setWarehouse($warehouse)
    {
        $this->container['warehouse'] = $warehouse;

        return $this;
    }

    /**
     * Gets distributor_warehouse
     *
     * @return \Swagger\Client\Model\DistributorWarehouse1
     */
    public function getDistributorWarehouse()
    {
        return $this->container['distributor_warehouse'];
    }

    /**
     * Sets distributor_warehouse
     *
     * @param \Swagger\Client\Model\DistributorWarehouse1 $distributor_warehouse distributor_warehouse
     *
     * @return $this
     */
    public function setDistributorWarehouse($distributor_warehouse)
    {
        $this->container['distributor_warehouse'] = $distributor_warehouse;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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
