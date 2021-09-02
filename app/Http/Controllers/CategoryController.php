<?php

namespace App\Http\Controller;

class CategoryController extends Controller
{
   public function create()
   {
       $category = new Category();
       $category->name = '';
       $category->description = '';
       $category->image ='';
   }
}