<?php
namespace Barn2\Plugin\Posts_Table_Pro\Data;

use Barn2\Plugin\Posts_Table_Pro\Data\Abstract_Table_Data;

/**
 * Gets post data for the excerpt column.
 *
 * @package   Barn2\posts-table-pro
 * @author    Barn2 Plugins <support@barn2.co.uk>
 * @license   GPL-3.0
 * @copyright Barn2 Media Ltd
 */
class Post_Excerpt extends Abstract_Table_Data {

    public function get_data() {
        $excerpt = apply_filters( 'the_excerpt', get_the_excerpt( $this->post ) );
        return apply_filters( 'posts_table_data_excerpt', $excerpt, $this->post );
    }

}
