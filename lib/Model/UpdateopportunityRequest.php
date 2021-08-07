<?php
/**
 * UpdateopportunityRequest
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
 * UpdateopportunityRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateopportunityRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateopportunityRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'date' => '\Swagger\Client\Model\\DateTime',
'description' => 'string',
'type' => 'string',
'campaign' => '\Swagger\Client\Model\Campaign',
'lead_source' => 'string',
'amount' => 'string',
'sales_stage' => 'string',
'probability' => 'string',
'sales_rep' => '\Swagger\Client\Model\SalesRep',
'contact' => '\Swagger\Client\Model\Contact2',
'account' => '\Swagger\Client\Model\Account4',
'budget' => 'string',
'location' => 'string',
'user' => '\Swagger\Client\Model\User',
'inventory' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'date' => null,
'description' => null,
'type' => null,
'campaign' => null,
'lead_source' => null,
'amount' => null,
'sales_stage' => null,
'probability' => null,
'sales_rep' => null,
'contact' => null,
'account' => null,
'budget' => null,
'location' => null,
'user' => null,
'inventory' => null    ];

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
        'name' => 'name',
'date' => 'date',
'description' => 'description',
'type' => 'type',
'campaign' => 'campaign',
'lead_source' => 'leadSource',
'amount' => 'amount',
'sales_stage' => 'salesStage',
'probability' => 'probability',
'sales_rep' => 'salesRep',
'contact' => 'contact',
'account' => 'account',
'budget' => 'budget',
'location' => 'location',
'user' => 'user',
'inventory' => 'inventory'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'date' => 'setDate',
'description' => 'setDescription',
'type' => 'setType',
'campaign' => 'setCampaign',
'lead_source' => 'setLeadSource',
'amount' => 'setAmount',
'sales_stage' => 'setSalesStage',
'probability' => 'setProbability',
'sales_rep' => 'setSalesRep',
'contact' => 'setContact',
'account' => 'setAccount',
'budget' => 'setBudget',
'location' => 'setLocation',
'user' => 'setUser',
'inventory' => 'setInventory'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'date' => 'getDate',
'description' => 'getDescription',
'type' => 'getType',
'campaign' => 'getCampaign',
'lead_source' => 'getLeadSource',
'amount' => 'getAmount',
'sales_stage' => 'getSalesStage',
'probability' => 'getProbability',
'sales_rep' => 'getSalesRep',
'contact' => 'getContact',
'account' => 'getAccount',
'budget' => 'getBudget',
'location' => 'getLocation',
'user' => 'getUser',
'inventory' => 'getInventory'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['lead_source'] = isset($data['lead_source']) ? $data['lead_source'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['sales_stage'] = isset($data['sales_stage']) ? $data['sales_stage'] : null;
        $this->container['probability'] = isset($data['probability']) ? $data['probability'] : null;
        $this->container['sales_rep'] = isset($data['sales_rep']) ? $data['sales_rep'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['campaign'] === null) {
            $invalidProperties[] = "'campaign' can't be null";
        }
        if ($this->container['lead_source'] === null) {
            $invalidProperties[] = "'lead_source' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['sales_stage'] === null) {
            $invalidProperties[] = "'sales_stage' can't be null";
        }
        if ($this->container['probability'] === null) {
            $invalidProperties[] = "'probability' can't be null";
        }
        if ($this->container['sales_rep'] === null) {
            $invalidProperties[] = "'sales_rep' can't be null";
        }
        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['budget'] === null) {
            $invalidProperties[] = "'budget' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['inventory'] === null) {
            $invalidProperties[] = "'inventory' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \Swagger\Client\Model\\DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \Swagger\Client\Model\\DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * Gets campaign
     *
     * @return \Swagger\Client\Model\Campaign
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param \Swagger\Client\Model\Campaign $campaign campaign
     *
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

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
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets sales_stage
     *
     * @return string
     */
    public function getSalesStage()
    {
        return $this->container['sales_stage'];
    }

    /**
     * Sets sales_stage
     *
     * @param string $sales_stage sales_stage
     *
     * @return $this
     */
    public function setSalesStage($sales_stage)
    {
        $this->container['sales_stage'] = $sales_stage;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return string
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param string $probability probability
     *
     * @return $this
     */
    public function setProbability($probability)
    {
        $this->container['probability'] = $probability;

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
     * Gets contact
     *
     * @return \Swagger\Client\Model\Contact2
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Swagger\Client\Model\Contact2 $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \Swagger\Client\Model\Account4
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Swagger\Client\Model\Account4 $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return string
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param string $budget budget
     *
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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
     * Gets inventory
     *
     * @return string
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param string $inventory inventory
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

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
