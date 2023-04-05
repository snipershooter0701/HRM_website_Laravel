<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'business_name',
        'contact_number',
        'federal_id',
        'website',
        'inv_country_id',
        'inv_state_id',
        'inv_city',
        'inv_suite_aptno',
        'inv_street',
        'inv_zipcode',
        'addr_country_id',
        'addr_state_id',
        'addr_city',
        'addr_suite_aptno',
        'addr_street',
        'addr_zipcode',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * Get the actived placements for client.
     */
    public function clientActivePlacements()
    {
        return $this->hasMany(ClientPlacement::class)->where('job_status', 1);
    }

    /**
     * Get the actived placement count for client.
     */
    public function clientActivePlacementCnt()
    {
        return $this->hasMany(ClientPlacement::class)->where('job_status', 1)->count();
        // var_dump($this->hasMany(ClientPlacement::class)->where('job_status', 1)->count());
        // exit;
        // return array($this->hasMany(ClientPlacement::class)->where('job_status', 1)->count());
    }
}