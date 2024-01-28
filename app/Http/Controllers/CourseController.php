<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModulesData;
use App\Models\Tags;

class CourseController extends Controller
{
    public function index(Request $request,$slug){
        $category = ModulesData::where('slug',$slug)->first();
        $arr['category'] = $category; 
        if($slug=='all'){
            $data = ModulesData::where('module_id', 1)->where('status','active');
        }else{
           $data = ModulesData::where('module_id', 1)->where('status','active')->where('extra_field_1', $category->id); 
        }
        

        if ($request->has('keyword')) {
            $data->where('title', 'like', '%'.$request->keyword.'%');
        }

        if ($request->has('category')) {
            $data->where('extra_field_1', $request->category);
        }

        if ($request->has('archive')) {
            $data->whereMonth('created_at', date('m', strtotime($request->archive)))->whereYear('created_at', date('Y', strtotime($request->archive)));
        }

        if ($request->has('tag')) {
            $data->whereRaw("FIND_IN_SET($request->tag,tag_ids)");
        }

        if ($request->has('cate')) {
            $data->whereRaw("FIND_IN_SET($request->cate,category_ids)");
        }

        $arr['courses'] = $data->paginate(10);

        $arr['archives'] = $this->lastThreeMonths();
        return view('courses.index')->with($arr);
    }   

    public function detail($slu,$slug){
    	$data['course'] = ModulesData::where('slug',trim($slug))
    	 		->where('module_id', 1)
    	 		->where('status','active')
    	 		->first();

    	$data['recent_data'] = ModulesData::where('module_id', 1)->where('id','!=',$data['course']->id)->where('status','active')->orderBy('id','desc')->take(3)->get(); 
        $data['category'] = ModulesData::where('slug', $slu)->where('status','active')->orderBy('id','desc')->first(); 
    	$tag_ids = explode(',', $data['course']->tag_ids);

    	$data['tags'] = null;	
    	
		$data['archives'] = $this->lastThreeMonths();
    	 
    	return view('courses.detail')->with($data); 		
    }

    function lastThreeMonths() {
	    return array(
	        date('F Y', time()),
	        date('F Y', strtotime('-1 month')),
	        date('F Y', strtotime('-2 month'))
	    );
	}
}
