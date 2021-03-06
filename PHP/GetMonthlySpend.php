<?php

// Copyright 2013 Microsoft Corporation

// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at

//    http://www.apache.org/licenses/LICENSE-2.0

// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

// Include the BingAds\CustomerBilling namespaced class file available
// for download at http://go.microsoft.com/fwlink/?LinkId=296529
include 'bingads\CustomerBillingClasses.php';

// Specify the BingAds\CustomerBilling objects that will be used.
use BingAds\CustomerBilling\GetAccountMonthlySpendRequest;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.

$UserName = "<UserNameGoesHere>";
$Password = "<PasswordGoesHere>";
$DeveloperToken = "<DeveloperTokenGoesHere>";
$AccountId = <AccountIdGoesHere>;

// Customer Billing WSDL

$wsdl = "https://sharedservices.adcenterapi.microsoft.com/Api/Billing/v8/CustomerBillingService.svc?wsdl";

try
{
  $proxy = new ClientProxy($UserName, $Password, $DeveloperToken, $wsdl);

  // Get the current monthly spend to date for the specified account.
  $spend = GetAccountSpend($AccountId, $proxy);
  sprintf("Current monthly spend to date for AccountId %d: %.2f", $AccountId, $spend);

}
catch (SoapFault $e)
{
    print $e->getMessage()."\n\n";
}
catch (Exception $e)
{
    if ($e->getPrevious())
    {
        ; // Ignore fault exceptions that we already caught.
    }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}

// Gets the monthly spend for the specified account.

function GetAccountSpend($accountId, $proxy)
{
  try
  {
    $request = new GetAccountMonthlySpendRequest();
    $request->AccountId = $accountId;
    $request->MonthYear = "2013-08-10T00:00:00";
    
    return $proxy->GetService()->GetAccountMonthlySpend($request)->Amount;
  }
  catch (SoapFault $e)
  {
    // Customer Billing service operations can throw AdApiFaultDetail.
    if (isset($e->detail->AdApiFaultDetail))
    {
      // Log this fault.

      print "The operation failed with the following faults:\n";

      $errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
      ? $e->detail->AdApiFaultDetail->Errors->AdApiError
      : array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

      // If the AdApiError array is not null, the following are examples of error codes that may be found.
      foreach ($errors as $error)
      {
        print "AdApiError\n";
        printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

        switch ($error->Code)
        {
          case 0:    // InternalError
            break;
          case 105:  // InvalidCredentials
            break;
          default:
            print "Please see MSDN documentation for more details about the error code output above.\n";
            break;
        }
      }
    }

    // Customer Billing service operations can throw ApiFault.
    elseif (isset($e->detail->ApiBatchFault))
    {
      // Log this fault.

      print "The operation failed with the following faults:\n";

      // If the BatchError array is not null, the following are examples of error codes that may be found.
      if (!empty($e->detail->ApiBatchFault->BatchErrors))
      {
        $errors = is_array($e->detail->ApiBatchFault->BatchErrors->BatchError)
        ? $e->detail->ApiBatchFault->BatchErrors->BatchError
        : array('BatchError' => $e->detail->ApiBatchFault->BatchErrors->BatchError);

        foreach ($errors as $error)
        {
          printf("BatchError at Index: %d\n", $error->Index);
          printf("Code: %d\nMessage: %s\n", $error->Code, $error->Message);

          switch ($error->Code)
          {
            case 0:     // InternalError
              break;
            default:
              print "Please see MSDN documentation for more details about the error code output above.\n";
              break;
          }
        }
      }

      // If the OperationError array is not null, the following are examples of error codes that may be found.
      if (!empty($e->detail->ApiBatchFault->OperationErrors))
      {
        $errors = is_array($e->detail->ApiBatchFault->OperationErrors->OperationError)
        ? $e->detail->ApiBatchFault->OperationErrors->OperationError
        : array('OperationError' => $e->detail->ApiBatchFault->OperationErrors->OperationError);

        foreach ($errors as $error)
        {
          print "OperationError\n";
          printf("Code: %d\nMessage: %s\n", $error->Code, $error->Message);

          switch ($error->Code)
          {
            case 0:     // InternalError
              break;
            case 106:   // UserIsNotAuthorized
              break;
            default:
              print "Please see MSDN documentation for more details about the error code output above.\n";
              break;
          }
        }
      }
    }

    // Customer Billing service operations can throw ApiFault.
    elseif (isset($e->detail->ApiFault))
    {
      // Log this fault.

      print "The operation failed with the following faults:\n";

      // If the OperationError array is not null, the following are examples of error codes that may be found.
      if (!empty($e->detail->ApiFault->OperationErrors))
      {
        $errors = is_array($e->detail->ApiFault->OperationErrors->OperationError)
        ? $e->detail->ApiFault->OperationErrors->OperationError
        : array('OperationError' => $e->detail->ApiFault->OperationErrors->OperationError);

        foreach ($errors as $error)
        {
          print "OperationError\n";
          printf("Code: %d\nMessage: %s\n", $error->Code, $error->Message);

          switch ($error->Code)
          {
            case 0:     // InternalError
              break;
            case 106:   // UserIsNotAuthorized
              break;
            default:
              print "Please see MSDN documentation for more details about the error code output above.\n";
              break;
          }
        }
      }
    }

    else
    {
      print $e->getCode()." ".$e->getMessage()."\n\n";

      // Output the last request/response.

      print "\nLast SOAP request/response:\n";
      print $proxy->GetWsdl() . "\n";
      print $proxy->GetService()->__getLastRequest()."\n";
      print $proxy->GetService()->__getLastResponse()."\n";
    }

    throw new Exception("", 0, $e);
  }
}

