<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'description',
        'specs',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the images that belong to the product.
     * Following Laravel documentation: Eloquent will automatically determine the proper foreign key column for the Image model.
     * By convention, Eloquent will take the "snake case" name of the parent model and suffix it with _id. 
     * So, in this example, Eloquent will assume the foreign key column on the Image model is product_id.
     */
    public function image(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
