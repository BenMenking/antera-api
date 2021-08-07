# Swagger\Client\AccountContactsApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccountContact**](AccountContactsApi.md#createaccountcontact) | **POST** /accounts/{account_id}/contacts | Create account contact
[**getAccountContactDetails**](AccountContactsApi.md#getaccountcontactdetails) | **GET** /accounts/{account_id}/contacts/{contact_id} | Get account contact details
[**listAccountContacts**](AccountContactsApi.md#listaccountcontacts) | **GET** /accounts/{account_id}/contacts | List account contacts
[**updateAccountContact**](AccountContactsApi.md#updateaccountcontact) | **PUT** /accounts/{account_id}/contacts/{contact_id} | Update account contact

# **createAccountContact**
> createAccountContact($body, $account_id)

Create account contact

Associate a contact with an account.  If the payload does not contain an existing contact ( has an id ), then a new contact will be created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccountContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateaccountcontactRequest(); // \Swagger\Client\Model\CreateaccountcontactRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->createAccountContact($body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountContactsApi->createAccountContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateaccountcontactRequest**](../Model/CreateaccountcontactRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountContactDetails**
> getAccountContactDetails($content_type, $account_id, $contact_id)

Get account contact details

Get details of a contact associated with an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccountContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$account_id = "account_id_example"; // string | 
$contact_id = "contact_id_example"; // string | 

try {
    $apiInstance->getAccountContactDetails($content_type, $account_id, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountContactsApi->getAccountContactDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **account_id** | **string**|  |
 **contact_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccountContacts**
> listAccountContacts($content_type, $account_id)

List account contacts

List contacts associated with an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccountContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->listAccountContacts($content_type, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountContactsApi->listAccountContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountContact**
> updateAccountContact($body, $account_id, $contact_id)

Update account contact

Update a contact that is associated with an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccountContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateaccountcontactRequest(); // \Swagger\Client\Model\UpdateaccountcontactRequest | 
$account_id = "account_id_example"; // string | 
$contact_id = "contact_id_example"; // string | 

try {
    $apiInstance->updateAccountContact($body, $account_id, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountContactsApi->updateAccountContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateaccountcontactRequest**](../Model/UpdateaccountcontactRequest.md)|  |
 **account_id** | **string**|  |
 **contact_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

