<?php
/**
 * Created by PhpStorm.
 * User: spcomputer
 * Date: 10/20/2016
 * Time: 4:37 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::all();
    }

}