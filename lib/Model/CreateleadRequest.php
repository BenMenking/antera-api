<?php
/**
 * CreateleadRequest
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
 * CreateleadRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateleadRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateleadRequest';

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
'email' => 'string',
'description' => 'string',
'sales_rep' => '\Swagger\Client\Model\SalesRep',
'phone_mobile' => 'string',
'phone' => 'string',
'fax' => 'string',
'billing' => '\Swagger\Client\Model\Billing8',
'shipping' => '\Swagger\Client\Model\Shipping8',
'lead_source' => 'string',
'status' => 'string',
'account' => '\Swagger\Client\Model\Account',
'website' => 'string',
'user' => '\Swagger\Client\Model\User'    ];

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
'email' => null,
'description' => null,
'sales_rep' => null,
'phone_mobile' => null,
'phone' => null,
'fax' => null,
'billing' => null,
'shipping' => null,
'lead_source' => null,
'status' => null,
'account' => null,
'website' => null,
'user' => null    ];

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
'email' => 'email',
'description' => 'description',
'sales_rep' => 'salesRep',
'phone_mobile' => 'phoneMobile',
'phone' => 'phone',
'fax' => 'fax',
'billing' => 'billing',
'shipping' => 'shipping',
'lead_source' => 'leadSource',
'status' => 'status',
'account' => 'account',
'website' => 'website',
'user' => 'user'    ];

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
'email' => 'setEmail',
'description' => 'setDescription',
'sales_rep' => 'setSalesRep',
'phone_mobile' => 'setPhoneMobile',
'phone' => 'setPhone',
'fax' => 'setFax',
'billing' => 'setBilling',
'shipping' => 'setShipping',
'lead_source' => 'setLeadSource',
'status' => 'setStatus',
'account' => 'setAccount',
'website' => 'setWebsite',
'user' => 'setUser'    ];

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
'email' => 'getEmail',
'description' => 'getDescription',
'sales_rep' => 'getSalesRep',
'phone_mobile' => 'getPhoneMobile',
'phone' => 'getPhone',
'fax' => 'getFax',
'billing' => 'getBilling',
'shipping' => 'getShipping',
'lead_source' => 'getLeadSource',
'status' => 'getStatus',
'account' => 'getAccount',
'website' => 'getWebsite',
'user' => 'getUser'    ];

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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sales_rep'] = isset($data['sales_rep']) ? $data['sales_rep'] : null;
        $this->container['phone_mobile'] = isset($data['phone_mobile']) ? $data['phone_mobile'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['lead_source'] = isset($data['lead_source']) ? $data['lead_source'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
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
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['sales_rep'] === null) {
            $invalidProperties[] = "'sales_rep' can't be null";
        }
        if ($this->container['phone_mobile'] === null) {
            $invalidProperties[] = "'phone_mobile' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['fax'] === null) {
            $invalidProperties[] = "'fax' can't be null";
        }
        if ($this->container['billing'] === null) {
            $invalidProperties[] = "'billing' can't be null";
        }
        if ($this->container['shipping'] === null) {
            $invalidProperties[] = "'shipping' can't be null";
        }
        if ($this->container['lead_source'] === null) {
            $invalidProperties[] = "'lead_source' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['website'] === null) {
            $invalidProperties[] = "'website' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
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
     * Gets phone_mobile
     *
     * @return string
     */
    public function getPhoneMobile()
    {
        return $this->container['phone_mobile'];
    }

    /**
     * Sets phone_mobile
     *
     * @param string $phone_mobile phone_mobile
     *
     * @return $this
     */
    public function setPhoneMobile($phone_mobile)
    {
        $this->container['phone_mobile'] = $phone_mobile;

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
     * Gets billing
     *
     * @return \Swagger\Client\Model\Billing8
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \Swagger\Client\Model\Billing8 $billing billing
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
     * @return \Swagger\Client\Model\Shipping8
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \Swagger\Client\Model\Shipping8 $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Swagger\Client\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Swagger\Client\Model\User $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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
