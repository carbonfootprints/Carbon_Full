<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'visit_code',
        'company_details',
        'directformone',
        'directformtwo',
        'directformthree',
        'indirectfirstformone',
        'indirectfirstformtwo',
        'indirectsecondformone',
        'indirectsecondformtwo',
        'indirectsecondformthree',
    ];

    /**
     * Get the user who owns the visit.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function companyDetails()
    {
        return $this->hasOne(CompanyDetail::class);
    }
}
