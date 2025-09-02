<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Consumer Model
 */
class ConsumerModel extends Model
{
    protected $table = 'consumers';
    protected $fillable = ['code', 'name','mobile', 'email', 'address','created_by', 'updated_by', 'deleted_by'];
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

}