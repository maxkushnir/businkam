<?php

return array(
    //Ajax
    'ajax' => 'Ajax/index',
    // Товар:
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    // Каталог:
    'catalog' => 'catalog/index', // actionIndex в CatalogController
    // Категория товаров:
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController   
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController
    // Корзина:
    'cart/checkout' => 'cart/checkout', // actionAdd в CartController    
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController    
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController    
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart' => 'cart/index', // actionIndex в CartController
    // Пользователь:
    'admin/user' => 'user/index',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    // Управление товарами:    
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    // Управление категориями:    
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    // Управление заказами:    
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    //Article:
    'blog/article-([0-9]+)' => "Article/view/$1",
    'blog/page-([0-9]+)' => "Article/index/$1",
    'blog' => "Article/index",
    'admin/article/create' => 'AdminArticle/create',
    'admin/article/edit/([0-9]+)' => 'AdminArticle/edit/$1',
    'admin/article/delete/([0-9]+)' => 'AdminArticle/delete/$1',
    'admin/article' => 'AdminArticle/index',    
    //Галерея:
    'admin/gallery/upload' => "AdminResource/upload",
    'admin/gallery' => "AdminResource/index",
    // Админпанель:
    'admin' => 'admin/index',
    // О магазине
    'gallery' => "site/gallery",
    'contacts' => 'site/contact',
    'about' => 'site/about',
    // Главная страница
    'index.php' => 'Index/index',
    'index' =>  'Index/index',
    '/' => 'Index/index',// actionIndex в SiteController
    '' => 'Index/index' // actionIndex в SiteController
);
