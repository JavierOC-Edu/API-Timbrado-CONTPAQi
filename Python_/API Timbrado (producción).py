# -*- coding: utf-8 -*-
import requests
import json
#direccion url para request, a donde se le hara la petición POST
url = "https://api.contpaqinube.com/v2/sandbox/fiscal/stamping-isv/stamp"
#path del XML que intentaremos timbrar.
path_xml = "./Ejemplos/DV CFDI33 - Comprobante 1.xml"
#abrimos un archivo con el puntero al inicio para leer el XML
obj_xml = open (path_xml,'r')
#leemos el archivo abiert
xml_string = obj_xml.read()
#cerramos el archivo de lectura.
obj_xml.close()

params = {
  'UUID' : '136AF316-011F-43D5-BF03-91E58BD90706',
  'IssuerRFC' : 'EKU9003173C9',
  'ReceiverRFC' : 'XIA190128J61',
  'Total': '3539.28'
}
#encabezados para la petición
headers_peticion = {
  'licenseId': '',#asignar su LicenseId
  'Ocp-Apim-Subscription-Key': ''#Asignar su Subscription-Key
}
#petición POST
response_post = requests.request("POST", url, headers=headers_peticion, data=xml_string)
#validamos que la respuesta sea éxitosa, = 200

if response_post.status_code == 200:
    tfd = response_post.json()
    print("respuesta exítosa.")
    print(str (tfd))
    
    
    
    '''
    Consultar el estado de un comprobande
    '''
    

#petición GET enviando parametros y encabezado    
response_get = requests.request("GET",url, headers=headers_peticion,params=params)
