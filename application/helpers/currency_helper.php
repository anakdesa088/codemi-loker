<?php
if(!function_exists('rp_converter'))
{
    function rp_converter($amounts)
    {
        $formatter = number_format($amounts,0,',','.');
        return sprintf("Rp. %s,-",$formatter);
    }
}