<?php

use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectsArray = [
            ['JavaScript Calculator','June 2016','/img/calculator.jpg','My first application! Does all basic math operations and decimals. Includes clear button.','JavaScript, jQuery, CSS',''],
            ['Weather Application','June 2016','/img/weatherapplication.jpg','Weather application that makes Ajax requests to the OpenWeatherMap API and displays the weather forecast up to 16 days in advance. Locations for weather results are displayed using the GoogleMaps API.','Bootstrap Framework, JavaScript, jQuery',''],
            ['Ser Simon Says','July 2016','/img/sersimon.jpg','Simple Simon game with Game of Thrones theme. Includes multiple difficulty settings, scoring system, and simple animations.
I do not own Game of Thrones and I do not claim rights to any of it\'s characters or intellectual property.','JavaScript, jQuery, CSS',''],
            ['Reddit Clone','August 2016','/img/redditclone.jpg','Basic functional clone of the popular Reddit forums. Includes up/down vote system, post creation, post editing, sorting, functional user account pages and search bar.','Laravel and Bootstrap frameworks, PHP, JavaScript, jQuery, MySQL','http://myreddit.rksugarfree.com/posts'],
            ['HearthLister','August 2016','/img/hearthlister.jpg','Web application based on the popular Hearthstone game by Blizzard. Lets you create or edit a deck of  game cards and search through the card database using Ajax requests to Hearthstone\'s API.','Bootstrap framework, PHP, JavaScript, jQuery','https://github.com/HearthLister/adlister.dev'],
            ['210 Hopper','September 2016','/img/210hopper.jpg','Interactive mobile responsive web application that lists specials, events and reviews for venues in the San Antonio area. Capstone Final Project for Codeup.','Laravel and Bootstrap frameworks, PHP, JavaScript, jQuery, MySQL','https://210hopper.com'],
        ];
        foreach ($projectsArray as $key => $data){
            $project = App\Project::create([
//                'area' => $data[0],
                'title' => $data[0],
                'date' => $data[1],
                'description' => $data[3],
                'technologies' => $data[4],
            ]);
            $project->save();
        }
    }
}
