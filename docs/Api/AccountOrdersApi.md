# Swagger\Client\AccountOrdersApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountOrderDetails**](AccountOrdersApi.md#getaccountorderdetails) | **GET** /accounts/{account_id}/orders/{order_id} | Get account order details
[**listAccountOrders**](AccountOrdersApi.md#listaccountorders) | **GET** /accounts/{account_id}/orders | List account orders

# **getAccountOrderDetails**
> getAccountOrderDetails($content_type, $account_id, $order_id)

Get account order details

Get details from an order related to an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccountOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$account_id = "account_id_example"; // string | 
$order_id = "order_id_example"; // string | 

try {
    $apiInstance->getAccountOrderDetails($content_type, $account_id, $order_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountOrdersApi->getAccountOrderDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **account_id** | **string**|  |
 **order_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccountOrders**
> listAccountOrders($content_type, $account_id)

List account orders

List orders related to an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccountOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->listAccountOrders($content_type, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountOrdersApi->listAccountOrders: ', $e->getMessage(), PHP_EOL;
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

