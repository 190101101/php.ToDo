<?php panel_breadcrumb($data->column, '/article/search/key/value'); ?>
<?php $article = $data->article; ?>
<div class="row">
    <?php $main = new core\controller; ?>
    <?php $main->view('main', 'requires', 'main/sidebar', []); ?>  
    <div class="col-lg-9">
        <h3 class="mt-4 mb-3">#<?php echo $article->article_title; ?></h3>
        <p class="lead"><?php echo $article->article_text; ?></p>
        <span>id: <?php echo $article->article_id; ?> / created: <?php echo $article->article_created; ?></span>
        <hr>
    </div>
</div>

