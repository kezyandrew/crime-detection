
<?php
use App\Crime;
use App\Category;

function get_stats(){   
        // the stats array;
        $stats = array();

        // all crimes in the system.
        $all = Crime::orderBy('created_at', 'desc')->get();
        $all_num = count($all);

        $categories = array();
        $cats = Category::select('cat_name')->get();
        // Now here lets first filter and get out or category Names
        foreach($cats as $cat){
            array_push($categories, $cat->cat_name);
        }

        foreach ($categories as $value) {
            $crime_by_cat = Crime::where([
                'catergory'=> $value,
                'location'=>session('location')
                ])->get();
            $risk = (count($crime_by_cat) / $all_num)*100;

            $risk = array(
                'count'=>count($crime_by_cat),
                'percentage'=>$risk,
                'category'=>$value
            );
            array_push($stats, $risk);
           
        }


        // $all = Crime::orderBy('created_at', 'desc')->get();
        $current_location = Crime::where([
            'location'=>session('location')
        ])->get();
        
        
        $current_location_num = count($current_location);
        
        $risk = ($current_location_num / $all_num) * 100;

        return $stats;
}



function new_crime_cats(){
    $cats = Category::orderBy('created_at', 'desc')->take(4)->get();
    return $cats;

}