# Swagger\Client\ReceivablesApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReceivableDetail**](ReceivablesApi.md#getreceivabledetail) | **GET** /receivables/{account_id} | Get receivable detail
[**listReceivablesHeaders**](ReceivablesApi.md#listreceivablesheaders) | **GET** /receivables | List receivables - headers

# **getReceivableDetail**
> getReceivableDetail($account_id)

Get receivable detail

Get receivable details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->getReceivableDetail($account_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->getReceivableDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listReceivablesHeaders**
> listReceivablesHeaders()

List receivables - headers

List receivables - headers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->listReceivablesHeaders();
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->listReceivablesHeaders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

