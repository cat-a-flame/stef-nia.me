<?php
    $projects = [
        [
            'name'  => 'Dívány.hu',
            'image' => '',
            'task'  => 'Front-end development, management',
            'date'  => '2017',
            'url'   => 'http://divany.hu'
        ],
        [
            'name'  => 'Index.hu - FINA World Championships 2017',
            'image' => '',
            'task'  => 'Front-end development, management',
            'date'  => '2017',
            'url'   => 'http://index.hu/sport/2017/fina_vizesvb_budapest/'
        ],
        [
            'name'  => 'Index.hu - Miniredesign 2016: Folders',
            'image' => '',
            'task'  => 'Front-end development',
            'date'  => '2016',
            'url'   => 'http://index.hu/aktak'
        ],
        [
            'name'  => 'Index.hu - Miniredesign 2016: Headings',
            'image' => '',
            'task'  => 'Front-end development',
            'date'  => '2016',
            'url'   => 'http://index.hu/rovatok'
        ],
        [
            'name'  => 'Index.hu - Olympic Games Rio 2016',
            'image' => '',
            'task'  => 'Front-end development',
            'date'  => '2016',
            'url'   => 'http://index.hu/sport/2016/rio/'
        ],
        [
            'name'  => 'Index.hu - EURO 2016',
            'image' => '',
            'task'  => 'Front-end development',
            'date'  => '2016',
            'url'   => 'http://index.hu/sport/futball/2016/eb'
        ],
        [
            'name'  => 'Blog.hu dashboard',
            'image' => '',
            'task'  => 'Front-end development, management',
            'date'  => '2015',
            'url'   => 'http://blog.hu/dashboard'
        ],
        [
            'name'  => 'Yog Sadhna',
            'image' => '',
            'task'  => 'Front-end development',
            'date'  => '2015',
            'url'   => 'https://www.yogsadhna.com/'
        ],
        [
            'name'  => 'Magistral',
            'image' => '',
            'task'  => 'Front-end development, management',
            'date'  => '2015',
            'url'   => 'http://magistral.hu'
        ],
        [
            'name'  => 'Kettős Mérce blog',
            'image' => '',
            'task'  => 'Front-end development',
            'date'  => '2015',
            'url'   => 'http://kettosmerce.blog.hu'
        ],
        [
            'name'  => 'Blog.hu',
            'image' => '',
            'task'  => 'Front-end development, management',
            'date'  => '2014',
            'url'   => 'http://blog.hu'
        ],
        [
            'name'  => 'Manzárd Café',
            'image' => '',
            'task'  => 'Front-end development',
            'date'  => '2014',
            'url'   => 'http://manzardcafe.blog.hu/'
        ],
        [
            'name'  => 'Street Kitchen',
            'image' => '',
            'task'  => 'Front-end development',
            'date'  => '2014',
            'url'   => 'http://streetkitchen.hu'
        ],
        [
            'name'  => 'Hogy volt? blog',
            'image' => '',
            'task'  => 'Front-end development',
            'date'  => '2014',
            'url'   => 'http://hogyvolt.blog.hu'
        ],
        [
            'name'  => 'Creative Ads',
            'image' => '',
            'task'  => 'Front-end development',
            'date'  => '2014',
            'url'   => 'http://creativeads.blog.hu'
        ],
        [
            'name'  => 'Zöld Pardon',
            'image' => '',
            'task'  => 'Front-end development, management',
            'date'  => '2013',
            'url'   => 'http://www.zp.hu'
        ],
        [
            'name'  => 'SecreTease - Alma Pirner\'s webshop',
            'image' => '',
            'task'  => 'Front-end development, design, logo',
            'date'  => '2012',
            'url'   => 'http://secretease.hu'
        ],
        [
            'name'  => 'Dollhouse webshop',
            'image' => '',
            'task'  => 'Front-end development, design',
            'date'  => '2012',
            'url'   => 'https://shop.dollhouse.hu/'
        ],
        [
            'name'  => 'Alma Pirner\'s portfolio',
            'image' => '',
            'task'  => 'Front-end development, design, logo',
            'date'  => '2012',
            'url'   => 'http://pirneralma.hu'
        ],
        [
            'name'  => 'La femme',
            'image' => '',
            'task'  => 'Sitebuild',
            'date'  => '2011',
            'url'   => 'http://lafemme.hu'
        ],
        [
            'name'  => 'Verlon webshop',
            'image' => '',
            'task'  => 'Sitebuild',
            'date'  => '2011',
            'url'   => 'http://verlon.hu'
        ],
        [
            'name'  => 'Wellness Centrum',
            'image' => '',
            'task'  => 'Sitebuild',
            'date'  => '2011',
            'url'   => 'http://wellnesscentrum.hu'
        ]
    ];
?>

<section class="s-box s-projects">
    <div class="s-box_wrapper">
        <ul class="s-projects_list">
            <?php
                foreach ($projects as $project) {
            ?>
                <li class="s-projects_list_item">
                    <a class="s-projects_list_item_link" href="<?= $project['url']; ?>" target="_blank">
                        <div class="s-projects_list_item_link_preview">
                            <img class="s-projects_list_item_link_preview_image" src="/img/projects/<?= $project['image'] ?>" alt="" />
                        </div>
                        <div class="s-projects_list_item_link_details">
                            <span class="s-projects_list_item_link_details_name"><?= $project['name']; ?></span>
                            <span class="s-projects_list_item_link_details_task"><?= $project['task']; ?></span>
                            <span class="s-projects_list_item_link_details_date"><?= $project['date']; ?></span>
                        </div>
                    </a>
                </li>
            <?php
                }
            ?>
        </ul>
    </div>
</section>
