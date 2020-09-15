<?php
/**
 * xquiz - MODULE FOR XOOPS
 * Copyright (c) Mojtaba Jamali of persian xoops project (http://www.irxoops.org/)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         xquiz
 * @author 			Mojtaba Jamali(jamali.mojtaba@gmail.com)
 * @version         $Id: $
 */
function xquiz_CleanVars($global, $key, $default = '', $type = 'int')
{
    switch ($type) {
        case 'string':
            //$ret = (isset($global[$key])) ? $global[$key] : $default;
            $ret = isset($global[$key]) ? filter_var($global[$key], FILTER_SANITIZE_ADD_SLASHES) : $default;
            break;
        case 'int':
        default:
            //$ret = (isset($global[$key])) ? intval($global[$key]) : intval($default);
            $ret = isset($global[$key]) ? filter_var($global[$key], FILTER_SANITIZE_NUMBER_INT) : $default;
            break;
    }

    if (false === $ret) {
        return $default;
    }

    return $ret;
}
