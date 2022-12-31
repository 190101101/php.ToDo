<?php 

use core\app;
// ([0-9a-zA-Z-_]+)
// ([0-9a-zA-Z-_]+)
// ([0-9a-zA-Z-_\?\=\&\+]+)
// ([0-9]+)

/*home*/
/*
app::get('/', '/home/index', 'main');
app::get('/home/page/([0-9]+)', '/home/index', 'main');
*/

/*auth*/
app::get('/', '/auth/AuthPage', 'main', ['Authless']);
app::get('/auth', '/auth/AuthPage', 'main', ['Authless']);
app::post('/signup', '/auth/SignUp', 'main', ['Authless']);
app::post('/signin', '/auth/SignIn', 'main', ['Authless']);
app::get('/signout', '/auth/SignOut', 'main', ['Auth']);

/*mode*/
app::get('/mode/([0-9]+)', '/home/mode/([0-9]+)', 'main');
app::get('/lang/([0-9a-zA-Z-_]+)', '/home/lang/([0-9a-zA-Z-_]+)', 'main');

/*profile*/
app::get('/profile/info', '/profile/ProfileInfo', 'main', ['Auth']);
app::get('/profile/read/([0-9]+)/page/([0-9]+)', '/profile/read/([0-9]+)', 'main', ['Auth']);
app::get('/profile/update', '/profile/update', 'main', ['Auth']);
app::post('/profile/update', '/profile/ProfileUpdate', 'main', ['Auth']);

/*article*/
app::get('/article/page/([0-9]+)', '/article/article', 'main', ['User']);
app::get('/article/show/([0-9]+)', '/article/show/([0-9]+)', 'main', ['User']);
app::get('/articles/([0-9a-zA-Z-_\+]+)/([0-9a-zA-Z-_\+]+)/page/([0-9]+)', 
'/article/ByCategory/([0-9a-zA-Z-_\+]+)/([0-9a-zA-Z-_\+]+)', 'main', ['User']);
app::get('/article/create', '/article/create', 'main', ['User']);
app::post('/article/create', '/article/articleCreate', 'main', ['User']);
app::get('/article/update/([0-9]+)', '/article/update/([0-9]+)', 'main', ['User']);
app::post('/article/update', '/article/ArticleUpdate', 'main', ['User']);
app::get('/article/delete/([0-9]+)', '/article/ArticleDelete/([0-9]+)', 'main', ['User']);
app::get('/article/destroy/([0-9]+)', '/article/ArticleDestroy/([0-9]+)', 'main', ['User']);
app::get('/article/status/([0-9]+)', '/article/articleStatus/([0-9]+)', 'main', ['User']);
app::get('/article/user/([0-9]+)/page/([0-9]+)', '/article/articleByUser', 'main', ['User']);
app::get('/article/search/key/(.*?)', '/article/ArticleSearchEngine', 'main', ['User']);
app::get('/article/search/data/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)/page/([0-9]+)', 
	'/article/ArticleSearch/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)', 'main', ['User']);

/*other*/
app::get('/info/about', '/info/AboutPage', 'main', ['Page']);
app::get('/info/rule/page/([0-9]+)', '/info/RulePage', 'main', ['Page']);
app::get('/info/faq/page/([0-9]+)', '/info/FaqPage', 'main', ['Page']);

/*contact*/
app::get('/contact', '/contact/ContactPage', 'main');
app::post('/contact', '/contact/SendMessage', 'main');

/*error*/
app::get('/404', '/error/PageNotFound', 'main');
app::get('/error/type/([0-9a-zA-Z-_]+)', '/error/errorType/([0-9a-zA-Z-_]+)', 'main');

/*dd*/
app::get('/dd', '/dd/dd', 'main');
app::post('/dd', '/dd/create', 'main');