// Define the proxy class for the provided Bing Ads service. 
 
Class ClientProxy 
{ 
    private $username; 
    private $password; 
    private $developerToken; 
    private $wsdlUrl; 
    private $service; 
    private $namespace; 
 
    public function __construct($username, $password, $token, $wsdl) 
    { 
        $this->username = $username; 
        $this->password = $password; 
        $this->developerToken = $token; 
        $this->wsdlUrl = $wsdl; 
        $this->service = $this->GetProxy($wsdl); 
    } 
 
    public function GetService() { return $this->service; } 
    public function GetNamespace() { return $this->namespace; } 
    public function GetWsdl() { return $this->wsdlUrl; } 
 
    // This function gets the namespace from the WSDL, so you do 
    // not have to hardcode it in the client. 
 
    private function GetServiceNamespace($url) 
    { 
        $doc = new DOMDocument; 
        $doc->Load($url); 
 
        $xpath = new DOMXPath($doc); 
        $query = "/*/@targetNamespace"; 
 
        $attrs = $xpath->query($query); 
 
        // The query will return only one node in the node list. 
 
        foreach($attrs as $attr) 
        { 
            $namespace = $attr->value; 
        } 
 
        return $namespace; 
    } 
 
    private function GetProxy($wsdl) 
    { 
        $this->namespace = $this->GetServiceNamespace($wsdl); 
 
        // Define the SOAP headers. Customer ID is required 
        // to get editorial reasons. 
 
        $headers = array(); 
 
        $headers[] = new SoapHeader( 
                $this->namespace, 
                'DeveloperToken', 
                $this->developerToken 
        ); 
 
        $headers[] = new SoapHeader( 
                $this->namespace, 
                'UserName', 
                $this->username 
        ); 
 
        $headers[] = new SoapHeader( 
                $this->namespace, 
                'Password', 
                $this->password 
        ); 
 
        // By default, PHP does not return single item arrays as an array type. 
        // To force PHP to always return an array for an array type in the 
        // response, specify the SOAP_SINGLE_ELEMENT_ARRAYS feature. 
 
        $options = array( 
                'trace' => TRUE, 
                'exceptions' => TRUE, 
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS, 
 
                // Map long type to string type. For details, see 
                // from_long_xml and to_long_xml callbacks. 
 
                'typemap' => array( 
                        array( 
                                'type_ns' => 'http://www.w3.org/2001/XMLSchema', 
                                'type_name' => 'long', 
                                'to_xml' => 'to_long_xml', 
                                'from_xml' => 'from_long_xml' 
                        ), 
                ) 
        ); 
 
        $proxy = @new SOAPClient($this->wsdlUrl, $options); 
 
        $proxy->__setSoapHeaders($headers); 
 
        return $proxy; 
    } 
} 
 
// Converts long types found in SOAP responses to string types in PHP. 
 
function from_long_xml($xmlFragmentString) 
{ 
    return (string)strip_tags($xmlFragmentString); 
} 
 
// Converts PHP string types to long types in SOAP requests. 
 
function to_long_xml($longVal) 
{ 
    return '<long>' . $longVal . '</long>'; 
} 
 
?>