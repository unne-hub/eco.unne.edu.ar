<?php

namespace Barn2\PTP_Lib;

/**
 * An object that provides services (instances of Barn2\PTP_Lib\Service).
 *
 * @package   Barn2\barn2-lib
 * @author    Barn2 Plugins <support@barn2.co.uk>
 * @license   GPL-3.0
 * @copyright Barn2 Media Ltd
 * @version   1.1
 */
interface Service_Provider {

    /**
     * Get the service for the specified ID.
     *
     * @param string $id The service ID
     * @return Service The service object
     */
    public function get_service( $id );

    /**
     * Get the list of services provided.
     *
     * @return array The list of service objects.
     */
    public function get_services();

}
