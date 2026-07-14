<?php

namespace App\Controllers;

use App\Models\HeroSlideModel;
use App\Models\CompanyModel;
use App\Models\ServiceModel;
use App\Models\AboutModel;
use App\Models\GalleryModel;
use App\Models\StatModel;
use App\Models\TestimonialModel;
use App\Models\SettingModel;

class Home extends BaseController
{
    public function index()
    {

        $data['hero'] = (new HeroSlideModel())
            ->orderBy('sort_order')
            ->findAll();

        $data['company'] = (new CompanyModel())
            ->orderBy('sort_order')
            ->findAll();

        $data['service'] = (new ServiceModel())
            ->orderBy('sort_order')
            ->findAll();

        $data['about'] = (new AboutModel())
            ->orderBy('sort_order')
            ->findAll();

        $data['gallery'] = (new GalleryModel())
            ->orderBy('sort_order')
            ->findAll();

        $data['stat'] = (new StatModel())
            ->orderBy('sort_order')
            ->findAll();

        $data['testimonial'] = (new TestimonialModel())
            ->orderBy('sort_order')
            ->findAll();

        $data['setting'] = (new SettingModel())->first();

        return view('landing_page', $data);
    }
}
