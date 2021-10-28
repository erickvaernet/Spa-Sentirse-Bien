<?php
$data = json_decode( file_get_contents('https://afip.tangofactura.com/Rest/GetContribuyenteFull?cuit=20377966601'), true );
echo var_dump($data);
print "DATOS ciudad:".$data['Contribuyente']['domicilioFiscal']['localidad'];
print "DATOS postal:".$data['Contribuyente']['domicilioFiscal']['codPostal'];
print "DATOS dir:".$data['Contribuyente']['domicilioFiscal']['direccion'];
print "DATOS prov:".$data['Contribuyente']['domicilioFiscal']['nombreProvincia'];
?>