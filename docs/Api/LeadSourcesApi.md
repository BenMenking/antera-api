# Swagger\Client\LeadSourcesApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAvailableLeadSources**](LeadSourcesApi.md#listavailableleadsources) | **GET** /leads/sources | List available lead sources

# **listAvailableLeadSources**
> listAvailableLeadSources()

List available lead sources

List available lead sources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->listAvailableLeadSources();
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->listAvailableLeadSources: ', $e->getMessage(), PHP_EOL;
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

