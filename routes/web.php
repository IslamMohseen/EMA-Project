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

        Route::get('/posts', 'PagesController@posts');
        Route::get('/posts/{post}', 'PagesController@viewpost');
        Route::post('/posts/store', 'PagesController@store');
        Route::post('/post_update/{id}',['as'=>'post.update','uses'=> 'PagesController@update']);
        Route::post('/postscomment/{post}', 'CommentsController@store');
        
        Route::get('/contact', 'PagesController@contact');
        Route::get('/home', 'PagesController@home');


        Route::post('/category/store', 'PagesController@categorystore');
        Route::get('/category/{name}', 'PagesController@category');

        Route::get('/register', 'RegistrationController@Create');
        Route::post('/register', 'RegistrationController@Store');

        Route::get('/login', 'SessionsController@Create');
        Route::post('/login', 'SessionsController@Store');
        Route::get('/logout', 'SessionsController@Destroy');

        //  Admin  
        Route::get('/dashboard', [

        'uses' => 'PagesController@admin',
        'as' => 'content.dashboard',
        'middleware' => 'roles',
        'roles' => ['admin' ]

        ]);

        Route::get('/addpost', [

        'uses' => 'PagesController@addpost',
        'as' => 'content.addpost',
        'middleware' => 'roles',
        'roles' => ['admin' ]

        ]);
        Route::get('/addcategory', [

        'uses' => 'PagesController@addcategory',
        'as' => 'content.addcategory',
        'middleware' => 'roles',
        'roles' => ['admin' ]

        ]);

        Route::post('/change-role', [

        'uses' => 'PagesController@changerole',
        'as' => 'content.userRoles',
        'middleware' => 'roles',
        'roles' => ['admin' ]

        ]);

        Route::get('/post_edit/{id}', [

        'uses' => 'PagesController@edit',
        'as' => 'content.postedit',
        'middleware' => 'roles',
        'roles' => ['admin' ]

        ]);
        Route::get('/post_delete/{id}', [

        'uses' => 'PagesController@destroy',
        'middleware' => 'roles',
        'roles' => ['admin' ]

        ]);

        Route::get('/userRoles', [

        'uses' => 'PagesController@userRole',
        'as' => 'content.userRoles',
        'middleware' => 'roles',
        'roles' => ['admin' ]

        ]);


