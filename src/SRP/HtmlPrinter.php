<?php
namespace Solid\SRP;

use Solid\SRP\Printer;

class HtmlPrinter implements Printer
{
    function printPage($page)
    {
        echo '<div style="single-page">' . $page . '</div>';
    }
 
}