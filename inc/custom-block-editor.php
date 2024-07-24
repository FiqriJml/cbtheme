<?php
use Carbon_Fields\Block;
use Carbon_Fields\Field;
use Carbon_Fields\Container;


add_action('carbon_fields_register_fields', 'custom_block');
function custom_block()
{
    // CTA Wizard Banner section
    Block::make(__('CTA Wizard Banner'))
        ->add_fields(
            array(
                Field::make('image', 'image', __('Banner Image')),
                Field::make('image', 'bg_image', __('Background Image')),
                Field::make('rich_text', 'heading', __('Banner Title')),
                Field::make('text', 'text-price', __('Text Before Price')),
                Field::make('text', 'pricing', __('Start Price')),
                Field::make('text', 'tag-price', __('Tagline Price')),
                Field::make('text', 'content', __('Content')),
                Field::make('complex', 'tasks', __('Tasks'))
                    ->add_fields(
                        array(
                            Field::make('text', 'task', __('Task'))
                        )
                    ),
                Field::make('text', 'reviews_count', __('Reviews Count'))
                    ->help_text(__('Enter the number of reviews'))

            )
        )
        ->set_icon('star-filled')
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            // Convert image IDs to URLs
            $fields['image'] = wp_get_attachment_image_url($fields['image'], 'full');
            $fields['bg_image'] = wp_get_attachment_image_url($fields['bg_image'], 'full');
            setData($fields);
            get_template_part('components/cta-wizard-banner');
        });

    // @end Banner
}