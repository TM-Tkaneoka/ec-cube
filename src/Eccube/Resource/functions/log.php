<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

if (!function_exists('log_emergency')) {
    function log_emergency($message)
    {
        $app = \Eccube\Application::getInstance();
        $app['eccube.log']->emergency($message);
    }
}

if (!function_exists('log_alert')) {
    function log_alert($message)
    {
        $app = \Eccube\Application::getInstance();
        $app['eccube.log']->alert($message);
    }
}

if (!function_exists('log_critical')) {
    function log_critical($message)
    {
        $app = \Eccube\Application::getInstance();
        $app['eccube.log']->critical($message);
    }
}

if (!function_exists('log_error')) {
    function log_error($message)
    {
        $app = \Eccube\Application::getInstance();
        $app['eccube.log']->error($message);
    }
}

if (!function_exists('log_warning')) {
    function log_warning($message)
    {
        $app = \Eccube\Application::getInstance();
        $app['eccube.log']->warning($message);
    }
}

if (!function_exists('log_notice')) {
    function log_notice($message)
    {
        $app = \Eccube\Application::getInstance();
        $app['eccube.log']->notice($message);
    }
}

if (!function_exists('log_info')) {
    function log_info($message)
    {
        $app = \Eccube\Application::getInstance();
        $app['eccube.log']->info($message);
    }
}

if (!function_exists('log_debug')) {
    function log_debug($message)
    {
        $app = \Eccube\Application::getInstance();
        $app['eccube.log']->debug($message);
    }
}
