# Swagger\Client\OrdersItemRowsApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderItemRow**](OrdersItemRowsApi.md#createorderitemrow) | **POST** /orders/{order_id}/items/{item_id}/rows | Create order item row
[**deleteOrderItemRow**](OrdersItemRowsApi.md#deleteorderitemrow) | **DELETE** /orders/{order_id}/items/{item_id}/rows/{row_id} | Delete order item row
[**getOrderItemRowDetails**](OrdersItemRowsApi.md#getorderitemrowdetails) | **GET** /orders/{order_id}/items/{item_id}/rows/{row_id} | Get order item row details
[**listOrderItemRows**](OrdersItemRowsApi.md#listorderitemrows) | **GET** /orders/{order_id}/items/{item_id}/rows | List order item rows
[**updateOrderItemRow**](OrdersItemRowsApi.md#updateorderitemrow) | **PUT** /orders/{order_id}/items/{item_id}/rows/{row_id} | Update order item row

# **createOrderItemRow**
> createOrderItemRow($body, $order_id, $item_id)

Create order item row

Create order item row

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersItemRowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\CreateorderitemrowRequest()); // \Swagger\Client\Model\CreateorderitemrowRequest[] | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 

try {
    $apiInstance->createOrderItemRow($body, $order_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersItemRowsApi->createOrderItemRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateorderitemrowRequest[]**](../Model/CreateorderitemrowRequest.md)|  |
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

# **deleteOrderItemRow**
> deleteOrderItemRow($content_type, $order_id, $item_id, $row_id)

Delete order item row

Delete order item row

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersItemRowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$row_id = "row_id_example"; // string | 

try {
    $apiInstance->deleteOrderItemRow($content_type, $order_id, $item_id, $row_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersItemRowsApi->deleteOrderItemRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **row_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderItemRowDetails**
> getOrderItemRowDetails($content_type, $order_id, $item_id, $row_id)

Get order item row details

Get order item row details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersItemRowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$row_id = "row_id_example"; // string | 

try {
    $apiInstance->getOrderItemRowDetails($content_type, $order_id, $item_id, $row_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersItemRowsApi->getOrderItemRowDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **row_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrderItemRows**
> listOrderItemRows($content_type, $order_id, $item_id)

List order item rows

List order item rows

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersItemRowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 

try {
    $apiInstance->listOrderItemRows($content_type, $order_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersItemRowsApi->listOrderItemRows: ', $e->getMessage(), PHP_EOL;
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

# **updateOrderItemRow**
> updateOrderItemRow($body, $order_id, $item_id, $row_id)

Update order item row

Update order item row

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OrdersItemRowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateorderitemrowRequest(); // \Swagger\Client\Model\UpdateorderitemrowRequest | 
$order_id = "order_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$row_id = "row_id_example"; // string | 

try {
    $apiInstance->updateOrderItemRow($body, $order_id, $item_id, $row_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersItemRowsApi->updateOrderItemRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateorderitemrowRequest**](../Model/UpdateorderitemrowRequest.md)|  |
 **order_id** | **string**|  |
 **item_id** | **string**|  |
 **row_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

