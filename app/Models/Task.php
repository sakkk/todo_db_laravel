<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * タスク所有ユーザーの取得
     *
     * @return void
     */
    public function user()
    {
        return $this->belongTo(User::class);
    }
}
