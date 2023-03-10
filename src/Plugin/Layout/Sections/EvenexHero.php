<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex hero section
 * @Layout(
 *  id = "evenex-hero",
 *  label = @Translation("Evenex: Hero"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "evenex_hero",
 *  library = "evenex/evenex_hero",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "subTitle" = {
 *       "label" = @Translation("Evenex: subtitle region"),
 *      },
 *      "date" = {
 *       "label" = @Translation("Evenex: date region"),
 *      },
 *      "callToActionIcon" = {
 *       "label" = @Translation("Evenex: call to action icon region"),
 *      },
 *      "callToAction" = {
 *       "label" = @Translation("Evenex: call to action region"),
 *      },
 *      "by" = {
 *       "label" = @Translation("Evenex: by region"),
 *      },
 *      "secondadyBackgroundImage" = {
 *       "label" = @Translation("Evenex: secondary background image region"),
 *      },
 *      "mainBackgroundImage" = {
 *       "label" = @Translation("Evenex: main background image region"),
 *      },
 *      "location" = {
 *       "label" = @Translation("Evenex: location region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexHero extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'evenex') . "/icones/sections/evenex_hero.png");
    }

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::build
     */
    public function build(array $regions)
    {
        // TODO auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);

        return $build;
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'load_library' => true,
            'region_css_location' => 'h2',
            'region_css_by' => 'h4',
            'region_css_date' => 'h4',
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static',
                ],
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => '',
                        ]
                    ],
                    'subTitle' => [
                        'text_html' => [
                            'label' => 'SubTitle',
                            'value' => '',
                        ]
                    ],
                    'callToActionIcon' => [
                        'text_html' => [
                            'label' => 'Call To Action Icon',
                            'value' => '',
                        ]
                    ],
                    'callToAction' => [
                        'text_html' => [
                            'label' => 'Call To Action',
                            'value' => '',
                        ]
                    ],
                    'secondadyBackgroundImage' => [
                        'text_html' => [
                            'label' => 'Secondary Background Image',
                            'value' => '',
                        ]
                    ],
                    'by' => [
                        'text_html' => [
                            'label' => 'By',
                            'value' => '',
                        ]
                    ],
                    'mainBackgroundImage' => [
                        'text_html' => [
                            'label' => 'Main Background Image',
                            'value' => '',
                        ]
                    ],
                    'location' => [
                        'text_html' => [
                            'label' => 'Location',
                            'value' => '',
                        ]
                    ],
                    'date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
