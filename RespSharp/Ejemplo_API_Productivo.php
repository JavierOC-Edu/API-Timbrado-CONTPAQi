<?php
// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new http('https://api.contpaqinube.com/v2/sandbox/fiscal/stamping-isv/stamp', HTTP_Request2::METHOD_POST);
$url = $request->getUrl();

$headers = array(
    // Request headers
    'licenseId' => 'f619f411a410440596ae722758b51975',
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => 'f619f411a410440596ae722758b51975',
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

//$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody("<?xml version=\"1.0\" encoding=\"utf-8\"?><cfdi:Comprobante xmlns:cfdi=\"http://www.sat.gob.mx/cfd/3\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" Version=\"3.3\" xsi:schemaLocation=\"http://www.sat.gob.mx/cfd/3 http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv33.xsd\" Certificado=\"MIIGXTCCBEWgAwIBAgIUMDAwMDEwMDAwMDA0MDg0NDQxMDIwDQYJKoZIhvcNAQELBQAwggGyMTgwNgYDVQQDDC9BLkMuIGRlbCBTZXJ2aWNpbyBkZSBBZG1pbmlzdHJhY2nDs24gVHJpYnV0YXJpYTEvMC0GA1UECgwmU2VydmljaW8gZGUgQWRtaW5pc3RyYWNpw7NuIFRyaWJ1dGFyaWExODA2BgNVBAsML0FkbWluaXN0cmFjacOzbiBkZSBTZWd1cmlkYWQgZGUgbGEgSW5mb3JtYWNpw7NuMR8wHQYJKoZIhvcNAQkBFhBhY29kc0BzYXQuZ29iLm14MSYwJAYDVQQJDB1Bdi4gSGlkYWxnbyA3NywgQ29sLiBHdWVycmVybzEOMAwGA1UEEQwFMDYzMDAxCzAJBgNVBAYTAk1YMRkwFwYDVQQIDBBEaXN0cml0byBGZWRlcmFsMRQwEgYDVQQHDAtDdWF1aHTDqW1vYzEVMBMGA1UELRMMU0FUOTcwNzAxTk4zMV0wWwYJKoZIhvcNAQkCDE5SZXNwb25zYWJsZTogQWRtaW5pc3RyYWNpw7NuIENlbnRyYWwgZGUgU2VydmljaW9zIFRyaWJ1dGFyaW9zIGFsIENvbnRyaWJ1eWVudGUwHhcNMTcxMjA2MjAwNDA4WhcNMjExMjA2MjAwNDA4WjCB/TE1MDMGA1UEAxMsTEFCT1JBVE9SSU8gREUgUEFUT0xPR0lBIENMSU5JQ0EgVkFMTEFSVEEgU0MxNTAzBgNVBCkTLExBQk9SQVRPUklPIERFIFBBVE9MT0dJQSBDTElOSUNBIFZBTExBUlRBIFNDMTUwMwYDVQQKEyxMQUJPUkFUT1JJTyBERSBQQVRPTE9HSUEgQ0xJTklDQSBWQUxMQVJUQSBTQzElMCMGA1UELRMcTFBDOTExMjE4Qkc0IC8gTU9HSDY1MTAwM1RNOTEeMBwGA1UEBRMVIC8gTU9HSDY1MTAwM0hKQ1JSQzAxMQ8wDQYDVQQLEwZtYXRyaXowggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCK+NVVPdXSwt77qnhNdkcBXZDYE64LskHgFDIxYlF+GHvJXRW6c1xF+l0ahJ7FJhynO0QoJkcfkPIDwU4B2dWXp7l9wkWIJwqzpVbtMAJqj9bEmakp+OjrVg1zKBVSKx2p9zKGHJNK8VC93KVnq8xP/x8fqO3UyGNal7vAVUqbYtPuGqi1n6o9stjqDZqQzvgCHR6jO9GA2mHrHMLk01fhNMc3QK5QgpMPRWP5DbZmz/9jogcYIEIQccOGfayRNkuH0LVIUe+Reuen06mWTsdjGogDADaxGxyhF/5BZJs3Yrn3R93acZCW22gEi1TjFJM5fjg+f5+44oLoGxM+/fmLAgMBAAGjHTAbMAwGA1UdEwEB/wQCMAAwCwYDVR0PBAQDAgbAMA0GCSqGSIb3DQEBCwUAA4ICAQCBZD96O6G+pDMnM5oWMlrRIlW+HRjw/YsJmZ4hdDyw+WgIjvj0iIHumms2NpgNrvn+wbhPhTRBEDEhYaFHllGB09HDzNq7qDlk3sixoh/9j78vEGs+SriTLg+KjEAEpuFxeqBHBHDDO3W4Z/BwJP5pDP8Lcw9RYQ0bIdUgEQ23UJE4YoTZJTiKcKR21920Vb1nWAYoIobHNjOprheNAJBDHZb3IsGrYf8dQLzzv3FcV9yfni/yzM8I250OLA0wCeQDBvE+uHYRC9MtxC/5hXGz22MyHprubZ63sluS93So0N8JsXE4Ez6VA0Xa2PmHRturt3s22950mX5l0Eb8/ZVPGE/JFwnNhkbKsHWdobt0+i+X7dSA4Wzzi/93/JD0vUJ+XDFFI8FVQEn2pv+4rp9lffI2i5iWu7Fo+kesS4E9l1lVUIBxSDdQx0Xisvuc6bJ8sxtuUfj4OsoYSIX4mpNAsfuSTQ4VoigZPyydbx9Uw1pF6G0gHUcRax0m9zktlSgLSj//eFv+J3bVmmyP6xJfr2h3rpTJy6dag07257RfEjjjpe9Fq56xiRYb77REPrFQHTSKKQzzVmzCJy8/nmzFPCk0YoiipYOkKPUQ08uDTGGggAdOf/oxg29JEBA4wNhNY+gmxS2jgkg4+wCe3jMT8UGlxsWBGarfBMa4IZYOBw==\" Fecha=\"2021-06-29T14:36:39\" FormaPago=\"01\" LugarExpedicion=\"48300\" MetodoPago=\"PUE\" Moneda=\"MXN\" NoCertificado=\"00001000000408444102\" Sello=\"OTvNVl/H6f+u3pWHNL5gsEq3JHAReqpKtcVRXQz4BpdkeetQeKQxOIIOj1kBJtB/Mz1rLsBrK4QQC7yaby/ZO+/Odz17SRKhTsJgHNVt2DVMBDq1Pef1e3XRZrFNr75Si2cS6BTDBRPiEKQHXH+xi2ziAGFjNnkcFnbHsZwnecBFWZTcQmszbHvxlc6e5AiLBWVbbpSk6SJcijzoUyHc4UimG2K96edQ5ocVk80KIzTFFlXXSZXwTXlvJODce7t/J1TvhCQNLpsr1aaNLPMrDZfC8Z2addkuLeGNW7YS+lofT34aUkIazyafRKlc8ePGf20fxXrR6RdPgncqjZDJvw==\" SubTotal=\"2773.28\" TipoDeComprobante=\"I\" Folio=\"32417\" Total=\"3217.00\" ><cfdi:Emisor Rfc=\"LPC911218BG4\" Nombre=\"LABORATORIO DE PATOLOGIA CLINICA VALLARTA S.C.\"  RegimenFiscal=\"601\"/><cfdi:Receptor Rfc=\"XAXX010101000\" Nombre=\"CLIENTES VARIOS\"  UsoCFDI=\"G03\"/><cfdi:Conceptos><cfdi:Concepto  ClaveProdServ=\"85121801\" Cantidad=\"1.00\" ClaveUnidad=\"E48\" Descripcion=\"Servicios de laboratorios de analisis de sangre\"  ValorUnitario=\"2773.28\" Importe=\"2773.28\" ><cfdi:Impuestos>     <cfdi:Traslados>         <cfdi:Traslado  Base=\"2773.28\" Impuesto=\"002\"  TipoFactor=\"Tasa\"  TasaOCuota=\"0.160000\"  Importe=\"443.724138\"  />     </cfdi:Traslados></cfdi:Impuestos></cfdi:Concepto></cfdi:Conceptos><cfdi:Impuestos TotalImpuestosTrasladados=\"443.72\"><cfdi:Traslados>  <cfdi:Traslado Importe=\"443.72\" Impuesto=\"002\" TasaOCuota=\"0.160000\" TipoFactor=\"Tasa\"/></cfdi:Traslados></cfdi:Impuestos></cfdi:Comprobante>");

try
{
    $response = $request->send();
    echo $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}

?>
