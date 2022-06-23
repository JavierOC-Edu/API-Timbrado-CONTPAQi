##leer archivo y convertirlo a binario
#funcion para convertir de string a bynario
#abrimos un puntero en el archivo XML
obj_xml = open ("Ejemplos/prueba1.xml",'r')
#leemos el archivo abierto y se lo asignamos a la variable
xml_string = obj_xml.read()
#cerramos nuestro archivo
obj_xml.close()

print(xml_string)
#convertimos la cadena a binario que es como lo solicita el request PUT
xml_binary = ' '.join(map(bin,bytearray(xml_string,encoding='utf-8')))
    
print(xml_binary)
