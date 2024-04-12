<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Devotional;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    
    public function AllBlogCategory(){

        $category = BlogCategory::latest()->get();
        return view('admin.backend.blogcategory.blog_category',compact('category'));
    
       }// End Method 

       public function StoreBlogCategory(Request $request){

        BlogCategory::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),
        ]);
    
        $notification = array(
            'message' => 'BlogCategory Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    
    
       }// End Method 

       public function EditBlogCategory($id){

        $categories = BlogCategory::find($id);
        return response()->json($categories);
    
       }// End Method 

       public function UpdateBlogCategory(Request $request){
        $cat_id = $request->cat_id;
    
        BlogCategory::find($cat_id)->update([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),
        ]);
    
        $notification = array(
            'message' => 'BlogCategory Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    
    
       }// End Method 
    
       public function DeleteBlogCategory($id){
    
        BlogCategory::find($id)->delete();
    
        $notification = array(
            'message' => 'BlogCategory Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    
    
       }// End Method 


    //////////// All Devotionals Post Method .//

   public function allDevotionals(){
    $devotional = Devotional::latest()->get();
    return view('admin.backend.posts.all_devotionals',compact('devotional'));
   }// End Method 

   public function addDevotional(){

    $blogcat = BlogCategory::latest()->get();
    return view('admin.backend.posts.add_devotional',compact('blogcat'));

   }// End Method 

   public function storeDevotional(Request $request){

if ($request->file('post_image')) {
    # code...

    $image = $request->file('post_image');  
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(370,247)->save('upload/post/'.$name_gen);
    $save_url = 'upload/post/'.$name_gen;

    Devotional::insert([
        'blogcat_id' => $request->blogcat_id,
        'post_title' => $request->post_title,
        'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
        'long_descp' => $request->long_descp,
        'post_tags' => $request->post_tags,
        'post_image' => $save_url,  
        'created_at' => Carbon::now(),      
    
        ]);
    } 

    else {
    
     Devotional::insert([
        'blogcat_id' => $request->blogcat_id,
        'post_title' => $request->post_title,
        'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
        'long_descp' => $request->long_descp,
        'post_tags' => $request->post_tags,
        'created_at' => Carbon::now(),      
    
        ]);
    
    }
    $notification = array(
        'message' => 'Blog Post Inserted Successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('blog.devotional')->with($notification);  

   }// End Method 


   public function editDevotional($id){

    $blogcat = BlogCategory::latest()->get();
    $post = Devotional::find($id);
    return view('admin.backend.posts.edit_devotional',compact('post','blogcat'));

   }// End Method 


   public function updateDevotional(Request $request){

    $post_id = $request->id;

    if ($request->file('post_image')) {

        $image = $request->file('post_image');  
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(370,247)->save('upload/post/'.$name_gen);
        $save_url = 'upload/post/'.$name_gen;

        Devotional::find($post_id)->update([
            'blogcat_id' => $request->blogcat_id,
            'post_title' => $request->post_title,
            'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
            'long_descp' => $request->long_descp,
            'post_tags' => $request->post_tags,
            'post_image' => $save_url,  
            'created_at' => Carbon::now(),      

        ]);

        $notification = array(
            'message' => 'Blog Post Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('blog.devotional')->with($notification);  

    } else {

        Devotional::find($post_id)->update([
            'blogcat_id' => $request->blogcat_id,
            'post_title' => $request->post_title,
            'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
            'long_descp' => $request->long_descp,
            'post_tags' => $request->post_tags, 
            'created_at' => Carbon::now(),      

        ]);

        $notification = array(
            'message' => 'Blog Post Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('blog.devotional')->with($notification);  

    } // end else 

}// End Method 

public function deleteDevotional($id){

    $item = Devotional::find($id);
    $img = $item->post_image;
    unlink($img);

    Devotional::find($id)->delete();

        $notification = array(
            'message' => 'Blog Post Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

}// End Method 






    
    
}
