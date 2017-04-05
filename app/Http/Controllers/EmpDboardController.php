<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Http\Controllers\Session;

session_start();

class EmpDboardController extends Controller {

    public function dboard_emp() {

        $post_show = DB::table('tbl_forum')
                ->select('tbl_forum.*')
                ->get();

        $ct_show = DB::table('tbl_forum_category')
                ->select('tbl_forum_category.*')
                ->get();

//        echo '<pre>';
//        print_r($post_show);
//        exit();


        $sidebar = view('fe.emp_portal.forum_sidebar')
                ->with('ct_show', $ct_show);

        $content = view('fe.emp_portal.forum')
                ->with('forum_sidebar', $sidebar)
                ->with('show', $post_show);
        $menu = view('fe.emp_portal.menu');

        return view('fe.emp_portal.emp_dboard')
                        ->with('maincontent', $content)
                        ->with('menu', $menu)
                        ->with('blog_sidebar', $sidebar);
    }

    public function details_forum() {

        $post_show = DB::table('tbl_forum')
                ->select('tbl_forum.*')
                ->get();

        $ct_show = DB::table('tbl_forum_category')
                ->select('tbl_forum_category.*')
                ->get();

        $menu = view('fe.emp_portal.menu');
        $sidebar = view('fe.emp_portal.forum_sidebar')
                ->with('ct_show', $ct_show);

        $forum_details = view('fe.emp_portal.forum_details')
                ->with('forum_sidebar', $sidebar)
                ->with('show', $post_show);
        return view('fe.emp_portal.emp_dboard')
                        ->with('menu', $menu)
                        ->with('maincontent', $forum_details);
    }

    public function forum_add() {

        $ct_show = DB::table('tbl_forum_category')
                ->select('tbl_forum_category.*')
                ->get();

        $sidebar = view('fe.emp_portal.forum_sidebar')
                ->with('ct_show', $ct_show);
        $all_category = DB::table('tbl_forum_category')->where('publication_status', 1)->get();

        $add_forum = view('fe.emp_portal.add_forum')
                ->with('forum_sidebar', $sidebar)
                ->with('all_published_category', $all_category);

//        echo '<pre>';
//        print_r($all_category);
//        exit();

        $menu = view('fe.emp_portal.menu');

        return view('fe.emp_portal.emp_dboard')
                        ->with('maincontent', $add_forum)
                        ->with('menu', $menu);
    }

    public function save_forum_post(Request $request) {

        $image = $request->file('forum_image');


        $image_name = str_random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $destination_path = 'fe/images/forum_image';
        $image_full_name = $image_name . '.' . $ext;
        $image_url = $destination_path . $image_full_name;

        $success = $image->move($destination_path, $image_full_name);
        if ($success) {
            $image_url = $destination_path . $image_full_name;
        } else {
            $image_url = NULL;
        }
//          echo '<pre>';
//        print_r($image);
//        exit();

        $forum = array();
        $forum['forum_title'] = $request->title;
        $forum['category_id'] = $request->category_id;
        $forum['author_name'] = $request->author_name;
        $forum['forum_short_description'] = $request->short;
        $forum['forum_long_description'] = $request->long;
        $forum['publication_status'] = $request->publication_status;


        DB::table('tbl_forum')->insertGetId($forum);

//        Session::put('forum_data_inserted', 'Data Inserted Successfully!!!');
        return Redirect::to('emp_dboard');
    }

    public function emp_salary() {

        $salary = view('fe.emp_portal.salary');
        $menu = view('fe.emp_portal.menu');
        return view('fe.emp_portal.emp_dboard')
                        ->with('menu', $menu)
                        ->with('maincontent', $salary);
    }

    public function emp_deposite() {

        $deposite = view('fe.emp_portal.deposite');
        $menu = view('fe.emp_portal.menu');
        return view('fe.emp_portal.emp_dboard')
                        ->with('menu', $menu)
                        ->with('maincontent', $deposite);
    }
    
    public function emp_profile(){
        
        $profile = view('fe.emp_portal.emp_profile');
        $menu = view('fe.emp_portal.menu');
        return view('fe.emp_portal.emp_dboard')
                        ->with('menu', $menu)
                        ->with('maincontent', $profile);
    }

}
