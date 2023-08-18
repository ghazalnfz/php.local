<?php

require_once "classes/htmlExport.php";
require_once "classes/jsonExport.php";
require_once "classes/xmlExport.php";

$export = "html";

$handler = $export."export";

$handlerObj = new $handler;



class exportHandler{

    public function doExport(canExport $handler)
    {
       // if($handler instanceof htmlExport && method_exists()){
            $handler->export();
       // }
    }
}

$exportObj = new exportHandler();
$exportObj->doExport($handlerObj);

