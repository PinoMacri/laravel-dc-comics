<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dati=config("dati");
       
      
        foreach($dati as $dato){
            

            $new_comic=new Comic();
            $new_comic->title=$dato["title"];
            $new_comic->description=$dato["description"];
            $new_comic->thumb=$dato["thumb"];
            $new_comic->price=$dato["price"];
            $new_comic->series=$dato["series"];
            $new_comic->sale_date=$dato["sale_date"];
            $new_comic->type=$dato["type"];
            $new_comic->artists=implode(',', array_values($dato['artists']));
            $new_comic->writers=implode(',', array_values($dato['writers']));
            $new_comic->save();
        }
     
    }
}