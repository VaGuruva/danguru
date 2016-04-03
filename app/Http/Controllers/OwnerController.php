<?php

namespace Guru\Http\Controllers;

use Illuminate\Http\Request;

use Guru\Http\Requests;
use Guru\Http\Controllers\Controller;
use Guru\Owner as Owner;

class OwnerController extends Controller
{
public function owner($id){
$owner = Owner::find($id);
return view("owner", array("owner"=>$owner));
}}