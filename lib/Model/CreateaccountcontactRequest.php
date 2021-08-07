<?php
/**
 * CreateaccountcontactRequest
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
 * CreateaccountcontactRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateaccountcontactRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateaccountcontactRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
'last_name' => 'string',
'title' => 'string',
'department' => 'string',
'reports_to' => '\Swagger\Client\Model\ReportsTo',
'commission_group' => '\Swagger\Client\Model\CommissionGroup',
'shipping_info' => '\Swagger\Client\Model\ShippingInfo',
'sales_rep' => '\Swagger\Client\Model\SalesRep',
'phone' => 'string',
'fax' => 'string',
'description' => 'string',
'lead_source' => 'string',
'email' => 'string',
'billing' => '\Swagger\Client\Model\Billing',
'shipping' => '\Swagger\Client\Model\Shipping'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_name' => null,
'last_name' => null,
'title' => null,
'department' => null,
'reports_to' => null,
'commission_group' => null,
'shipping_info' => null,
'sales_rep' => null,
'phone' => null,
'fax' => null,
'description' => null,
'lead_source' => null,
'email' => null,
'billing' => null,
'shipping' => null    ];

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
        'first_name' => 'firstName',
'last_name' => 'lastName',
'title' => 'title',
'department' => 'department',
'reports_to' => 'reportsTo',
'commission_group' => 'commissionGroup',
'shipping_info' => 'shippingInfo',
'sales_rep' => 'salesRep',
'phone' => 'phone',
'fax' => 'fax',
'description' => 'description',
'lead_source' => 'leadSource',
'email' => 'email',
'billing' => 'billing',
'shipping' => 'shipping'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'title' => 'setTitle',
'department' => 'setDepartment',
'reports_to' => 'setReportsTo',
'commission_group' => 'setCommissionGroup',
'shipping_info' => 'setShippingInfo',
'sales_rep' => 'setSalesRep',
'phone' => 'setPhone',
'fax' => 'setFax',
'description' => 'setDescription',
'lead_source' => 'setLeadSource',
'email' => 'setEmail',
'billing' => 'setBilling',
'shipping' => 'setShipping'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'title' => 'getTitle',
'department' => 'getDepartment',
'reports_to' => 'getReportsTo',
'commission_group' => 'getCommissionGroup',
'shipping_info' => 'getShippingInfo',
'sales_rep' => 'getSalesRep',
'phone' => 'getPhone',
'fax' => 'getFax',
'description' => 'getDescription',
'lead_source' => 'getLeadSource',
'email' => 'getEmail',
'billing' => 'getBilling',
'shipping' => 'getShipping'    ];

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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['reports_to'] = isset($data['reports_to']) ? $data['reports_to'] : null;
        $this->container['commission_group'] = isset($data['commission_group']) ? $data['commission_group'] : null;
        $this->container['shipping_info'] = isset($data['shipping_info']) ? $data['shipping_info'] : null;
        $this->container['sales_rep'] = isset($data['sales_rep']) ? $data['sales_rep'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['lead_source'] = isset($data['lead_source']) ? $data['lead_source'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['department'] === null) {
            $invalidProperties[] = "'department' can't be null";
        }
        if ($this->container['reports_to'] === null) {
            $invalidProperties[] = "'reports_to' can't be null";
        }
        if ($this->container['commission_group'] === null) {
            $invalidProperties[] = "'commission_group' can't be null";
        }
        if ($this->container['shipping_info'] === null) {
            $invalidProperties[] = "'shipping_info' can't be null";
        }
        if ($this->container['sales_rep'] === null) {
            $invalidProperties[] = "'sales_rep' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['fax'] === null) {
            $invalidProperties[] = "'fax' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['lead_source'] === null) {
            $invalidProperties[] = "'lead_source' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['billing'] === null) {
            $invalidProperties[] = "'billing' can't be null";
        }
        if ($this->container['shipping'] === null) {
            $invalidProperties[] = "'shipping' can't be null";
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department department
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets reports_to
     *
     * @return \Swagger\Client\Model\ReportsTo
     */
    public function getReportsTo()
    {
        return $this->container['reports_to'];
    }

    /**
     * Sets reports_to
     *
     * @param \Swagger\Client\Model\ReportsTo $reports_to reports_to
     *
     * @return $this
     */
    public function setReportsTo($reports_to)
    {
        $this->container['reports_to'] = $reports_to;

        return $this;
    }

    /**
     * Gets commission_group
     *
     * @return \Swagger\Client\Model\CommissionGroup
     */
    public function getCommissionGroup()
    {
        return $this->container['commission_group'];
    }

    /**
     * Sets commission_group
     *
     * @param \Swagger\Client\Model\CommissionGroup $commission_group commission_group
     *
     * @return $this
     */
    public function setCommissionGroup($commission_group)
    {
        $this->container['commission_group'] = $commission_group;

        return $this;
    }

    /**
     * Gets shipping_info
     *
     * @return \Swagger\Client\Model\ShippingInfo
     */
    public function getShippingInfo()
    {
        return $this->container['shipping_info'];
    }

    /**
     * Sets shipping_info
     *
     * @param \Swagger\Client\Model\ShippingInfo $shipping_info shipping_info
     *
     * @return $this
     */
    public function setShippingInfo($shipping_info)
    {
        $this->container['shipping_info'] = $shipping_info;

        return $this;
    }

    /**
     * Gets sales_rep
     *
     * @return \Swagger\Client\Model\SalesRep
     */
    public function getSalesRep()
    {
        return $this->container['sales_rep'];
    }

    /**
     * Sets sales_rep
     *
     * @param \Swagger\Client\Model\SalesRep $sales_rep sales_rep
     *
     * @return $this
     */
    public function setSalesRep($sales_rep)
    {
        $this->container['sales_rep'] = $sales_rep;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets lead_source
     *
     * @return string
     */
    public function getLeadSource()
    {
        return $this->container['lead_source'];
    }

    /**
     * Sets lead_source
     *
     * @param string $lead_source lead_source
     *
     * @return $this
     */
    public function setLeadSource($lead_source)
    {
        $this->container['lead_source'] = $lead_source;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \Swagger\Client\Model\Billing
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \Swagger\Client\Model\Billing $billing billing
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
     * @return \Swagger\Client\Model\Shipping
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \Swagger\Client\Model\Shipping $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

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
