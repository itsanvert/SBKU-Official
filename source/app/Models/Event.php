<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
   protected $fillable = [
    'title', 'slug', 'date', 'time', 'location', 'image', 'description',
   ];

   protected $casts = [
       'date' => 'datetime',
       'time' => 'datetime:H:i',
   ];
   protected static function booted()
{
    static::creating(function ($event) {
        $event->slug = \Str::slug($event->title);
    });
}


   public function getRouteKeyName()
{
    return app()->runningInConsole() || request()->is('admin/*') ? 'id' : 'slug';
}

   public function show(Event $event)
   {
       return view('events.show', compact('event'));
   }

   public function registrations()
   {
       return $this->hasMany(EventRegistration::class);
   }

   public function getImageUrlAttribute()
   {
       if (!$this->image) {
           return asset('default-event-image.jpg');
       }

       // Filament stores files in the public disk under the directory specified
       // in the FileUpload component (in this case 'events')
       return Storage::disk('public')->exists($this->image)
           ? asset('source/storage/app/public/' . $this->image)
           : asset('default-event-image.jpg');
   }



}
