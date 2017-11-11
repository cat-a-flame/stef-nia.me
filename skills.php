<?php
    $skills = [
        [
            'skill'   => 'CSS',
            'percent' => '90'
        ],
        [
            'skill'   => 'HTML',
            'percent' => '90'
        ],
        [
            'skill'   => 'JavaScript',
            'percent' => '40'
        ],
        [
            'skill'   => 'Accessibility',
            'percent' => '90'
        ],
        [
            'skill'   => 'Sass',
            'percent' => '80'
        ],
        [
            'skill'   => 'Git',
            'percent' => '60'
        ],
        [
            'skill'   => 'Github',
            'percent' => '70'
        ],
        [
            'skill'   => 'Responsive design',
            'percent' => '90'
        ],
        [
            'skill'   => 'UI development',
            'percent' => '80'
        ],
        [
            'skill'   => 'Photoshop',
            'percent' => '50'
        ]
    ];
?>

<section class="s-box s-skills" id="skills">
    <div class="s-box_wrapper">
        <ul class="s-skills_list">
            <?php
                foreach ($skills as $skill) {
            ?>
                <li class="s-skills_list_item">
                    <span class="s-skills_list_item_label"><?= $skill['skill']; ?></span>
                    <div class="s-skills_list_item_status width-<?= $skill['percent']; ?>">
                        <span class="s-skills_list_item_status_progress"></span>
                    </div>
                </li>
            <?php
                }
            ?>
        </ul>
    </div>
</section>
