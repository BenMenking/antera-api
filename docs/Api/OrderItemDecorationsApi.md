# Swagger\Client\OrderItemDecorationsApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderItemDecoration**](OrderItemDecorationsApi.md#createorderitemdecoration) | **POST** /orders/{order_id}/items/{item_id}/decorations | Create order item decoration
[**deleteOrderItemDecoration**](OrderItemDecorationsApi.md#deleteorderitemdecoration) | **DELETE** /orders/{order_id}/items/{item_id}/decorations/161 | Delete order item decoration
[**getOrderItemDecorationDetails**](OrderItemDecorationsApi.md#getorderitemdecorationdetails) | **GET** /orders/{order_id}/items/{item_id}/decorations/{deco_id} | Get order item decoration details
[**listOrderItemDecorations**](OrderItemDecorationsApi.md#listorderitemdecorations) | **GET** /orders/{order_id}/items/{item_id}/decorations | List order item decorations
[**updateOrderItemDecoration**](OrderItemDecorationsApi.md#updateorderitemdecoration) | **PUT** /orders/{order_id}/items/{item_id}/decorations/{deco_id} | Update order item decoration

# **createOrderItemDecoration**
> createOrderItemDecoration($body, $order_id, $item_id)

Create order item decoration

Create order item decoration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\CreateorderitemdecorationRequest()); // \Swagger\Client\Model\CreateorderitemdecorationRequest[] | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 

try {
    $apiInstance->createOrderItemDecoration($body, $order_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationsApi->createOrderItemDecoration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateorderitemdecorationRequest[]**](../Model/CreateorderitemdecorationRequest.md)|  |
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

# **deleteOrderItemDecoration**
> deleteOrderItemDecoration($content_type, $order_id, $item_id)

Delete order item decoration

Delete order item decoration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 

try {
    $apiInstance->deleteOrderItemDecoration($content_type, $order_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationsApi->deleteOrderItemDecoration: ', $e->getMessage(), PHP_EOL;
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

# **getOrderItemDecorationDetails**
> getOrderItemDecorationDetails($content_type, $order_id, $item_id, $deco_id)

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


$apiInstance = new Swagger\Client\Api\OrderItemDecorationsApi(
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
    $apiInstance->getOrderItemDecorationDetails($content_type, $order_id, $item_id, $deco_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationsApi->getOrderItemDecorationDetails: ', $e->getMessage(), PHP_EOL;
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

# **listOrderItemDecorations**
> listOrderItemDecorations($content_type, $order_id, $item_id)

List order item decorations

List order item decorations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 

try {
    $apiInstance->listOrderItemDecorations($content_type, $order_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationsApi->listOrderItemDecorations: ', $e->getMessage(), PHP_EOL;
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

# **updateOrderItemDecoration**
> updateOrderItemDecoration($body, $order_id, $item_id, $deco_id)

Update order item decoration

Update order item decoration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrderItemDecorationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateorderitemdecorationRequest(); // \Swagger\Client\Model\UpdateorderitemdecorationRequest | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$deco_id = "deco_id_example"; // string | 

try {
    $apiInstance->updateOrderItemDecoration($body, $order_id, $item_id, $deco_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemDecorationsApi->updateOrderItemDecoration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateorderitemdecorationRequest**](../Model/UpdateorderitemdecorationRequest.md)|  |
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

