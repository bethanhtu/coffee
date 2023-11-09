<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

interface ICURD
{
    public function list();
    public function add($id);
    public function doadd($id,Request $request);
    public function edit($id);
    public function doedit($id,Request $request);
    public function delete($id);
}