# Swagger\Client\OrderItemDecorationChargesApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderItemDecorationCharge**](OrderItemDecorationChargesApi.md#createorderitemdecorationcharge) | **POST** /orders/{order_id}/items/{item_id}/decorations/{deco_id}/charges | Create order item decoration charge
[**deleteOrderItemDecorationCharge**](OrderItemDecorationChargesApi.md#deleteorderitemdecorationcharge) | **DELETE** /orders/{order_id}/items/{item_id}/decorations/{deco_id}/charges/{charge_id} | Delete order item decoration charge
[**getOrderItemDecorationChargeDetails**](OrderItemDecorationChargesApi.md#getorderitemdecorationchargedetails) | **GET** /orders/{order_id}/items/{item_id}/decorations/{deco_id}/charges/{deco_charge_id} | Get order item decoration charge details
[**listOrderItemDecorationCharges**](OrderItemDecorationChargesApi.md#listorderitemdecorationcharges) | **GET** /orders/{order_id}/items/{item_id}/decorations/{deco_id}/charges | List order item decoration charges
[**updateOrderItemDecorationCharge**](OrderItemDecorationChargesApi.md#updateorderitemdecorationcharge) | **PUT** /orders/{order_id}/items/{item_id}/decorations/{deco_id}/charges/{deco_charge_id} | Update order item decoration charge

# **createOrderItemDecorationCharge**
> createOrderItemDecorationCharge($body, $order_id, $item_id, $deco_id)

Create order item decoration charge

Create order item decoration charge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\CreateorderitemdecorationchargeRequest()); // \Swagger\Client\Model\CreateorderitemdecorationchargeRequest[] | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$deco_id = "deco_id_example"; // string | 

try {
    $apiInstance->createOrderItemDecorationCharge($body, $order_id, $item_id, $deco_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationChargesApi->createOrderItemDecorationCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateorderitemdecorationchargeRequest[]**](../Model/CreateorderitemdecorationchargeRequest.md)|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **deco_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderItemDecorationCharge**
> deleteOrderItemDecorationCharge($content_type, $order_id, $item_id, $deco_id, $charge_id)

Delete order item decoration charge

Delete order item decoration charge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$deco_id = "deco_id_example"; // string | 
$charge_id = "charge_id_example"; // string | 

try {
    $apiInstance->deleteOrderItemDecorationCharge($content_type, $order_id, $item_id, $deco_id, $charge_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationChargesApi->deleteOrderItemDecorationCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **deco_id** | **string**|  |
 **charge_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderItemDecorationChargeDetails**
> getOrderItemDecorationChargeDetails($content_type, $order_id, $item_id, $deco_id, $deco_charge_id)

Get order item decoration charge details

Get order item decoration charge details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$deco_id = "deco_id_example"; // string | 
$deco_charge_id = "deco_charge_id_example"; // string | 

try {
    $apiInstance->getOrderItemDecorationChargeDetails($content_type, $order_id, $item_id, $deco_id, $deco_charge_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationChargesApi->getOrderItemDecorationChargeDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **deco_id** | **string**|  |
 **deco_charge_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrderItemDecorationCharges**
> listOrderItemDecorationCharges($content_type, $order_id, $item_id, $deco_id)

List order item decoration charges

List order item decoration charges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$deco_id = "deco_id_example"; // string | 

try {
    $apiInstance->listOrderItemDecorationCharges($content_type, $order_id, $item_id, $deco_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationChargesApi->listOrderItemDecorationCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **deco_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderItemDecorationCharge**
> updateOrderItemDecorationCharge($body, $order_id, $item_id, $deco_id, $deco_charge_id)

Update order item decoration charge

Update order item decoration charge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateorderitemdecorationchargeRequest(); // \Swagger\Client\Model\UpdateorderitemdecorationchargeRequest | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$deco_id = "deco_id_example"; // string | 
$deco_charge_id = "deco_charge_id_example"; // string | 

try {
    $apiInstance->updateOrderItemDecorationCharge($body, $order_id, $item_id, $deco_id, $deco_charge_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationChargesApi->updateOrderItemDecorationCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateorderitemdecorationchargeRequest**](../Model/UpdateorderitemdecorationchargeRequest.md)|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **deco_id** | **string**|  |
 **deco_charge_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

