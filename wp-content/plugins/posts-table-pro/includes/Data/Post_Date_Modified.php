<?php
namespace Barn2\Plugin\Posts_Table_Pro\Data;

use Barn2\Plugin\Posts_Table_Pro\Data\Abstract_Table_Data;

/**
 * Gets post data for the date column.
 *
 * @package   Barn2\posts-table-pro
 * @author    Barn2 Plugins <support@barn2.co.uk>
 * @license   GPL-3.0
 * @copyright Barn2 Media Ltd
 */
class Post_Date_Modified extends Abstract_Table_Data {

    private $date_format;

    public function __construct( $post, $date_format ) {
        parent::__construct( $post );
        $this->date_format = $date_format;
    }

    public function get_data() {
        $date_modified = get_the_modified_date( $this->date_format, $this->post );
        return apply_filters( 'posts_table_data_date_modified', $date_modified, $this->post );
    }

    public function get_sort_data() {
        return get_the_modified_date( 'U', $this->post );
    }

}
