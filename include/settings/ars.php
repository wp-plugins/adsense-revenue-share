<?php

return array(
    array(
        'section_id' => 'general',
        'section_title' => 'Adsense Revenue Share Settings',
        'section_description' => 'Fill Publisher ID field and other required settings',
        'section_order' => 1,
        'fields' => array(
            array(
                'id' => 'on',
                'title' => 'Enabled',
                'desc' => 'Turn on',
                'type' => 'checkbox',
                'std' => 0
            ),
            array(
                'id' => 'publisher_id',
                'title' => 'Adsense Publisher ID',
                'desc' => 'How to find out your Publisher ID - <a href="http://cozywp.com/2014/01/adsense-publisher-id/" target="_blank">Read</a>',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'id' => 'percent',
                'title' => 'Author revenue percent',
                'desc' => '',
                'type' => 'select',
                'std' => '50',
                'choices' => array(
                    '10' => '10%',
                    '20' => '20%',
                    '30' => '30%',
                    '40' => '40%',
                    '50' => '50%',
                    '60' => '60%',
                    '70' => '70%',
                    '80' => '80%',
                    '90' => '90%',
                )
            ),
            array(
                'id' => 'position',
                'title' => 'Spot position',
                'desc' => 'Adsense code can be placed above or below your post content',
                'type' => 'select',
                'std' => 'header',
                'choices' => array(
                    'header' => 'Content header',
                    'footer' => 'Content footer',
                )
            ),
            array(
                'id' => 'size',
                'title' => 'Banner size',
                'desc' => 'Currently only horizontal banners are supported',
                'type' => 'select',
                'std' => '728x90',
                'choices' => array(
                    '728x90' => 'Leaderboard (728 x 90)',
                    '468x60' => 'Banner (468 x 60)',
                    '970x90' => 'Large leaderboard (970 x 90)',
                )
            ),
        )
    )
);