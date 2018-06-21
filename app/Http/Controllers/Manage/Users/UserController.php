<?php

namespace App\Http\Controllers\Manage\Users;

use BinaryCabin\LaravelReporting\Http\Controllers\BaseManageController;
use Illuminate\Http\Request;

class UserController extends BaseManageController
{

    protected $modelClass = \App\User::class;
    protected $baseTitlePlural = 'Users';
    protected $baseTitleSingular = 'User';
    protected $variableNamePlural = 'users';
    protected $variableNameSingular = 'user';
    protected $baseRoute = 'manage/user';
    protected $viewIndex = 'manage.user.index';
    protected $viewCreate='manage.user.create';
    protected $viewEdit='manage.user.edit';
    protected $viewFields;

    public function store(Request $request) {
        $modelClass = $this->modelClass;
        $model = $modelClass::create($request->all());
        $model->syncRoles([$request->role]);
        return redirect($this->baseRoute)->withSuccess('Saved!');
    }

    public function update(Request $request, $modelId) {
        $modelClass = $this->modelClass;
        $model = $modelClass::where('id',$modelId)->first();
        $model->update($request->all());
        $model->syncRoles([$request->role]);
        return redirect($this->redirectAfterUpdate($model))->withSuccess('Saved!');
    }

}
