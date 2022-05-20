<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',[\App\Http\Controllers\IndexController::class,'index'])->name('index');
Route::get('/get/{var}/{sort}',[\App\Http\Controllers\IndexController::class,'getscons'])->name('getscons');
Route::get('/content',[\App\Http\Controllers\IndexController::class,'content'])->name('content');
Route::get('/podcast',[\App\Http\Controllers\IndexController::class,'podcast'])->name('podcast');
Route::get('content/show/{vals}/{title}',[\App\Http\Controllers\IndexController::class,'showcontent'])->name('showcontent');
/*Route::get('dashboard/user/change/name/{val}',[\App\Http\Controllers\IndexController::class,'changename'])->middleware(['auth'])->name('changename');*/
Route::post('save/info/user/',[\App\Http\Controllers\IndexController::class,'saveinfouser'])->middleware(['auth'])->name('saveinfouser');
Route::get('podcast/show/title',[\App\Http\Controllers\IndexController::class,'showpodcast'])->name('showpodcast');
Route::post('delete/profile/photo',[\App\Http\Controllers\IndexController::class,'deleteprofilephoto'])->middleware(['auth'])->name('deleteprofilephoto');
Route::post('save/picture/user',[\App\Http\Controllers\IndexController::class,'savepictures'])->middleware(['auth'])->name('savepictures');
Route::post('saveduserdescription',[\App\Http\Controllers\IndexController::class,'saveduserdescription'])->middleware(['auth'])->name('saveduserdescription');
Route::get('user/edit/profile',[\App\Http\Controllers\IndexController::class,'usereditprofile'])->middleware(['auth'])->name('usereditprofile');
/*Route::get('user/saved/content',[\App\Http\Controllers\IndexController::class,'savedcontents'])->middleware(['auth'])->name('savedcontents');*/
Route::post('writer/save/instagram',[\App\Http\Controllers\IndexController::class,'saveinstagram'])->middleware(['auth'])->name('saveinstagram');
Route::get('get/{names}/',[\App\Http\Controllers\IndexController::class,'searchinte'])->name('searchinte');
Route::get('search/in/alls',[\App\Http\Controllers\IndexController::class,'getinallsnow'])->name('getinallsnow');
/*Route::post('user/saved/contents/{values}',[\App\Http\Controllers\IndexController::class,'usersaveds'])->middleware(['auth'])->name('usersaveds');*/
Route::post('saved/comment',[\App\Http\Controllers\IndexController::class,'savedcomment'])->middleware(['auth'])->name('savedcomment');
Route::get('writer/{us}/',[\App\Http\Controllers\IndexController::class,'getbyusername'])->name('getbyusername');
Route::post('delete/this/comment',[\App\Http\Controllers\IndexController::class,'deletethiscomments'])->middleware(['auth'])->name('deletethiscomments');
Route::get('/dashboard',[\App\Http\Controllers\IndexController::class,'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('test/dashboard',function (){
    return view('testdashboard');
});
Route::get('/categorys',function (){
    return view('categorys');

});
Route::get('by/categorys/{category}',[\App\Http\Controllers\IndexController::class,'searchbycategory'])->name('searchbycategory');
//test
Route::get('new',[\App\Http\Controllers\IndexController::class,'newss'])->name('newss');
Route::get('save/like/',[\App\Http\Controllers\IndexController::class,'savelike'])->name('savelike');

