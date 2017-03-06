<?php
/**
 * Created by PhpStorm.
 * User: yuyi
 * Date: 17/3/6
 * Time: 20:51
 */
include __DIR__."/../vendor/autoload.php";
$wkhtmltopdf = new \Wing\Wkhtmltopdf\Library\Wkhtmltopdf(array(
    "path"    => __DIR__ ,
    "binpath" => dirname(__DIR__). "/bin/wkhtmltopdf"
));
$wkhtmltopdf->setTitle("yuyi");
$wkhtmltopdf->setMinimumFontSize(60);
$wkhtmltopdf->setPageSize("A4");
$wkhtmltopdf->setUrl("http://www.itdfy.com/details/863");
$wkhtmltopdf->output(\Wing\Wkhtmltopdf\Library\Wkhtmltopdf::MODE_SAVE, "123.pdf");