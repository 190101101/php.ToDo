<?php 
    $require = new modulus\main\requires\model\requireModel;
    $categories = $require->categories();
    $sections = $require->sections();
?>
<div class="col-lg-3" id="category">
    <li class="list-group-item">
        <a href="/category/page/1"><?php echo content::categories(); ?></a>
    </li>
    <?php foreach($sections as $section): ?>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between" data-toggle="collapse" data-target="#<?php echo $section->section_slug; ?>">
            <span><?php echo $section->section_title; ?></span>
            <span class="badge badge-warning"><?php echo $section->section_count; ?></span>
        </li>
        <div id="<?php echo seo($section->section_slug); ?>" class="collapse" aria-labelledby="headingone" data-parent="#category">
            <?php foreach($categories as $category): ?>
                <?php if($category->section_id == $section->section_id): ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <a href="/articles/<?php echo $section->section_slug; ?>/<?php echo $category->category_slug; ?>/page/1"><?php echo $category->category_title; ?></a>
                        <span class="badge badge-primary">
                            <?php echo $category->category_count; ?>
                        </span>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </ul>
    <?php endforeach; ?>

    <ul class="list-group mt-3">
        <li class="list-group-item d-flex justify-content-between" data-toggle="collapse" data-target="#lang">
            <span><?php echo content::lang(); ?></span>
            <span class="badge badge-warning"><?php echo content::choose(); ?></span>
        </li>
        <div id="lang" class="collapse" aria-labelledby="headingone" data-parent="#category">
            <a href="/lang/1" class="list-group-item"><?php echo content::az(); ?></a>
            <a href="/lang/2" class="list-group-item"><?php echo content::tr(); ?></a>
            <a href="/lang/3" class="list-group-item"><?php echo content::en(); ?></a>
            <a href="/lang/4" class="list-group-item"><?php echo content::ru(); ?></a>
        </div>
    </ul>
</div>

