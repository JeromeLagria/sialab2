<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'customers';
public $timestamps = false;
// column sa table
protected $fillable = [
'Customer_FirstName', 'Customer_LastName', 'Customer_Favorite_Color', 'Customer_Age'
];
}