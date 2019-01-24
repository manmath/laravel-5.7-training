<?php
namespace STEPITAcademy\HRManagement\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name', 'path', 'absolute_path', 'size'];

    public function user()
    {
        return $this->belongsTo('STEPITAcademy\HRManagement\Models\User');
    }
}
