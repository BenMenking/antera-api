# Swagger\Client\OrderItemChargesApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderItemCharge**](OrderItemChargesApi.md#createorderitemcharge) | **POST** /orders/{order_id}/items/{item_id}/charges | Create order item charge
[**deleteOrderItemCharge**](OrderItemChargesApi.md#deleteorderitemcharge) | **DELETE** /orders/{order_id}/items/{item_id}/charges/{charge_id} | Delete order item charge
[**getOrderItemChargeDetails**](OrderItemChargesApi.md#getorderitemchargedetails) | **GET** /orders/{order_id}/items/{item_id}/charges/{charge_id} | Get order item charge details
[**listOrderItemCharges**](OrderItemChargesApi.md#listorderitemcharges) | **GET** /orders/{order_id}/items/{item_id}/charges | List order item charges
[**updateOrderItemCharge**](OrderItemChargesApi.md#updateorderitemcharge) | **PUT** /orders/{order_id}/items/{item_id}/charges/{charge_id} | Update order item charge

# **createOrderItemCharge**
> createOrderItemCharge($body, $order_id, $item_id)

Create order item charge

Create order item charge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\CreateorderitemchargeRequest()); // \Swagger\Client\Model\CreateorderitemchargeRequest[] | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 

try {
    $apiInstance->createOrderItemCharge($body, $order_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemChargesApi->createOrderItemCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateorderitemchargeRequest[]**](../Model/CreateorderitemchargeRequest.md)|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderItemCharge**
> deleteOrderItemCharge($content_type, $order_id, $item_id, $charge_id)

Delete order item charge

Delete order item charge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$charge_id = "charge_id_example"; // string | 

try {
    $apiInstance->deleteOrderItemCharge($content_type, $order_id, $item_id, $charge_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemChargesApi->deleteOrderItemCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **charge_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderItemChargeDetails**
> getOrderItemChargeDetails($content_type, $order_id, $item_id, $charge_id)

Get order item charge details

Get order item charge details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$charge_id = "charge_id_example"; // string | 

try {
    $apiInstance->getOrderItemChargeDetails($content_type, $order_id, $item_id, $charge_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemChargesApi->getOrderItemChargeDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **charge_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrderItemCharges**
> listOrderItemCharges($content_type, $order_id, $item_id)

List order item charges

List order item charges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 

try {
    $apiInstance->listOrderItemCharges($content_type, $order_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemChargesApi->listOrderItemCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderItemCharge**
> updateOrderItemCharge($body, $order_id, $item_id, $charge_id)

Update order item charge

Update order item charge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateorderitemchargeRequest(); // \Swagger\Client\Model\UpdateorderitemchargeRequest | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$charge_id = "charge_id_example"; // string | 

try {
    $apiInstance->updateOrderItemCharge($body, $order_id, $item_id, $charge_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemChargesApi->updateOrderItemCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateorderitemchargeRequest**](../Model/UpdateorderitemchargeRequest.md)|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **charge_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

