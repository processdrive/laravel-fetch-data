<?php
namespace ProcessDrive\LaravelFetchData;


trait FetchDataTraits {

    public static function fetchableGet()
    {
        return  self::$fetchable ? get_class()::get(self::$fetchable) : get_class()::get();
    }

    public static function fetchableFirst()
    {
        return self::$fetchable ? get_class()::first(self::$fetchable) : get_class()::first();
    }

    public static function fetchableAll()
    {
        return self::$fetchable ? get_class()::all(self::$fetchable) : get_class()::all();
    }
}