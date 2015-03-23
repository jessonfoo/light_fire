<?php
$xmlFile = file_get_contents( get_template_directory() . "/admin/layout/options.xml");
$xml= new SimpleXMLElement($xmlFile);

//var_dump ( $xml );
?>