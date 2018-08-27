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

    public function store(Request $request){
        $modelClass = $this->modelClass;
        $model = $modelClass::create($request->all());
        if($request->hasFile('image_file')){
            $model->addMedia($request->file('image_file'))
                ->toMediaCollection('featured');
        }
        return redirect($this->baseRoute)->withSuccess('Saved!');
    }

    public function update(Request $request, $modelId){
        $modelClass = $this->modelClass;
        $model = $modelClass::where('id',$modelId)->first();
        $model->update($request->all());
        if($request->hasFile('image_file')){
            $model->addMedia($request->file('image_file'))
                ->toMediaCollection('featured');
        }
        return redirect($this->redirectAfterUpdate($model))->withSuccess('Saved!');
    }

}
