<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;


class Product extends Model
{

    public static function filteredProducts()
    {
        return app(Pipeline::class)
            ->send(Product::query())
            ->through([
                \App\QueryFilters\Price::class,
                \App\QueryFilters\Brend::class,
                \App\QueryFilters\Color::class,
                \App\QueryFilters\Size::class,
                \App\QueryFilters\Sort::class,
            ])
            ->thenReturn()
            ->with('reviews')
            ->paginate(9);
    }

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brend()
    {
        return $this->belongsTo(Brend::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class);
    }

    public function gallery()
    {
        return $this->hasOne(Gallery::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class)->orderBy('value', 'ASC');
    }

    public function productsByGroup()
    {
        return Product::where('group', $this->group)->get();
    }

    public function productProfile()
    {
        return $this->hasOne(ProductProfile::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function reviewPercentage($item)
    {
        $reviews = $this->reviews()->get();
        $rates = array_count_values($reviews->pluck('rate')->toArray());
        if (empty($rates[$item])) {
            return 0;
        }
        return (($rates[$item])/$reviews->count())*100;
    }


    public function wishlists()
    {
        return $this->belongsToMany(Wishlist::class);
    }

    public function relatedProducts()
    {
        return $this->belongsToMany(Product::class, 'related_product', 'product_id', 'related_id');
    }
}
