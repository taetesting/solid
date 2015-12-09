<?php
namespace Solid\SRP;

use Solid\SRP\Printer;

class PlainTextPrinter implements Printer
{
    function printPage($page)
    {
        echo $page;
    }
 
}