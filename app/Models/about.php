<?php

namespace App\Models;

class About {
    
    public static function data() {
        return [
            [
                'id' => 1,
                'Nama' => 'Ganpra Nurhadi Losa',
                'Nim' => '2301040021',
                'bio' => 'mahasiswa bumigora',
                'gambar' => 'gan.jpg'
            ],
            [
                'id' => 2,
                'Nama' => 'Muhammad Abin',
                'Nim' => '2301040038',
                'bio' => 'mahasiswa bumigora',
                'gambar' => 'abin.jpg'
            ],
        ];
    }

    public static function caridata($id) {
        $posts = self::data();

        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }
        return null;
    }

    public static function count() {
        return count(self::data());
    }
}
