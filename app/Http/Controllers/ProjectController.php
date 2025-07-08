<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        $projects = [
            [
                'image' => 'https://dummyimage.com/300x400/343a40/6c757d',
                'title' =>'Project Name 1',
                'short_description' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum
                                    aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad
                                    asperiores! Explicabo commodi quo itaque! Ipsam!'
            ],
            [
                'image' => 'https://dummyimage.com/300x400/343a40/6c757d',
                'title' =>'Project Name 2',
                'short_description' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum
                                    aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad
                                    asperiores! Explicabo commodi quo itaque! Ipsam!'
            ],
            [
                'image' => 'https://dummyimage.com/300x400/343a40/6c757d',
                'title' =>'Project Name 3',
                'short_description' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum
                                    aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad
                                    asperiores! Explicabo commodi quo itaque! Ipsam!'
            ]
        ];

        return view('project', compact('projects'));
    }
}
