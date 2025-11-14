<?php

namespace App\Models;

class Post{
    public static function data(){
        return [
            ['id' => 1, 'title' => 'Acropolis, Yunani', 'gambar' => 'acropolis.jpg'],
            ['id' => 2, 'title' => 'Shibuya, Jepang', 'gambar' => 'shibuya.jpg'],
            ['id' => 3, 'title' => 'Cappodocia, mudi baleku', 'gambar' => 'cappadocia.webp'],
            ['id' => 4, 'title' => 'Giza, Lotim', 'gambar' => 'giza.webp'],
            ['id' => 5, 'title' => 'Garuda whisnu kencana, bali', 'gambar' => 'huayana.jpg'],
            ['id' => 6, 'title' => 'Jumeirah, abu dhabi', 'gambar' => 'jumeirah.jpg'],
            ['id' => 7, 'title' => 'Huayana, peru', 'gambar' => 'huayana.jpg'],
            ['id' => 8, 'title' => 'New york, US', 'gambar' => 'newyork.jpg'],
            ['id' => 9, 'title' => 'Niagara, Kanada', 'gambar' => 'niagara.jpg'],
        ];
    }

    public static function caridata($id){
        $posts = self::data();

        foreach($posts as $post){
            if($post['id'] == $id){
                return $post;
            }
        }
    return null;
    }

    public static function count(){
        return count(self::data());
    }
}