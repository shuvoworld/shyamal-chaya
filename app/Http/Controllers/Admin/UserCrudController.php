<?php

namespace App\Http\Controllers\Admin;

use Backpack\PermissionManager\app\Http\Controllers\UserCrudController as BackpackUserCrudController
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class UserCrudController extends BackpackUserCrudController
{
    public function setupListOperation()
    {
        // This takes care to add all fields from the package. If you need some field removed you could use CRUD::removeField
        parent::setupListOperation();

        CRUD::field('username')->type('text');
        // Any other fields that you need
    }

    public function setupUpdateOperation()
    {
        // This takes care to add all fields from the package. If you need some field removed you could use CRUD::removeField
        parent::setupUpdateOperation();

        CRUD::field('username')->type('text');
        // Any other fields that you need
    }
}
