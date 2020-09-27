<?php
namespace App\Http\Controllers\Dashboard;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\MainCategoryRequest;
use App\Http\Controllers\Controller;
use DB;
class MainCategoriesController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create(){
        return view('dashboard.categories.add');
    }

    public function store(MainCategoryRequest $request){
        //return $request;
        try {
            //DB::beginTransaction();

            //validation

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $category = Category::create($request->except('_token'));

            //save translations
            $category->name = $request->name;
            $category->save();
            // Return Success Message
            return redirect()->route('admin.mainCategories')->with(['success' => trans('admin.success_category_cerate_message')]);    
            //DB::commit();
        } catch (\Exception $exc) {
            //DB::rollback();
            return redirect()->route('admin.maincategories')->with(['error' => 'admin.error_category_cerate_message']);
        }
    }

    public function edit($id){
         $category = Category::orderBy('id', 'DESC')->find($id);
        if (!$category)
            return redirect()->route('admin.mainCategories')->with(['error' => trans('admin.category_notfound')]);

        return view('dashboard.categories.edit', compact('category'));
    }

    public function update($id, MainCategoryRequest $request){
        try {
                //DB::beginTransaction();
                // First Step Make Data Validatin Using MainCategoryRequest File ::
                // Secondly Begin Make Updating Data in DB ::
                // Check ID in Request ::
                $category = Category::find($id);
                if (!$category)
                    return redirect()->route('admin.mainCategories')->with(['error' => trans('admin.category_notfound')]);
                // Check Status is active or not in Request ::
                if(!$request->has('is_active'))
                    $request->request->add(['is_active' => 0]);
                else
                    $request->request->add(['is_active' => 1]);
                
                // Finally Step Updating Data ::
                $category->update($request->all());
                // Update Category Name Translation ::
                $category->name = $request->name;
                $category->save();
                return redirect()->route('admin.mainCategories')->with(['success' => trans('admin.success_category_update_message')]);
                //DB::commit();
            } catch (\Exception $exc) {
                //DB::rollback();
                return redirect()->route('admin.mainCategories')->with(['error' => trans('admin.error_category_update_message')]);
        }
    }

    public function destroy($id){
        try {
            // Check ID in Request ::
            $category = Category::orderBy('id', 'DESC')->find($id);
            if (!$category)
                return redirect()->route('admin.mainCategories')->with(['error' => trans('admin.category_notfound')]);            
            $category->delete();
            return redirect()->route('admin.mainCategories')->with(['success' => trans('admin.success_category_delete_message')]);
        } catch (\Exception $exc) {
            return redirect()->route('admin.mainCategories')->with(['error' => trans('admin.error_category_delete_message')]);
        }
    }
    
}
