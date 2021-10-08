<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function create(array $attributes = []) {

      $attributes['user_id'] = auth()->id();

      $post = static::query()->create($attributes);

      $url = Str::slug($attributes['title'], '-');

      if (static::whereSlug($url)->exists()) {

        $post->slug = Str::slug($attributes['title']) . "-{$post->id}";
      } else {

        $post->slug = Str::slug($attributes['title']);
      }

      $post->save();

      return $post;
    }
}
