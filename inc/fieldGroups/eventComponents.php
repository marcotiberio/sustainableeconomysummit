<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'eventMeta',
        'title' => 'Event Info',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Info', 'flynt'),
                'name' => 'infoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Date', 'flynt'),
                'name' => 'datePost',
                'type' => 'date_picker',
                'first_day' => 1,
                'wrapper' => [
                    'width' => 33,
                ],
                'display_format' => 'd.m.Y',
                'return_format' => 'd.m.Y'
            ],
            [
                'label' => __('Time', 'flynt'),
                'name' => 'timePost',
                'type' => 'time_picker',
                'first_day' => 1,
                'wrapper' => [
                    'width' => 33,
                ],
                'display_format' => 'g:i',
                'return_format' => 'g:i'
            ],
            [
                'label' => __('Location', 'flynt'),
                'name' => 'locationPost',
                'type' => 'text',
                'wrapper' => [
                    'width' => 33,
                ]
            ],
            [
                'label' => __('Info', 'flynt'),
                'name' => 'infoPost',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
                'wrapper' => [
                    'width' => 100,
                ]
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'eventComponents',
        'title' => __('Event Components', 'flynt'),
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'eventComponents',
                'label' => __('Events Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\GridImageText\getACFLayout(),
                    Components\HeroImageText\getACFLayout(),
                    Components\SliderBox\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
    ]);
});
