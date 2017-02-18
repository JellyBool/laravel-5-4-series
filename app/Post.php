<?php

namespace App;

use App\Events\PostWasPublished;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 */
class Post extends Model
{

    /**
     * @var array
     */
    protected  $fillable = ['title','body','published'];

    protected $events = [
        'created' => PostWasPublished::class
    ];
    /**
     * @return bool
     */
    public function archive()
    {
        return $this->update(['published' => false]);
    }

    /**
     * @return bool
     */
    public function publish()
    {
        return $this->update(['published' => true]);
    }
}
