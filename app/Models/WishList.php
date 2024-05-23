<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class WishList extends Model
{
    protected $primaryKey = 'id'; // Thiết lập primary key cho mô hình
    public $incrementing = true; // Thiết lập trường id là tự động tăng
    protected $fillable = ['user_id', 'product_id', 'updated_at', 'created_at'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}