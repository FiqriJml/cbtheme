<?php
use Carbon_Fields\Block;
use Carbon_Fields\Field;
use Carbon_Fields\Container;


if (!function_exists('highlight_text')) {
    // Function to highlight words
    function highlight_text($text, $words)
    {
        foreach ($words as $word) {
            if (!empty($word)) {
                $text = str_replace($word, "<span class='highlight'>{$word}</span>", $text);
            }
        }
        return $text;
    }
}

add_action('carbon_fields_register_fields', 'custom_block');
function custom_block()
{
    // Hero Mobile Section
    Block::make(__('Hero Mobile'))
        ->set_category('custom-blocks', __('Custom Blocks'), 'star-filled')
        ->add_fields(
            array(
                Field::make('text', 'heading', __('Heading Title')),
                Field::make('text', 'highlight_words', __('Words to Highlight'))
                    ->help_text(__('Separate words with commas')),
                Field::make('complex', 'tasks', __('List We Do'))
                    ->add_fields(
                        array(
                            Field::make('text', 'task', __('Task'))
                        )
                    ),
                Field::make('image', 'image', __('Hero Image')),
                Field::make('text', 'button_text', __('Text Button')),
                Field::make('text', 'button_url', __('URL Button')),
                Field::make('text', 'reviews_count', __('Reviews Count'))
                    ->help_text(__('Enter the number of reviews'))
            )
        )->set_icon('star-filled')
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            $heading = $fields['heading'];
            $highlight_words = $fields['highlight_words'];

            // Convert the highlighted words into an array
            $highlight_words_array = array_map('trim', explode(',', $highlight_words));

            // Apply highlighting
            $heading = highlight_text($heading, $highlight_words_array);

            $fields['heading'] = $heading;
            $fields['image'] = wp_get_attachment_image_url($fields['image'], 'full');
            setData($fields);
            get_template_part('components/hero');
        });
    // @end Hero
    // Logo Carousell
    Block::make(__('Logo Carousell'))
        ->add_fields(
            array(
                Field::make('image', 'image', __('Logo Carousel')),
            )
        )
        ->set_icon('admin-generic')
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            // Convert image IDs to URLs
            $fields['image'] = wp_get_attachment_image_url($fields['image'], 'full');
            setData($fields);
            get_template_part('components/logo-carousel');
        });
    //@end Logo Carousell
    // process section
    Block::make(__('Process Section'))
        ->add_fields(
            array(
                Field::make('text', 'heading', __('Heading Title')),
                Field::make('text', 'tag', __('Heading Tag')),
                Field::make('text', 'btn_text', __('Button Text')),
                Field::make('text', 'btn_url', __('Button url')),
                Field::make('image', 'image', __('Image Theme')),
                Field::make('complex', 'tasks', __('Tasks'))
                    ->add_fields(
                        array(
                            Field::make('text', 'task', __('Task'))
                        )
                    ),
            )
        )
        ->set_icon('forms')
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            // Convert image IDs to URLs
            $fields['image'] = wp_get_attachment_image_url($fields['image'], 'full');
            setData($fields);
            get_template_part('components/process-section');
        });
    // @end process section
    // gallery caraousel
    Block::make(__('gallery caraousel'))
        ->add_fields(
            array(
                Field::make('complex', 'images', __('Tasks'))
                    ->add_fields(
                        array(
                            Field::make('image', 'image', __('Image'))
                                ->set_value_type('url')
                        )
                    ),
            )
        )
        ->set_icon('admin-media')
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/gallery');
        });
    // @end gallery caraousel
    // Text to Highlight
    Block::make(__('Text to Highlight'))
        ->add_fields(
            array(
                Field::make('rich_text', 'heading', __('Heading Text'))
                    ->help_text(__('To highlight the word, bold the word')),
                Field::make('image', 'bg_image', __('Background Image'))
                    ->set_value_type('url')
            )
        )
        ->set_icon('media-text')
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            setData($fields);
            get_template_part('components/text-to-highlight');
        });
    // @end Text to Highlight
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