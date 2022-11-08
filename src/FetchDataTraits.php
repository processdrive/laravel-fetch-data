<?php
namespace ProcessDrive\LaravelFetchData;


trait FetchDataTraits {

    public static function fetchableGet($array = [])
    {
        return $array ? get_class()::get($array) : get_class()::get();
    }

    public static function fetchableFirst($array = [])
    {
        return $array ? get_class()::first($array) : get_class()::first();
    }

    public static function fetchableAll($array = [])
    {
        return $array ? get_class()::all($array) : get_class()::all();
    }
}