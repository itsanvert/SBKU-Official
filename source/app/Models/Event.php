<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
   protected $fillable = [
    'title', 'slug', 'date', 'time', 'location', 'image', 'description',
    'registration_required', 'max_participants', 'registration_deadline', 'schedule'
   ];

   protected $casts = [
       'date' => 'datetime',
       'time' => 'datetime:H:i',
       'registration_required' => 'boolean',
       'registration_deadline' => 'datetime',
       'schedule' => 'array',
   ];

   public function getRouteKeyName()
   {
       // Use ID for Filament admin routes and slug for frontend
       return request()->is('admin/*') ? 'id' : 'slug';
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
