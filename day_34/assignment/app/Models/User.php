<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Course;
use App\Models\Model;
use App\Models\Enrollment;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]

class User extends Model
{
    protected $fillable = ['name', 'email', 'password', 'role', 'is_active'];

    public function courses()
    {
        return $this->hasMany(Course::class, 'id_user');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
