<?php
namespace Barn2\Plugin\Posts_Table_Pro\Integration;

use Barn2\PTP_Lib\Registerable;

/**
 * Handles theme-specific integration with PTP.
 *
 * @package   Barn2\posts-table-pro
 * @author    Barn2 Plugins <support@barn2.co.uk>
 * @license   GPL-3.0
 * @copyright Barn2 Media Ltd
 */
class Theme_Integration implements Registerable {

    private $theme;

    public function __construct() {
        $this->theme = strtolower( get_template() );
    }

    public function register() {
        switch ( $this->theme ) {
            case 'avada':
                add_filter( 'posts_table_button_column_button_class', function( $class ) {
                    return $class . ' fusion-button button-flat button-medium button-default fusion-button-default-span fusion-button-default-type';
                } );

                add_filter( 'posts_table_button_column_button_text', function( $text ) {
                    return '<span class="fusion-text">' . $text . '</span>';
                } );
                break;
            case 'divi':
                add_filter( 'posts_table_button_column_button_class', function( $class ) {
                    return $class . ' et_pb_button et_pb_bg_layout_light';
                } );
                break;
            case 'enfold':
                add_filter( 'posts_table_button_column_button_class', function( $class ) {
                    return $class . ' avia-button avia-color-theme-color-subtle avia-size-small';
                } );
                break;
            case 'salient':
                add_filter( 'posts_table_button_column_button_class', function( $class ) {
                    return $class . ' nectar-button regular regular-button accent-color';
                } );

                add_filter( 'posts_table_button_column_button_text', function( $text ) {
                    return '<span>' . $text . '</span>';
                } );
                break;
            case 'total':
                add_filter( 'posts_table_button_column_button_class', function( $class ) {
                    return $class . ' theme-button';
                } );

                add_filter( 'posts_table_button_column_button_text', function( $text ) {
                    return '<span class="theme-button-inner">' . $text . '</span>';
                } );
                break;
        }
    }

}
