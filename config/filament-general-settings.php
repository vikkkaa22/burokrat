<?php

use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;
use Joaopaulolndev\FilamentGeneralSettings\Enums\TypeFieldEnum;
return [
    'model' => GeneralSetting::class,
    'show_application_tab' => true,
    'show_logo_and_favicon' => false,
    'show_analytics_tab' => false,
    'show_seo_tab' => true,
    'show_email_tab' => false,
    'show_social_networks_tab' => true,
    'expiration_cache_config_time' => 60,
    'show_custom_tabs'=> true,
   
    'custom_tabs' => [
        'more_configs' => [
            'label' => 'Дополнительная информация',
            'icon' => 'heroicon-o-plus-circle',
            'columns' => 1,
            'fields' => [
                'working_time' => [
                    'type' => TypeFieldEnum::Text->value,
                    'label' => 'Часы работы',
                    'placeholder' => 'Часы работы',
                    'required' => false,
                    'rules' => 'string|max:255',
                ],
                'vk' => [
                    'type' => TypeFieldEnum::Text->value,
                    'label' => 'В конаткте',
                    'placeholder' => 'Ссылка',
                    'required' => false,
                    'rules' => 'string|max:255',
                ],
                'max' => [
                    'type' => TypeFieldEnum::Text->value,
                    'label' => 'МАКС',
                    'placeholder' => 'Ссылка',
                    'required' => false,
                    'rules' => 'string|max:255',
                ]
            ]
        ],
    ]
];
