<?php
namespace Barn2\PTP_Lib\Table;

/**
 * An interface for table data.
 *
 * Each column in the table implements this interface to retrieve its data.
 *
 * @package   Barn2\barn2-lib
 * @author    Barn2 Plugins <support@barn2.co.uk>
 * @license   GPL-3.0
 * @copyright Barn2 Media Ltd
 */
interface Table_Data_Interface {

    public function get_data();

    public function get_filter_data();

    public function get_sort_data();

}
