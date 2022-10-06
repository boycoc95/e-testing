<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function _construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Lấy ra tat ca danh muc
     * @return CategoryResource
     */
    public function getCategory()
    {
        $cate = Category::all();
        return new CategoryResource($cate);
    }

    public function deleteCate(Category $cate)
    {

    }
}
