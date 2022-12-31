<?php 

use core\app;

/*panel*/
app::get('/panel/admin', '/panel/index', 'admin', ['Panel']);

/*user*/
app::get('/panel/user/page/([0-9]+)', '/user/user', 'admin', ['Panel']);
app::get('/panel/user/show/([0-9]+)', '/user/show/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/user/create', '/user/create', 'admin', ['Panel']);
app::post('/panel/user/create', '/user/UserCreate', 'admin', ['Panel']);
app::get('/panel/user/update/([0-9]+)', '/user/update/([0-9]+)', 'admin', ['Panel']);
app::post('/panel/user/update', '/user/UserUpdate', 'admin', ['Panel']);
app::get('/panel/user/delete/([0-9]+)', '/user/UserDelete/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/user/destroy/([0-9]+)', '/user/UserDestroy/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/user/status/([0-9]+)', '/user/UserStatus/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/user/search/key/(.*?)', '/user/UserSearchEngine', 'admin', ['Panel']);
app::get('/panel/user/search/data/([0-9a-zA-Z-_\.]+)/([0-9a-zA-Z-_\.]+)/page/([0-9]+)', 
	'/user/UserSearch/([0-9a-zA-Z-_\.]+)/([0-9a-zA-Z-_\.]+)', 'admin', ['Panel']);

/*article*/
app::get('/panel/article/page/([0-9]+)', '/article/article', 'admin', ['Panel']);
app::get('/panel/article/show/([0-9]+)', '/article/show/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/article/user/([0-9]+)/([0-9a-zA-Z-_\+]+)/page/([0-9]+)', 
'/article/ByUser/([0-9]+)([0-9a-zA-Z-_\+]+)', 'admin', ['Panel']);
app::get('/panel/article/create', '/article/create', 'admin', ['Panel']);
app::post('/panel/article/create', '/article/articleCreate', 'admin', ['Panel']);
app::get('/panel/article/update/([0-9]+)', '/article/update/([0-9]+)', 'admin', ['Panel']);
app::post('/panel/article/update', '/article/ArticleUpdate', 'admin', ['Panel']);
app::get('/panel/article/delete/([0-9]+)', '/article/ArticleDelete/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/article/destroy/([0-9]+)', '/article/ArticleDestroy/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/article/status/([0-9]+)', '/article/articleStatus/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/article/user/([0-9]+)/page/([0-9]+)', '/article/articleByUser', 'admin', ['Panel']);
app::get('/panel/article/search/key/(.*?)', '/article/ArticleSearchEngine', 'admin', ['Panel']);
app::get('/panel/article/search/data/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)/page/([0-9]+)', 
	'/article/ArticleSearch/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)', 'admin', ['Panel']);

/*contact*/
app::get('/panel/contact/page/([0-9]+)', '/contact/contact', 'admin', ['Panel']);
app::get('/panel/contact/show/([0-9]+)', '/contact/show/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/contact/delete/([0-9]+)', '/contact/contactDelete/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/contact/destroy/([0-9]+)', '/contact/ContactDestroy/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/contact/search/key/(.*?)', '/contact/ContactSearchEngine', 'admin', ['Panel']);
app::get('/panel/contact/search/data/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)/page/([0-9]+)', 
	'/contact/ContactSearch/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)', 'admin', ['Panel']);

/*rule*/
app::get('/panel/rule/page/([0-9]+)', '/rule/rule', 'admin', ['Panel']);
app::get('/panel/rule/show/([0-9]+)', '/rule/show/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/rule/create', '/rule/create', 'admin', ['Panel']);
app::post('/panel/rule/create', '/rule/ruleCreate', 'admin', ['Panel']);
app::get('/panel/rule/update/([0-9]+)', '/rule/update/([0-9]+)', 'admin', ['Panel']);
app::post('/panel/rule/update', '/rule/ruleUpdate', 'admin', ['Panel']);
app::get('/panel/rule/delete/([0-9]+)', '/rule/ruleDelete/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/rule/destroy/([0-9]+)', '/rule/ruleDestroy/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/rule/status/([0-9]+)', '/rule/ruleStatus/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/rule/search/key/(.*?)', '/rule/ruleSearchEngine', 'admin', ['Panel']);
app::get('/panel/rule/search/data/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)/page/([0-9]+)', 
	'/rule/ruleSearch/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)', 'admin', ['Panel']);

/*faq*/
app::get('/panel/faq/page/([0-9]+)', '/faq/faq', 'admin', ['Panel']);
app::get('/panel/faq/show/([0-9]+)', '/faq/show/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/faq/create', '/faq/create', 'admin', ['Panel']);
app::post('/panel/faq/create', '/faq/faqCreate', 'admin', ['Panel']);
app::get('/panel/faq/update/([0-9]+)', '/faq/update/([0-9]+)', 'admin', ['Panel']);
app::post('/panel/faq/update', '/faq/faqUpdate', 'admin', ['Panel']);
app::get('/panel/faq/delete/([0-9]+)', '/faq/faqDelete/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/faq/destroy/([0-9]+)', '/faq/faqDestroy/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/faq/status/([0-9]+)', '/faq/faqStatus/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/faq/search/key/(.*?)', '/faq/faqSearchEngine', 'admin', ['Panel']);
app::get('/panel/faq/search/data/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)/page/([0-9]+)', 
	'/faq/faqSearch/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)', 'admin', ['Panel']);

/*setting*/
app::get('/panel/setting/page/([0-9]+)', '/setting/setting', 'admin', ['Panel']);
app::get('/panel/setting/show/([0-9]+)', '/setting/show/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/setting/update/([0-9]+)', '/setting/update/([0-9]+)', 'admin', ['Panel']);
app::post('/panel/setting/update', '/setting/settingUpdate', 'admin', ['Panel']);
app::get('/panel/setting/search/key/(.*?)', '/setting/settingSearchEngine', 'admin', ['Panel']);
app::get('/panel/setting/search/data/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)/page/([0-9]+)', 
	'/setting/settingSearch/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)', 'admin', ['Panel']);

/*guest*/
app::get('/panel/guest/page/([0-9]+)', '/guest/guest', 'admin', ['Panel']);
app::get('/panel/guest/show/([0-9]+)', '/guest/show/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/guest/delete/([0-9]+)', '/guest/guestDelete/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/guest/destroy/([0-9]+)', '/guest/guestDestroy/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/guest/search/key/(.*?)', '/guest/guestSearchEngine', 'admin', ['Panel']);
app::get('/panel/guest/search/data/([0-9a-zA-Z-_\.]+)/([0-9a-zA-Z-_\.]+)/page/([0-9]+)', 
	'/guest/guestSearch/([0-9a-zA-Z-_\.]+)/([0-9a-zA-Z-_\.]+)', 'admin', ['Panel']);
