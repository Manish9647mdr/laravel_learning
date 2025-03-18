<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Job モデルクラス
 * 
 * このクラスは "job_listings"テブールに対応する Eloquentモデルです。
 */
class Job extends Model
{
    use HasFactory;

    // 使用するデータベースのテブール名を指定
    protected $table = 'job_listings';

    // 一括代入を許可するカラムを指定
    protected $fillable = ['title', 'salary'];

    /**
     * Employer モデルとリレーション
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
}
