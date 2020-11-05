
<?php
use App\Crime;
use App\Category;

function get_stats(){   
        $cats = Category::orderBy('created_at', 'desc');

        $all = Crime::orderBy('created_at', 'desc')->get();
        $current_location = Crime::where([
            'location'=>session('location')
        ])->get();
        
        $all_num = count($all);
        $current_location_num = count($current_location);
        
        $risk = ($current_location_num / $all_num) * 100;

        return $risk;
}