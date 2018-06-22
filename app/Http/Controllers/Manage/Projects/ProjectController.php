<?php

namespace App\Http\Controllers\Manage\Projects;

use BinaryCabin\LaravelReporting\Http\Controllers\BaseManageController;
use Illuminate\Http\Request;

class ProjectController extends BaseManageController
{

    protected $modelClass = \App\Project::class;
    protected $baseTitlePlural = 'Projects';
    protected $baseTitleSingular = 'Project';
    protected $variableNamePlural = 'projects';
    protected $variableNameSingular = 'project';
    protected $baseRoute = 'manage/project';
    protected $viewIndex = 'manage.project.index';
    protected $viewCreate='manage.project.create';
    protected $viewEdit='manage.project.edit';
    protected $viewFields;

    public function store(Request $request){
        $modelClass = $this->modelClass;
        $model = $modelClass::create($request->all());
        if($request->hasfile('image_file')) {
            $model->replaceImage($request->image_file);
        }
        return redirect($this->baseRoute)->withSuccess('Saved!');
    }

    public function update(Request $request, $modelId){
        $modelClass = $this->modelClass;
        $model = $modelClass::where('id',$modelId)->first();
        $model->update($request->all());
        if($request->hasfile('image_file')) {
            $model->replaceImage($request->image_file);
        }
        return redirect($this->redirectAfterUpdate($model))->withSuccess('Saved!');
    }

}
