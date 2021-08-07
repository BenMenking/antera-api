<?php
/**
 * UpdateorderRequest
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
 * UpdateorderRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateorderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateorderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identity' => 'string',
'type' => 'string',
'status' => '\Swagger\Client\Model\Status',
'order_date' => 'string',
'due_date' => 'string',
'sales_rep' => '\Swagger\Client\Model\SalesRep6',
'csr' => '\Swagger\Client\Model\Csr2',
'ship_info' => '\Swagger\Client\Model\ShipInfo',
'inhand_date' => 'string',
'proforma_date' => 'string',
'subtotal' => 'int',
'cost' => 'int',
'profit' => 'int',
'location' => '\Swagger\Client\Model\Location',
'account' => '\Swagger\Client\Model\Account',
'contact' => '\Swagger\Client\Model\Contact',
'billing' => '\Swagger\Client\Model\Billing6',
'shipping' => '\Swagger\Client\Model\Shipping6',
'tax' => '\Swagger\Client\Model\Tax',
'source' => 'string',
'attention_to' => 'string',
'note' => 'string',
'total' => 'int',
'profit_percent' => 'int',
'paid' => 'int',
'balance' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identity' => null,
'type' => null,
'status' => null,
'order_date' => null,
'due_date' => null,
'sales_rep' => null,
'csr' => null,
'ship_info' => null,
'inhand_date' => null,
'proforma_date' => null,
'subtotal' => 'int32',
'cost' => 'int32',
'profit' => 'int32',
'location' => null,
'account' => null,
'contact' => null,
'billing' => null,
'shipping' => null,
'tax' => null,
'source' => null,
'attention_to' => null,
'note' => null,
'total' => 'int32',
'profit_percent' => 'int32',
'paid' => 'int32',
'balance' => 'int32'    ];

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
        'identity' => 'identity',
'type' => 'type',
'status' => 'status',
'order_date' => 'orderDate',
'due_date' => 'dueDate',
'sales_rep' => 'salesRep',
'csr' => 'csr',
'ship_info' => 'shipInfo',
'inhand_date' => 'inhandDate',
'proforma_date' => 'proformaDate',
'subtotal' => 'subtotal',
'cost' => 'cost',
'profit' => 'profit',
'location' => 'location',
'account' => 'account',
'contact' => 'contact',
'billing' => 'billing',
'shipping' => 'shipping',
'tax' => 'tax',
'source' => 'source',
'attention_to' => 'attentionTo',
'note' => 'note',
'total' => 'total',
'profit_percent' => 'profitPercent',
'paid' => 'paid',
'balance' => 'balance'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identity' => 'setIdentity',
'type' => 'setType',
'status' => 'setStatus',
'order_date' => 'setOrderDate',
'due_date' => 'setDueDate',
'sales_rep' => 'setSalesRep',
'csr' => 'setCsr',
'ship_info' => 'setShipInfo',
'inhand_date' => 'setInhandDate',
'proforma_date' => 'setProformaDate',
'subtotal' => 'setSubtotal',
'cost' => 'setCost',
'profit' => 'setProfit',
'location' => 'setLocation',
'account' => 'setAccount',
'contact' => 'setContact',
'billing' => 'setBilling',
'shipping' => 'setShipping',
'tax' => 'setTax',
'source' => 'setSource',
'attention_to' => 'setAttentionTo',
'note' => 'setNote',
'total' => 'setTotal',
'profit_percent' => 'setProfitPercent',
'paid' => 'setPaid',
'balance' => 'setBalance'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identity' => 'getIdentity',
'type' => 'getType',
'status' => 'getStatus',
'order_date' => 'getOrderDate',
'due_date' => 'getDueDate',
'sales_rep' => 'getSalesRep',
'csr' => 'getCsr',
'ship_info' => 'getShipInfo',
'inhand_date' => 'getInhandDate',
'proforma_date' => 'getProformaDate',
'subtotal' => 'getSubtotal',
'cost' => 'getCost',
'profit' => 'getProfit',
'location' => 'getLocation',
'account' => 'getAccount',
'contact' => 'getContact',
'billing' => 'getBilling',
'shipping' => 'getShipping',
'tax' => 'getTax',
'source' => 'getSource',
'attention_to' => 'getAttentionTo',
'note' => 'getNote',
'total' => 'getTotal',
'profit_percent' => 'getProfitPercent',
'paid' => 'getPaid',
'balance' => 'getBalance'    ];

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
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['sales_rep'] = isset($data['sales_rep']) ? $data['sales_rep'] : null;
        $this->container['csr'] = isset($data['csr']) ? $data['csr'] : null;
        $this->container['ship_info'] = isset($data['ship_info']) ? $data['ship_info'] : null;
        $this->container['inhand_date'] = isset($data['inhand_date']) ? $data['inhand_date'] : null;
        $this->container['proforma_date'] = isset($data['proforma_date']) ? $data['proforma_date'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['profit'] = isset($data['profit']) ? $data['profit'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['attention_to'] = isset($data['attention_to']) ? $data['attention_to'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['profit_percent'] = isset($data['profit_percent']) ? $data['profit_percent'] : null;
        $this->container['paid'] = isset($data['paid']) ? $data['paid'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['identity'] === null) {
            $invalidProperties[] = "'identity' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['order_date'] === null) {
            $invalidProperties[] = "'order_date' can't be null";
        }
        if ($this->container['due_date'] === null) {
            $invalidProperties[] = "'due_date' can't be null";
        }
        if ($this->container['sales_rep'] === null) {
            $invalidProperties[] = "'sales_rep' can't be null";
        }
        if ($this->container['csr'] === null) {
            $invalidProperties[] = "'csr' can't be null";
        }
        if ($this->container['ship_info'] === null) {
            $invalidProperties[] = "'ship_info' can't be null";
        }
        if ($this->container['inhand_date'] === null) {
            $invalidProperties[] = "'inhand_date' can't be null";
        }
        if ($this->container['proforma_date'] === null) {
            $invalidProperties[] = "'proforma_date' can't be null";
        }
        if ($this->container['subtotal'] === null) {
            $invalidProperties[] = "'subtotal' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['profit'] === null) {
            $invalidProperties[] = "'profit' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
        }
        if ($this->container['billing'] === null) {
            $invalidProperties[] = "'billing' can't be null";
        }
        if ($this->container['shipping'] === null) {
            $invalidProperties[] = "'shipping' can't be null";
        }
        if ($this->container['tax'] === null) {
            $invalidProperties[] = "'tax' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['attention_to'] === null) {
            $invalidProperties[] = "'attention_to' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['profit_percent'] === null) {
            $invalidProperties[] = "'profit_percent' can't be null";
        }
        if ($this->container['paid'] === null) {
            $invalidProperties[] = "'paid' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
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
     * Gets identity
     *
     * @return string
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string $identity identity
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\Status
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\Status $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return string
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param string $order_date order_date
     *
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets sales_rep
     *
     * @return \Swagger\Client\Model\SalesRep6
     */
    public function getSalesRep()
    {
        return $this->container['sales_rep'];
    }

    /**
     * Sets sales_rep
     *
     * @param \Swagger\Client\Model\SalesRep6 $sales_rep sales_rep
     *
     * @return $this
     */
    public function setSalesRep($sales_rep)
    {
        $this->container['sales_rep'] = $sales_rep;

        return $this;
    }

    /**
     * Gets csr
     *
     * @return \Swagger\Client\Model\Csr2
     */
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
     * Sets csr
     *
     * @param \Swagger\Client\Model\Csr2 $csr csr
     *
     * @return $this
     */
    public function setCsr($csr)
    {
        $this->container['csr'] = $csr;

        return $this;
    }

    /**
     * Gets ship_info
     *
     * @return \Swagger\Client\Model\ShipInfo
     */
    public function getShipInfo()
    {
        return $this->container['ship_info'];
    }

    /**
     * Sets ship_info
     *
     * @param \Swagger\Client\Model\ShipInfo $ship_info ship_info
     *
     * @return $this
     */
    public function setShipInfo($ship_info)
    {
        $this->container['ship_info'] = $ship_info;

        return $this;
    }

    /**
     * Gets inhand_date
     *
     * @return string
     */
    public function getInhandDate()
    {
        return $this->container['inhand_date'];
    }

    /**
     * Sets inhand_date
     *
     * @param string $inhand_date inhand_date
     *
     * @return $this
     */
    public function setInhandDate($inhand_date)
    {
        $this->container['inhand_date'] = $inhand_date;

        return $this;
    }

    /**
     * Gets proforma_date
     *
     * @return string
     */
    public function getProformaDate()
    {
        return $this->container['proforma_date'];
    }

    /**
     * Sets proforma_date
     *
     * @param string $proforma_date proforma_date
     *
     * @return $this
     */
    public function setProformaDate($proforma_date)
    {
        $this->container['proforma_date'] = $proforma_date;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return int
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param int $subtotal subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return int
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param int $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets profit
     *
     * @return int
     */
    public function getProfit()
    {
        return $this->container['profit'];
    }

    /**
     * Sets profit
     *
     * @param int $profit profit
     *
     * @return $this
     */
    public function setProfit($profit)
    {
        $this->container['profit'] = $profit;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Swagger\Client\Model\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\Location $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \Swagger\Client\Model\Account
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Swagger\Client\Model\Account $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Swagger\Client\Model\Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Swagger\Client\Model\Contact $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \Swagger\Client\Model\Billing6
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \Swagger\Client\Model\Billing6 $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \Swagger\Client\Model\Shipping6
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \Swagger\Client\Model\Shipping6 $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Swagger\Client\Model\Tax
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Swagger\Client\Model\Tax $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets attention_to
     *
     * @return string
     */
    public function getAttentionTo()
    {
        return $this->container['attention_to'];
    }

    /**
     * Sets attention_to
     *
     * @param string $attention_to attention_to
     *
     * @return $this
     */
    public function setAttentionTo($attention_to)
    {
        $this->container['attention_to'] = $attention_to;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets profit_percent
     *
     * @return int
     */
    public function getProfitPercent()
    {
        return $this->container['profit_percent'];
    }

    /**
     * Sets profit_percent
     *
     * @param int $profit_percent profit_percent
     *
     * @return $this
     */
    public function setProfitPercent($profit_percent)
    {
        $this->container['profit_percent'] = $profit_percent;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return int
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param int $paid paid
     *
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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