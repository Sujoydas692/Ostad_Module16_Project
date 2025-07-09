<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $experiences = [
            [
                'work_date' => '2019 - Present',
                'work_title' =>'Web Developer',
                'work_company' =>'Stark Industries',
                'work_location' =>'Los Angeles, CA',
                'work_resposibilty' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium,
                                    voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed
                                    aliquam non voluptate corrupti excepturi maxime porro fuga.'
            ],
            [
                'work_date' => '2017 - 2019',
                'work_title' =>'SEM Specialist',
                'work_company' =>'Wayne Enterprises',
                'work_location' =>'Gotham City, NY',
                'work_resposibilty' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium,
                                    voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed
                                    aliquam non voluptate corrupti excepturi maxime porro fuga.'
            ],
            [
                'work_date' => '2019 - 2021',
                'work_title' =>'Frontend Developer',
                'work_company' =>'Daily Planet',
                'work_location' =>'Los Angeles, CA',
                'work_resposibilty' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium,
                                    voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed
                                    aliquam non voluptate corrupti excepturi maxime porro fuga.'
            ]
        ];

        $educations = [
            [
                'passing_year' => '2015 - 2017',
                'institute' =>'Barnett College',
                'institute_location' =>'Fairfield, NY',
                'degree' =>'Master',
                'degree_subject' =>'Web Development',
                'short_des' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium,
                                    voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed
                                    aliquam non voluptate corrupti excepturi maxime porro fuga.'
            ],
             [
                'passing_year' => '2011 - 2015',
                'institute' =>'ULA',
                'institute_location' =>'Los Angeles, CA',
                'degree' =>'Undergraduate',
                'degree_subject' =>'Computer Science',
                'short_des' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium,
                                    voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed
                                    aliquam non voluptate corrupti excepturi maxime porro fuga.'
            ]
            
        ];

        return view('resume', compact('experiences', 'educations'));
    }
}
