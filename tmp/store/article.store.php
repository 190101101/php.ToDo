<?php 

dd(byte(memory()));

$faker = Faker\Factory::create();

$data = [];

for($i = 0; $i < 1000; $i++){
    $title = $faker->sentence(1);
    $title = str_replace('.', '', $title);
    $title = str_replace(',', '', $title);
    $title = str_replace(' ', '', $title);
    $title = seo(strtolower($title));
    $data[] = [
        'article_title' => $title,
        'article_slug' => $title,
        'article_text' => $faker->sentence(200),
        'article_view' => rand(1000, 10000),
        'article_created' => '2022-12-10 03:05:31',
    ];
}

$store = [];
foreach($data as $key => $value){
    $store[] = [
        'article_title' => $value['article_title'],
        'article_slug' => $value['article_slug'],
        'article_text' => $value['article_text'],
        'article_view' => $value['article_view'],
        'article_created' => $value['article_created'],
    ];
}

dd(db()->store('article', [
    'article_title',
    'article_slug',
    'article_text',
    'article_view',
    'article_created',
] , $store));

dd(byte(memory()));
