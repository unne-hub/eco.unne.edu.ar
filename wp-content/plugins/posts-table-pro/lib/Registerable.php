<?php
namespace Barn2\PTP_Lib;

/**
 * An object that can be registered with WordPress via the Plugin API, i.e. add_action() and add_filter().
 *
 * @package   Barn2\barn2-lib
 * @author    Barn2 Plugins <support@barn2.co.uk>
 * @license   GPL-3.0
 * @copyright Barn2 Media Ltd
 * @version   1.0
 */
interface Registerable {

    public function register();

}
