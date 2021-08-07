# Swagger\Client\DropdownsApi

All URIs are relative to *http://example.com/protected/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDropdownOption**](DropdownsApi.md#createdropdownoption) | **POST** /dropdowns/{dropdown}/options | Create dropdown option
[**deleteDropdownOption**](DropdownsApi.md#deletedropdownoption) | **DELETE** /dropdowns/{dropdown}/options/d382ff69-9c1b-11e9-a0f8-0242ac110005 | Delete dropdown option
[**getDropdownDetails**](DropdownsApi.md#getdropdowndetails) | **GET** /dropdowns/{dropdown} | Get Dropdown Details
[**getDropdownOptionDetails**](DropdownsApi.md#getdropdownoptiondetails) | **GET** /dropdowns/{dropdown}/options/158a19d6-3b4f-11e9-b210-d663bd873d93 | Get Dropdown Option Details
[**listDropdowns**](DropdownsApi.md#listdropdowns) | **GET** /dropdowns | List Dropdowns
[**updateDropdownOption**](DropdownsApi.md#updatedropdownoption) | **PUT** /dropdowns/{dropdown}/options/d382ff69-9c1b-11e9-a0f8-0242ac110005 | Update dropdown option

# **createDropdownOption**
> createDropdownOption($body, $dropdown)

Create dropdown option

Adds a new dropdown option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DropdownsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreatedropdownoptionRequest(); // \Swagger\Client\Model\CreatedropdownoptionRequest | 
$dropdown = "dropdown_example"; // string | 

try {
    $apiInstance->createDropdownOption($body, $dropdown);
} catch (Exception $e) {
    echo 'Exception when calling DropdownsApi->createDropdownOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreatedropdownoptionRequest**](../Model/CreatedropdownoptionRequest.md)|  |
 **dropdown** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDropdownOption**
> deleteDropdownOption($content_type, $dropdown)

Delete dropdown option

Delete dropdown options

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DropdownsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$dropdown = "dropdown_example"; // string | 

try {
    $apiInstance->deleteDropdownOption($content_type, $dropdown);
} catch (Exception $e) {
    echo 'Exception when calling DropdownsApi->deleteDropdownOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **dropdown** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDropdownDetails**
> getDropdownDetails($content_type, $dropdown)

Get Dropdown Details

Get dropdown details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DropdownsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$dropdown = "dropdown_example"; // string | 

try {
    $apiInstance->getDropdownDetails($content_type, $dropdown);
} catch (Exception $e) {
    echo 'Exception when calling DropdownsApi->getDropdownDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **dropdown** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDropdownOptionDetails**
> getDropdownOptionDetails($content_type, $dropdown)

Get Dropdown Option Details

Get dropdown details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DropdownsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$dropdown = "dropdown_example"; // string | 

try {
    $apiInstance->getDropdownOptionDetails($content_type, $dropdown);
} catch (Exception $e) {
    echo 'Exception when calling DropdownsApi->getDropdownOptionDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **dropdown** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDropdowns**
> listDropdowns()

List Dropdowns

List dropdowns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DropdownsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->listDropdowns();
} catch (Exception $e) {
    echo 'Exception when calling DropdownsApi->listDropdowns: ', $e->getMessage(), PHP_EOL;
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

# **updateDropdownOption**
> updateDropdownOption($body, $dropdown)

Update dropdown option

Update an existing dropdown option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: httpBasic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DropdownsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdatedropdownoptionRequest(); // \Swagger\Client\Model\UpdatedropdownoptionRequest | 
$dropdown = "dropdown_example"; // string | 

try {
    $apiInstance->updateDropdownOption($body, $dropdown);
} catch (Exception $e) {
    echo 'Exception when calling DropdownsApi->updateDropdownOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdatedropdownoptionRequest**](../Model/UpdatedropdownoptionRequest.md)|  |
 **dropdown** | **string**|  |

### Return type

void (empty response body)

### Authorization

[httpBasic](../../README.md#httpBasic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

