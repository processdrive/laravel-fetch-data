<p align="center">
  <img src="https://raw.githubusercontent.com/antony382/roles-and-permission/master/public/images/logo.png" style="width: 15% !important;max-width: 20% !important;">
</p>


ProcessDrive laravel fetch data
=============================================
 This pacakage is used for fetch the particular database value.


Installation
============

Run this command in your terminal

```
composer require process-drive/laravel-fetch-data
```

After Installation
==================

you must be add in you model file 
```
use ProcessDrive\LaravelFetchData\FetchDataTraits;
```

Next add inside your model class 
```
use FetchDataTraits;
```
```
example :

class users extends Model
{
    use FetchDataTraits;
}

```

Then next declare in you variable name 

```
example:

protected static $fetchable = ['username','email','password'];
```

Note
================== 
**static** keyword is must to include in your variable.

License
=======
MIT


has context menu
