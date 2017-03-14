<?php

namespace App\Packages\User\Controller;

use App\Classes\Smdata;
use App\Packages\Packages;
use Validator;
use Illuminate\Http\Request;


class UserController extends Packages
{
    public function getListUser(Request $request)
    {
        $page = 15;

        $em = User::query();
        $entity = $em->searchable($request)->paginate($page);

        return view('User.View.Admin.list')
            ->withEntity($entity)
            ->withPage($page);
    }

}