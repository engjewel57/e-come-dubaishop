<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $sub_Category;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    private static function getImageUrl($image)
    {
        self::$imageName=$image->getClientOriginalName();
        self::$directory='sub_category-image/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl=self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newSubCategory($request)
    {
        self::$sub_Category=new SubCategory();
        self::$sub_Category->category_id    =$request->category_id;
        self::$sub_Category->name           =$request->name;
        self::$sub_Category->description           =$request->description;
        self::$sub_Category->image           =self::getImageUrl($request->file('image'));
        self::$sub_Category->status           =$request->status;
        self::$sub_Category->save();
    }
    public static function updateSubCategory( $request,$id)
    {
        self::$sub_Category =SubCategory::find($id);
        if ($request->file('image'))
        {
            if(file_exists(self::$sub_Category->image))
            {
                unlink(self::$sub_Category->image);
            }
            self::$imageUrl= self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl =self::$sub_Category->image;
        }
        self::$sub_Category->name         =$request->name;
        self::$sub_Category->description  =$request->description;
        self::$sub_Category->image        =self::$imageUrl;
        self::$sub_Category->status       =$request->status;
        self::$sub_Category->save();
    }
    public static function deleteSubCategory($id)
    {
        self::$sub_Category=SubCategory::find($id);
        if (self::$sub_Category->image)
        {
            unlink(self::$sub_Category->image);
        }
        self::$sub_Category->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
