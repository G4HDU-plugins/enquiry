<?php

/*
* e107 website system
*
* Copyright (C) 2008-2015 e107 Inc (e107.org)
* Released under the terms and conditions of the
* GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
*
*/

if (!defined('e107_INIT'))
{
    exit;
}

//v2.x spec.
class enquiry_frontpage // include plugin-folder in the name.
{
    // simple
    function config()
    {
        $frontPage = array('page' => '{e_PLUGIN}enquiry/\/index.php', 'title' => LAN_PLUGIN_ENQUIRY_NAME);
        return $frontPage;
    }
}

?>