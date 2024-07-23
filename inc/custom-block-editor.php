<?php
use Carbon_Fields\Block;
use Carbon_Fields\Field;
use Carbon_Fields\Container;


add_action('carbon_fields_register_fields', 'custom_block');
function custom_block()
{
    // Hero section
    Block::make(__('Hero'))
        ->add_fields(
            array(
                Field::make('image', 'image', __('Hero Image')),
                Field::make('rich_text', 'heading', __('Hero Title')),
                Field::make('text', 'text-price', __('Text Before Price')),
                Field::make('text', 'pricing', __('Start Price')),
                Field::make('text', 'tag-price', __('Tagline Price')),
            )
        )
        ->set_icon('star-filled')
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/hero');
        });

    // @end Hero
}