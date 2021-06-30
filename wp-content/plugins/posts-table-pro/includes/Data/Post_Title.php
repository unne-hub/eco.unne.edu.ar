<?php
namespace Barn2\Plugin\Posts_Table_Pro\Data;

use Barn2\Plugin\Posts_Table_Pro\Data\Abstract_Table_Data,
    Barn2\Plugin\Posts_Table_Pro\Util\Util;

/**
 * Gets post data for the title column.
 *
 * @package   Barn2\posts-table-pro
 * @author    Barn2 Plugins <support@barn2.co.uk>
 * @license   GPL-3.0
 * @copyright Barn2 Media Ltd
 */
class Post_Title extends Abstract_Table_Data {

    public function get_data() {
        //@todo - Don't link to post if it's not viewable on front-end
        if ( array_intersect( [ 'all', 'title' ], $this->links ) ) {
            $title = Util::format_post_link( $this->post );
        } else {
            $title = get_the_title( $this->post );
        }

        return apply_filters( 'posts_table_data_title', $title, $this->post );
    }

}
