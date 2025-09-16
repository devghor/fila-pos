<?php

namespace App\Models\IdCard;

use App\Enums\MediaCollection;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class IdCardRequisition extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'employee_name',
        'employee_id',
        'reason',
        'division_id',
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection(MediaCollection::IdCardSignature->value)
            ->singleFile();
    }
}
