<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $fillable = [
        'Language', 'SiteTitle','Location','PhoneNumber','Email','LogoPicture','MetaDescription','MetaKeyWords','Facebook','Twitter','GitHub','Slack','Dribbble','LinkedIn','Behance','Digg','Flickr','Vimeo','youtube','url_App','FaviconOne','FaviconTwo','FaviconThree','about_en','about_gr','about_ar','title_home_en','title_home_gr','title_home_ar','sub_title_home_en','sub_title_home_gr','sub_title_home_ar','title_about_en','title_about_gr','title_about_ar','content_about_en','content_about_gr','content_about_ar','content_blog_en','content_blog_gr',
            'content_blog_ar','content_feature_en','content_feature_gr','content_feature_ar','content_feature_two_en','content_feature_two_gr',
            'content_feature_two_ar','content_feature_three_en','content_feature_three_gr','content_feature_three_ar'
    ];
}



       