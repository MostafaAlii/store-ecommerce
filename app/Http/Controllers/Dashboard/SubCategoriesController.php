<?php
namespace App\Http\Controllers\Dashboard;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\MainCategoryRequest;
use App\Http\Controllers\Controller;
use DB;
class SubCategoriesController extends Controller
{
    public function index(){
        $categories = Category::child()->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.subcategories.index', compact('categories'));
    }

    public function create(){
        $categories = Category::parent()->orderBy('id', 'DESC')->get();
        return view('dashboard.subcategories.add', compact('categories'));
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
            return redirect()->route('admin.subCategories')->with(['success' => trans('admin.success_subcategory_cerate_message')]);    
            //DB::commit();
        } catch (\Exception $exc) {
            //DB::rollback();
            return redirect()->route('admin.subcategories')->with(['error' => 'admin.error_subcategory_cerate_message']);
        }
    }

    public function edit($id){
         $category = Category::orderBy('id', 'DESC')->find($id);
        if (!$category)
            return redirect()->route('admin.subCategories')->with(['error' => trans('admin.category_notfound')]);

        return view('dashboard.subcategories.edit', compact('category'));
    }

    public function update($id, MainCategoryRequest $request){
        try {
                //DB::beginTransaction();
                // First Step Make Data Validatin Using MainCategoryRequest File ::
                // Secondly Begin Make Updating Data in DB ::
                // Check ID in Request ::
                $category = Category::find($id);
                if (!$category)
                    return redirect()->route('admin.subCategories')->with(['error' => trans('admin.category_notfound')]);
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
                return redirect()->route('admin.subCategories')->with(['success' => trans('admin.success_subcategory_update_message')]);
                //DB::commit();
            } catch (\Exception $exc) {
                //DB::rollback();
                return redirect()->route('admin.subCategories')->with(['error' => trans('admin.error_subcategory_update_message')]);
        }
    }

    public function destroy($id){
        try {
            // Check ID in Request ::
            $category = Category::orderBy('id', 'DESC')->find($id);
            if (!$category)
                return redirect()->route('admin.subCategories')->with(['error' => trans('admin.category_notfound')]);            
            $category->delete();
            return redirect()->route('admin.subCategories')->with(['success' => trans('admin.success_subcategory_delete_message')]);
        } catch (\Exception $exc) {
            return redirect()->route('admin.subCategories')->with(['error' => trans('admin.error_subcategory_delete_message')]);
        }
    }   
}