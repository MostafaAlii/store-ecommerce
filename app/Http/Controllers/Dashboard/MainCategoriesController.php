<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\MainCategoryRequest;
use DB;
class MainCategoriesController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create(){
        # code...
    }

    public function store(MainCategoryRequest $request){
        try {
            DB::beginTransaction();
            DB::commit();     
        } catch (\Exception $exc) {
            DB::rollback();
        }
    }

    public function edit($id){
         $category = Category::find($id);
        if (!$category)
            return redirect()->route('admin.mainCategories')->with(['error' => trans('admin.category_notfound')]);

        return view('dashboard.categories.edit', compact('category'));
    }

    public function update($id, MainCategoryRequest $request){
        try {
                // First Step Make Data Validatin Using MainCategoryRequest File ::
                // Secondly Begin Make Updating Data in DB ::
                    // Check Status is active or not in Request ::
                if(!$request->has('is_active'))
                    $request->request->add(['is_active' => 0]);
                else
                    $request->request->add(['is_active' => 1]);
                    
                // Check ID in Request ::
                $category = Category::find($id);
                if (!$category)
                    return redirect()->route('admin.mainCategories')->with(['error' => trans('admin.category_notfound')]);
                
                DB::beginTransaction();
                // Finally Step Updatin Data ::
                $category->update($request->all());
                $category->name = $request->name;
                $category->save();
                DB::commit();
                return redirect()->route('admin.mainCategories')->with(['success' => trans('admin.success_category_update_message')]);
        } catch (\Exception $exc) {
            return redirect()->route('admin.mainCategories')->with(['error' => trans('admin.error_category_update_message')]);
            DB::rollback();
        }
    }

    public function destroy(){
        # code...
    }
    
}
