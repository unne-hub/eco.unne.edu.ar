<?php
namespace Barn2\Plugin\Posts_Table_Pro\Data;

use Barn2\Plugin\Posts_Table_Pro\Data\Abstract_Table_Data,
    Barn2\Plugin\Posts_Table_Pro\Util\Util;

/**
 * Gets post data for the ID column.
 *
 * @package   Barn2\posts-table-pro
 * @author    Barn2 Plugins <support@barn2.co.uk>
 * @license   GPL-3.0
 * @copyright Barn2 Media Ltd
 */
class Post_Id extends Abstract_Table_Data {

    public function get_data() {
        if ( array_intersect( [ 'all', 'id' ], $this->links ) ) {
            $id = Util::format_post_link( $this->post, $this->post->ID );
        } else {
            $id = $this->post->ID;
        }

        return apply_filters( 'posts_table_data_id', $id, $this->post );
    }

}
