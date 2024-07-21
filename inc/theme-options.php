<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'custom_theme_options');
function custom_theme_options()
{
    Container::make('theme_options', __('Theme Options', 'crb'))
        ->add_fields(
            array(
                Field::make('image', 'header_logo', __('Header Logo'))
            )
        );
}