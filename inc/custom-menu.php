<?php
function mytheme_add_custom_menu_fields($item_id, $item, $depth, $args)
{
    ?>
    <p class="description description-wide">
        <label for="edit-menu-item-icon-<?php echo $item_id; ?>">
            <?php _e('Menu Icon URL'); ?><br>
            <input type="text" id="edit-menu-item-icon-<?php echo $item_id; ?>" class="widefat code edit-menu-item-icon"
                name="menu-item-icon[<?php echo $item_id; ?>]"
                value="<?php echo esc_attr(get_post_meta($item_id, '_menu_item_icon', true)); ?>" />
            <button type="button" class="button upload-icon-button"
                data-target="#edit-menu-item-icon-<?php echo $item_id; ?>">Upload Icon</button>
        </label>
    </p>
    <?php
}
add_action('wp_nav_menu_item_custom_fields', 'mytheme_add_custom_menu_fields', 10, 4);

function mytheme_save_custom_menu_fields($menu_id, $menu_item_db_id)
{
    if (isset($_POST['menu-item-icon'][$menu_item_db_id])) {
        update_post_meta($menu_item_db_id, '_menu_item_icon', $_POST['menu-item-icon'][$menu_item_db_id]);
    } else {
        delete_post_meta($menu_item_db_id, '_menu_item_icon');
    }
}
add_action('wp_update_nav_menu_item', 'mytheme_save_custom_menu_fields', 10, 2);
