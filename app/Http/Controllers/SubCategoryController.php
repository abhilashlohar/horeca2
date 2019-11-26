<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $subCategories = SubCategory::latest()->paginate(5);
        // dd($subCategories);
        return view('subcategories.index',compact('subCategories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('subcategories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(SubCategory::rules(), SubCategory::messages());
        $fileName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('uploads'), $fileName);
        $request->request->add(['image_path' => $fileName]);
        SubCategory::create($request->all());
   
        return redirect()->route('subcategories.index')
                        ->with('success','Sub Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
        $categories = Category::all();
        return view('subcategories.edit',compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $request->validate(SubCategory::rules($subcategory->id), SubCategory::messages());

        if($request->has('image'))
        {
            $destinationPath = public_path('uploads');
        
            File::delete($destinationPath.'/'.$subcategory->image_path);  /// Unlink File

            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads'), $fileName);
            $request->request->add(['image_path' => $fileName]);
        }
        
        $subcategory->update($request->all());
  
        return redirect()->route('subcategories.index')
                        ->with('success','Sub Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory)
    {
        $subcategory->deleted = true;
        $subcategory->save();
  
        return redirect()->route('subcategories.index')
                        ->with('success','Sub Category deleted successfully');
    }
}
