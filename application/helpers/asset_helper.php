<?php
if(!function_exists('assets'))
{
    function assets($file_name,$asset_folder = 'assets')
    {
        return base_url($asset_folder.'/'.$file_name);
    }
}