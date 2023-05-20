<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MemberRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MemberCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MemberCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Member::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/member');
        CRUD::setEntityNameStrings('member', 'members');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name');
        CRUD::column('mother_name');
        CRUD::column('father_name');
        CRUD::column('permanent_address');
        CRUD::column('present_address');
        CRUD::column('mobile');
        CRUD::column('phone');
        CRUD::column('national_id');
        CRUD::column('occupation');
        CRUD::column('maritalStatus');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MemberRequest::class);

        CRUD::field('membership_no');
        CRUD::field('name');
        CRUD::field('father_name');
        CRUD::field('mother_name');
        CRUD::field('permanent_address');
        CRUD::field('present_address');
        CRUD::field('mobile');
        CRUD::field('phone');
        CRUD::field('national_id');
        CRUD::field('occupation');
        CRUD::field('maritalStatus');
        CRUD::addField(
            [
                'name'          => 'familyMembers',
                'type'          => "relationship",
                'subfields'   => [
                    [
                        'name' => 'name',
                        'type' => 'text',
                        'wrapper' => [
                            'class' => 'form-group col-md-4',
                        ],
                    ],
                    [
                        'name' => 'relationship',
                        'type'        => 'select_from_array',
                        'options'     => ['Spouse' => 'Spouse', 'Son' => 'Son', 'Daughter'=>'Daughter'],
                        'wrapper' => [
                            'class' => 'form-group col-md-3',
                        ],
                    ],
                    [
                        'name' => 'national_id',
                        'label' => 'National ID',
                        'type' => 'text',
                        'wrapper' => [
                            'class' => 'form-group col-md-3',
                        ],
                    ],
                ],
            ]
        );

        CRUD::addField([
            'label' => "Profile Image",
            'name' => "image",
            'type' => 'image',
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
            // 'disk'      => 's3_bucket', // in case you need to show images from a different disk
            // 'prefix'    => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
