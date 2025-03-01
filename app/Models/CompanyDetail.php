<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class CompanyDetail extends Model
{
    use HasFactory;

    protected $table = 'company_details';

    protected $fillable = [
        'visit_id',
        'organisation_name',
        'site_name',
        'company_registration_number',
        'geographical_coordinates',
        'address',
        'contact_person',
        'email',
        'telephone_number',
        'number_of_employees',
        'facility_description',
    ];

    public function visit()
    {
        return $this->belongsTo(Visit::class);
    }
}
