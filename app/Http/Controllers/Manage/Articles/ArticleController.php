<?php

namespace App\Http\Controllers\Manage\Articles;

use BinaryCabin\LaravelReporting\Http\Controllers\BaseManageController;
use Illuminate\Http\Request;

class ArticleController extends BaseManageController
{

    protected $modelClass = \App\Article::class;
    protected $baseTitlePlural = 'Articles';
    protected $baseTitleSingular = 'Article';
    protected $variableNamePlural = 'articles';
    protected $variableNameSingular = 'article';
    protected $baseRoute = 'manage/article';
    protected $viewIndex = 'manage.article.index';
    protected $viewCreate='manage.article.create';
    protected $viewEdit='manage.article.edit';
    protected $viewFields;

}
