<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function add($post)
    {
    	$user = Auth::user();
    	$isFavorite = $user->favorite_posts()->where('post_id',$post)->count();

    	if($isFavorite == 0)
    	{
    		$user->favorite_posts()->attach($post);
    		Toastr::success('Post successfully added to your favorite list','Success');
    		return redirect()->back();
    	}else{
    		$user->favorite_posts()->detach($post);
    		Toastr::info('Post successfully removed from your favorite list','Info');
    		return redirect()->back();
    	}
    }
}
