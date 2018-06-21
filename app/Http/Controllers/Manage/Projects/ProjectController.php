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

}
