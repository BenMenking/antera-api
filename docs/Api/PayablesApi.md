# Swagger\Client\PayablesApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaybleDetail**](PayablesApi.md#getpaybledetail) | **GET** /payables/{vendor_id} | Get payable detail
[**listPayablesHeaders**](PayablesApi.md#listpayablesheaders) | **GET** /payables | List payables - headers

# **getPaybleDetail**
> getPaybleDetail($limit, $order, $orient, $offset, $vendor_id)

Get payable detail

Get payable detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | 
$order = "order_example"; // string | 
$orient = "orient_example"; // string | 
$offset = 56; // int | 
$vendor_id = "vendor_id_example"; // string | 

try {
    $apiInstance->getPaybleDetail($limit, $order, $orient, $offset, $vendor_id);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->getPaybleDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  |
 **order** | **string**|  |
 **orient** | **string**|  |
 **offset** | **int**|  |
 **vendor_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPayablesHeaders**
> listPayablesHeaders($limit, $order, $orient, $offset)

List payables - headers

List payables - headers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | 
$order = "order_example"; // string | 
$orient = "orient_example"; // string | 
$offset = 56; // int | 

try {
    $apiInstance->listPayablesHeaders($limit, $order, $orient, $offset);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->listPayablesHeaders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  |
 **order** | **string**|  |
 **orient** | **string**|  |
 **offset** | **int**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

