<?php panel_breadcrumb($data->column, '/article/search/key/value'); ?>
<div class="row">
    <?php $main = new core\controller; ?>
    <?php $main->view('main', 'requires', 'main/sidebar', []); ?>  
    <div class="col-md-9">
        <form action="/article/create" method="POST">
            <div class="row">
                <div class="col-md-10">
                    <h2>article create</h2>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-sm btn-success" type="submit">create</button>
                    <a class="btn btn-sm btn-success" href="/article/page/1">back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>title</label>
                        <input name="article_title" class="form-control" type="text" minlength="3" maxlength="100" placeholder="title" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <label>article text</label>
                    <textarea name="article_text" rows="5" minlength="10" maxlength="30000" type="text" class="form-control" placeholder="article text" required id="editor1"></textarea>
                    <script>CKEDITOR.replace('editor1')</script>
                </div>

            </div>
        </form>
    </div>
</div>


