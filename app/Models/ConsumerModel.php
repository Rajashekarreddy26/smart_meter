<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Consumer Model
 */
class ConsumerModel extends Model
{
    protected $table = 'consumers';
    protected $fillable = ['code', 'name','mobile', 'email', 'address'];
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id');
    }

}