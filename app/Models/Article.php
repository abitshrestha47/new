<?php
    namespace App\Models;

    class Article{
        public static function getallarticles(){
            return[
                [
                    'id'=>'1',
                    'title'=>'this is the first title',
                    'about'=>'this is the about of the title'
                ],
                [
                    'id'=>'2',
                    'title'=>'this is the second title',
                    'about'=>'this is the about of the title'
                ]
            ];
        }
        public static function getsinglearticle($id){
            $articles=self::getallarticles();
            foreach($articles as $value){
                if($value['id']===$id){
                    return $value;
                }
            }
        }
    }
?>