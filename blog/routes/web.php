<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\DB;
use App\User;

// Route::get('contact',function(){
//   return view('contact');
// });
//
Route::get('/',function(){
  return view('welcome');
});
//
// /*
// |--------------------------------------------------------------------------
// | Raw sql Queries -- Insert Data
// |--------------------------------------------------------------------------
// */
//
// Route::get('/insert',function(){
//   DB::insert('insert into posts(title,content) value(?,?)',['PHP with Laravel','PHP laravel is the best framework!']);
// });
//
// /*
// |--------------------------------------------------------------------------
// | Raw sql Queries -- Read Data
// |--------------------------------------------------------------------------
// */
// Route::get('/read',function(){
//   $results = DB::select('select * from posts');
//   return $results;
//   // foreach($results as $post){
//   //   return $post->title;
//   // }
// });
// /*
// |--------------------------------------------------------------------------
// | Raw sql Queries -- Update Data
// |--------------------------------------------------------------------------
// */
// Route::get('/update',function(){
//   $results = DB::update('update posts set title="Update title" where id=?',[1]);
//   return $results;
// });
//
// Route::get('/delete',function(){
//   $results = DB::delete('delete from posts where id=?',[1]);
//   return $results;
// });

/*
|--------------------------------------------------------------------------
| Eloquent ORM
|--------------------------------------------------------------------------
*/
use App\Post;

// Route::get('/find',function(){
//   $posts = Post::all();
//   foreach($posts as $post){
//     return $post->title;
//   }
// });
//
// Route::get('/find',function(){
//   $post = Post::find(1);
//   return $post->title;
//   // foreach($posts as $post){
//   //   return $post->title;
//   // }
// });
//
// Route::get('/findwhere',function(){
//   $posts = Post::where('id',2)->orderBy('id','desc')->take(1)->get();
//   return $posts;
// });
//
// Route::get('/findmore',function(){
//   // $posts = Post::findOrFail(2);
//   // return $posts;
//   $post = Post::where('user_count','<',50)->firmstOrFail();
// });

// Route::get('/basicinsert',function(){
//   $post = Post::find(1);
//   $post->title = 'New ORM title insert';
//   $post->content = 'Welcome to the ORM world.';
//   $post->save();
// });

// Route::get('/basicinsert2',function(){
//   $post = Post::find(2);
//   $post->title = 'New ORM title insert2';
//   $post->content = 'Welcome to the ORM world.2';
//   $post->save();
// });

Route::get('/create',function(){
  $result = Post::create(
    [
      'title'=>'the create method',
      'content'=>"I'm learning laravel1",
      "user_id"=>1
    ]
  );
});

// Route::get('/update',function(){
//   $post = Post::where('id',2)->where('is_admin',0)->update(
//     ['title'=>'New PHP update','content'=>'I am update method laravel']
//   );
//   if($post){
//     echo 'success';
//   }else{
//     echo 'failed';
//   }
// });
//
// Route::get('/delete',function(){
//   $post = Post::find(2);
//   $post->delete();
// });

// Route::get('/delete2',function(){
//   $count = Post::destroy([4,5,6]);
//   echo $count;
// });

//
Route::get('/softdelete',function(){
 Post::where('is_admin',0)->delete();
});

// Route::get('/readsoftdelete',function(){
//   $post = Post::onlyTrashed()->where('id',1)->get();
//   return $post;
// });

//
// Route::get('/restore',function(){
//   Post::withTrashed()->where('is_admin',0)->restore();
//
// });

// Route::get('/forcedelete',function(){
//   Post::withTrashed()->where('is_admin',0)->forceDelete();
// });
//
// Route::get('/user/{id}/post',function($id){
//   $userPost = User::find($id)->post;
//   return $userPost;
// });

// Route::get('/post/{id}/user',function($id){
//   return Post::find($id)->user->name;
// });

Route::get('/posts',function(){
  $user = User::find(1);

  foreach($user->posts as $post){
     echo $post->title;
  }

});
