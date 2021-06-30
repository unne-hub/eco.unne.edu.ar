<?php
namespace Barn2\PTP_Lib;

use Barn2\PTP_Lib\Util;

/**
 * A trait for a service container.
 *
 * @package   Barn2\barn-lib
 * @author    Barn2 Plugins <support@barn2.co.uk>
 * @license   GPL-3.0
 * @copyright Barn2 Media Ltd
 * @version   1.2
 */
trait Service_Container {

    private $services = [];

    public function register_services() {
        Util::register_services( $this->_get_services() );
    }

    public function get_service( $id ) {
        $services = $this->_get_services();
        return isset( $services[$id] ) ? $services[$id] : null;
    }

    public function get_services() {
        // Overidden by classes using this trait.
        return [];
    }

    private function _get_services() {
        if ( empty( $this->services ) ) {
            $this->services = $this->get_services();
        }

        return $this->services;
    }

}