Route::group(['middleware' => ['auth', 'Admin'], 'prefix' => 'admin'], function () {
    Route::get('/',[\App\Http\Controllers\AdminController::class,'Adminhome'])->name('Adminhome');
    Route::get('/category',[\App\Http\Controllers\AdminController::class,'category'])->name('category');
    Route::post('/save/category',[\App\Http\Controllers\AdminController::class,'savecategory'])->name('savecategory');
    Route::get('/edit/category',[\App\Http\Controllers\AdminController::class,'editcategory'])->name('editcategory');
    Route::post('/save/edit/category',[\App\Http\Controllers\AdminController::class,'saveeditcategory'])->name('saveeditcategory');
    Route::post('/delete/category',[\App\Http\Controllers\AdminController::class,'deletecategory'])->name('deletecategory');
    Route::get('/content',[\App\Http\Controllers\AdminController::class,'savecontent'])->name('savecontent');
    Route::post('/content/save',[\App\Http\Controllers\AdminController::class,'savecontents'])->name('savecontents');
    Route::get('/content/edit',[\App\Http\Controllers\AdminController::class,'editcontent'])->name('editcontent');
    Route::post('/content/save/edit',[\App\Http\Controllers\AdminController::class,'saveeditcontent'])->name('saveeditcontent');
    Route::post('/content/set/vip',[\App\Http\Controllers\AdminController::class,'setvip'])->name('setvip');
    Route::get('/show/test/{vals}/{titles}',[\App\Http\Controllers\AdminController::class,'testshow'])->name('testshow');
    Route::post('/delete/content',[\App\Http\Controllers\AdminController::class,'Deletecontent'])->name('Deletecontent');
    Route::get('/tabs',[\App\Http\Controllers\AdminController::class,'Tabs'])->name('Tabs');
    Route::post('/tabs/save/it',[\App\Http\Controllers\AdminController::class,'savetabs'])->name('savetabs');
    Route::post('/tabs/start',[\App\Http\Controllers\AdminController::class,'starttabs'])->name('starttabs');
    Route::post('/tabs/delete',[\App\Http\Controllers\AdminController::class,'deletetab'])->name('deletetab');
    Route::get('/tabs/edit/',[\App\Http\Controllers\AdminController::class,'edittabs'])->name('edittabs');
    Route::post('/tab/save/',[\App\Http\Controllers\AdminController::class,'saveedittab'])->name('saveedittab');
    Route::get('/all/user/send',[\App\Http\Controllers\AdminController::class,'usersend'])->name('usersend');
    Route::post('submit/post/user',[\App\Http\Controllers\AdminController::class,'submituserpost'])->name('submituserpost');
    Route::post('delete/content/user',[\App\Http\Controllers\AdminController::class,'deletecontentwriter'])->name('deletecontentwriter');
    Route::post('change/content/vip',[\App\Http\Controllers\AdminController::class,'changevipcontentsadmin'])->name('changevipcontentsadmin');
    Route::get('show/vd/{vars}',[\App\Http\Controllers\AdminController::class,'showtestuseradmin'])->name('showtestuseradmin');
    Route::get('edit/content/user/vb',[\App\Http\Controllers\AdminController::class,'editcontentuseradmin'])->name('editcontentuseradmin');
    Route::post('/save/edit/content/vb',[\App\Http\Controllers\AdminController::class,'saveeditcontentuseradmin'])->name('saveeditcontentuseradmin');
    Route::get('show/user/info',[\App\Http\Controllers\AdminController::class,'showuserinfo'])->name('showuserinfo');
    Route::get('links',[\App\Http\Controllers\AdminController::class,'links'])->name('links');
    Route::post('save/links',[\App\Http\Controllers\AdminController::class,'savelinks'])->name('savelinks');
    Route::get('edit/links',[\App\Http\Controllers\AdminController::class,'editlink'])->name('editlink');
    Route::post('save/edit/links',[\App\Http\Controllers\AdminController::class,'saveeditlinks'])->name('saveeditlinks');
    Route::post('delete/links',[\App\Http\Controllers\AdminController::class,'deletelinks'])->name('deletelinks');
    Route::get('edit/user',[\App\Http\Controllers\AdminController::class,'edituser'])->name('edituser');
    Route::post('save/edit/users',[\App\Http\Controllers\AdminController::class,'saveeditusers'])->name('saveeditusers');
    Route::post('banned/user',[\App\Http\Controllers\AdminController::class,'banneduser'])->name('banneduser');
    Route::post('deleteuser',[\App\Http\Controllers\AdminController::class,'deleteuser'])->name('deleteuser');
    Route::get('searchinuser',[\App\Http\Controllers\AdminController::class,'searchinuser'])->name('searchinuser');
    Route::get('allwriter',[\App\Http\Controllers\AdminController::class,'allwriter'])->name('allwriter');
    Route::get('showallWriter',[\App\Http\Controllers\AdminController::class,'showallWriter'])->name('showallWriter');
    Route::get('all/comment',[\App\Http\Controllers\AdminController::class,'allcommentfromusers'])->name('allcommentfromusers');
    Route::get('show/this/comment',[\App\Http\Controllers\AdminController::class,'showthiscomment'])->name('showthiscomment');
    Route::post('ok/this/comment',[\App\Http\Controllers\AdminController::class,'okthiscommnet'])->name('okthiscommnet');
    Route::post('delete/this/comment',[\App\Http\Controllers\AdminController::class,'deletethiscomment'])->name('deletethiscomment');
    Route::post('close/comment',[\App\Http\Controllers\AdminController::class,'closecomment'])->name('closecomment');
    Route::post('delete/all/comment',[\App\Http\Controllers\AdminController::class,'deleteallcomment'])->name('deleteallcomment');
    Route::get('show/all/now/comment',[\App\Http\Controllers\AdminController::class,'showallnowcomment'])->name('showallnowcomment');
    Route::get('biggestman',[\App\Http\Controllers\AdminController::class,'biggestman'])->name('biggestman');
    Route::post('save/biggestman',[\App\Http\Controllers\AdminController::class,'savebiggestman'])->name('savebiggestman');
    Route::post('deletebiggman',[\App\Http\Controllers\AdminController::class,'deletebiggman'])->name('deletebiggman');
});
Route::group(['middleware' => ['auth','WRT'], 'prefix' => 'writer'], function () {
/*Route::get('contents/now',[\App\Http\Controllers\WriterController::class,'writecontents'])->name('writecontents');*/
    Route::post('save/content/user',[\App\Http\Controllers\WriterController::class,'savecontentuser'])->name('savecontentuser');
    Route::post('change/content/vip',[\App\Http\Controllers\WriterController::class,'changevipcontent'])->name('changevipcontent');
    Route::get('show/test/user/{vals}',[\App\Http\Controllers\WriterController::class,'showtestuser'])->name('showtestuser');
    Route::get('edit/content/user',[\App\Http\Controllers\WriterController::class,'editcontentuser'])->name('editcontentuser');
    Route::post('/save/edit/content',[\App\Http\Controllers\WriterController::class,'saveeditcontentuser'])->name('saveeditcontentuser');
    Route::get('content/user',[\App\Http\Controllers\WriterController::class,'contentuser'])->name('contentuser');
    Route::post('content/changestatus/v',[\App\Http\Controllers\WriterController::class,'changestatustosends'])->name('changestatustosends');
    Route::get('updatecontent/{val}',[\App\Http\Controllers\WriterController::class,'updatecontent'])->name('updatecontent');
    Route::post('changesavedituser',[\App\Http\Controllers\WriterController::class,'changesavedituser'])->name('changesavedituser');
    Route::post('delete/this/content',[\App\Http\Controllers\WriterController::class,'deletethiscontent'])->name('deletethiscontent');
});
//temp
Route::get('timetest',[\App\Http\Controllers\IndexController::class,'timetest'])->name('timetest');
require __DIR__.'/auth.php';
