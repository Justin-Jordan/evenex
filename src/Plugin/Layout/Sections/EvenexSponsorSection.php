<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Sponsors section php
 * @Layout(
 *  id = "evenex_sponsor_section",
 *  label = @Translation("Evenex: sponsor section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "sponsor_section",
 *  library = "evenex/sponsor",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "description" = {
 *       "label" = @Translation("Evenex: description region"),
 *      },
 *      "callToAction" = {
 *       "label" = @Translation("Evenex: call to action region"),
 *      },
 *      "sponsor" = {
 *       "label" = @Translation("Evenex: sponsors region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexSponsorSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'evenex') . "/icones/sections/sponsor.png");
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
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static',
                ],
                'fields' => [
                    'title' => [
                        'text' => [
                            'label' => 'Title',
                            'value' => 'Our official sponsors',
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'description',
                            'value' => 'We have dedicated tracks for every industry Whether you want to hire tech’s top talent.',
                        ]
                    ],
                    'callToAction' => [
                        'text_html' => [
                            'label' => 'Text',
                            'value' => '<a href="#" class="sponsor-btn h5">
                            <div class="link-text">
                                Become a Sponsor
                            </div>
                            <div class="link-icon h4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14 9h8v6h-8z"/><path fill="currentColor" d="M20 3H5C3.346 3 2 4.346 2 6v12c0 1.654 1.346 3 3 3h15c1.103 0 2-.897 2-2v-2h-8c-1.103 0-2-.897-2-2V9c0-1.103.897-2 2-2h8V5c0-1.103-.897-2-2-2z"/></svg>
                            </div>
                        </a>'
                        ]
                    ],
                    'sponsors' => [
                        'text_html' => [
                            'label' => 'Stats',
                            'value' => ''
                        ]
                    ],
                ],
            ],
        ];
    }
}
