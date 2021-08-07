# Swagger\Client\OrderItemDecorationDetailsApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderItemDecorationDetails**](OrderItemDecorationDetailsApi.md#createorderitemdecorationdetails) | **POST** /orders/{order_id}/items/{item_id}/decorations/{deco_id}/details | Create order item decoration details
[**deleteOrderItemDecorationDetails**](OrderItemDecorationDetailsApi.md#deleteorderitemdecorationdetails) | **DELETE** /orders/{order_id}/items/{item_id}/decorations/{deco_id}/details/{deco_detail_id} | Delete order item decoration details
[**getOrderItemDecorationDetails1**](OrderItemDecorationDetailsApi.md#getorderitemdecorationdetails1) | **GET** /orders/{order_id}/items/{item_id}/decorations/{deco_id}/details/{deco_detail_id} | Get order item decoration details
[**listOrderItemDecorationDetails**](OrderItemDecorationDetailsApi.md#listorderitemdecorationdetails) | **GET** /orders/{order_id}/items/{item_id}/decorations/{deco_id}/details | List order item decoration details
[**updateOrderItemDecorationDetails**](OrderItemDecorationDetailsApi.md#updateorderitemdecorationdetails) | **PUT** /orders/{order_id}/items/{item_id}/decorations/{deco_id}/details/{deco_detail_id} | Update order item decoration details

# **createOrderItemDecorationDetails**
> createOrderItemDecorationDetails($body, $order_id, $item_id, $deco_id)

Create order item decoration details

Create item decoration details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\CreateorderitemdecorationdetailsRequest()); // \Swagger\Client\Model\CreateorderitemdecorationdetailsRequest[] | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$deco_id = "deco_id_example"; // string | 

try {
    $apiInstance->createOrderItemDecorationDetails($body, $order_id, $item_id, $deco_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationDetailsApi->createOrderItemDecorationDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateorderitemdecorationdetailsRequest[]**](../Model/CreateorderitemdecorationdetailsRequest.md)|  |
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

# **deleteOrderItemDecorationDetails**
> deleteOrderItemDecorationDetails($content_type, $order_id, $item_id, $deco_id, $deco_detail_id)

Delete order item decoration details

Delete order item decoration details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$deco_id = "deco_id_example"; // string | 
$deco_detail_id = "deco_detail_id_example"; // string | 

try {
    $apiInstance->deleteOrderItemDecorationDetails($content_type, $order_id, $item_id, $deco_id, $deco_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationDetailsApi->deleteOrderItemDecorationDetails: ', $e->getMessage(), PHP_EOL;
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
 **deco_detail_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderItemDecorationDetails1**
> getOrderItemDecorationDetails1($content_type, $order_id, $item_id, $deco_id, $deco_detail_id)

Get order item decoration details

Get order item decoration details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$deco_id = "deco_id_example"; // string | 
$deco_detail_id = "deco_detail_id_example"; // string | 

try {
    $apiInstance->getOrderItemDecorationDetails1($content_type, $order_id, $item_id, $deco_id, $deco_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationDetailsApi->getOrderItemDecorationDetails1: ', $e->getMessage(), PHP_EOL;
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
 **deco_detail_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrderItemDecorationDetails**
> listOrderItemDecorationDetails($content_type, $order_id, $item_id, $deco_id)

List order item decoration details

List order item decoration details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationDetailsApi(
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
    $apiInstance->listOrderItemDecorationDetails($content_type, $order_id, $item_id, $deco_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationDetailsApi->listOrderItemDecorationDetails: ', $e->getMessage(), PHP_EOL;
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

# **updateOrderItemDecorationDetails**
> updateOrderItemDecorationDetails($body, $order_id, $item_id, $deco_id, $deco_detail_id)

Update order item decoration details

Update order item decoration details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateorderitemdecorationdetailsRequest(); // \Swagger\Client\Model\UpdateorderitemdecorationdetailsRequest | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$deco_id = "deco_id_example"; // string | 
$deco_detail_id = "deco_detail_id_example"; // string | 

try {
    $apiInstance->updateOrderItemDecorationDetails($body, $order_id, $item_id, $deco_id, $deco_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationDetailsApi->updateOrderItemDecorationDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateorderitemdecorationdetailsRequest**](../Model/UpdateorderitemdecorationdetailsRequest.md)|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **deco_id** | **string**|  |
 **deco_detail_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

