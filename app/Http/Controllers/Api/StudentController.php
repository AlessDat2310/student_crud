<?php

namespace App\Http\Controllers\Api;

use App\Models\Student;
use App\Http\Resources\StudentResource;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use Harryes\CrudPackage\Http\Controllers\CrudBaseController;

class StudentController extends CrudBaseController
{
    /**
     * Constructor to bind the model and resource class to the BaseController.
     */
    public function __construct()
    {
        parent::__construct(
            Student::class,
            StudentResource::class,
            StudentStoreRequest::class,
            StudentUpdateRequest::class
        );
    }
}