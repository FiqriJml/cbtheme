<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

function crb_attach_theme_options()
{
    Container::make('theme_options', __('Theme Options', 'crb'))
        ->add_fields(
            array(
                Field::make('image', 'header_logo', __('Header Logo'))
            )
        );
}
add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
