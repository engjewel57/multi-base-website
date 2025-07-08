<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class AuthBaseModel extends Authenticatable
{
   use HasFactory, Notifiable;

   public const STATUS_ACTIVE = -1;
   public const STATUS_INACTIVE = 0;   
    public const STATUS_PENDING = 1;

   public function creater()
   {
    return $this->morphTo();
   }

    public function updater()
    {
     return $this->morphTo();
    }

    public function deleter()
    {
     return $this->morphTo();
    }

    public function createdBy()
    {
        return $this->morphTo(Admin::class,'created_by');
    }
    public function updatedBy()
    {
        return $this->morphTo(Admin::class,'updated_by');
    }
    public function deletedBy()
    {
        return $this->morphTo(Admin::class,'deleted_by');
    }
}
