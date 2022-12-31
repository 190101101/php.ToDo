<div class="col-lg-3 mb-4">

    <?php if(User::admin()): ?>
    <div class="list-group mb-3">
        <a href="/panel/admin" class="list-group-item">panel</a>
    </div>
    <?php endif; ?>

    <div class="list-group mb-3">
        <a href="/profile/info" class="list-group-item">profile</a>
        <a href="/article/page/1" class="list-group-item">article</a>
    </div>

    <?php if(segment(1) == 'profile'): ?>
    <div class="list-group mb-3">
        <a class="list-group-item">user info</a>
        <a class="list-group-item">email: <?php echo User::user_email(); ?></a>
        <a class="list-group-item">login: <?php echo User::user_login(); ?></a>
        <a class="list-group-item">status: <?php echo User::user_status(); ?></a>
        <a class="list-group-item">created: <?php echo date_dy(User::user_created()); ?></a>
        <a class="list-group-item">updated: <?php echo date_dy(User::user_updated()); ?></a>
    </div>
    <?php endif; ?>

    <?php if(isset($data->page)): ?>
    <div class="list-group mb-3">
        <a class="list-group-item">data <?php echo $data->page->count; ?></a>
        <a class="list-group-item">page <?php echo $data->page->length; ?></a>
    </div>
    <?php endif; ?>

    <?php if(isset($data->search)): ?>
    <div class="list-group mb-3">
        <a class="list-group-item">key: <?php echo $data->search->key; ?></a>
        <a class="list-group-item">value: <?php echo $data->search->value; ?></a>
    </div>
    <?php endif; ?>

    <?php if(segment(1).'/'.segment(2) == 'profile/info'): ?>
    <ul class="list-group mt-3">
        <a class="list-group-item"><?php echo content::lang(); ?></a>
        <a href="/lang/1" class="list-group-item"><?php echo content::az(); ?></a>
        <a href="/lang/2" class="list-group-item"><?php echo content::tr(); ?></a>
        <a href="/lang/3" class="list-group-item"><?php echo content::en(); ?></a>
        <a href="/lang/4" class="list-group-item"><?php echo content::ru(); ?></a>
    </ul>
    <?php endif; ?>
</div>
