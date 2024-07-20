<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder as QueryBuilder;

class Job extends Model
{
    protected $fillable = ['title', 'description', 'salary', 'location', 'category', 'experience'];

    public static array $experience = ['Entry', 'Intermediate', 'Senior'];
    public static array $categories = ['IT', 'Finance', 'HR', 'Sales', 'Marketing'];
    use HasFactory;

    public function scopeFilter(Builder | QueryBuilder $query, array $filters): Builder | QueryBuilder{
        return $query->when($filters['search'] ?? null, function($query, $search) {
            $query->where(function($subQuery) use ($search) {
                $subQuery->where('title', 'like', '%' . $search . '%')
                         ->orWhere('description', 'like', '%' . $search . '%')
                         ->orWhereHas('employer', function($query) use ($search) {
                            $query->where('company_name', 'like', '%' . $search . '%');
                        });
            });
        })->when($filters['min_val'] ?? null, function($query, $minVal) {
            $query->where('salary', '>=', $minVal);
        })->when($filters['max_val'] ?? null, function($query, $maxVal) {
            $query->where('salary', '<=', $maxVal);
        })->when($filters['experience'] ?? null, function($query, $experience) {
            $query->where('experience', $experience);
        })->when($filters['categories'] ?? null, function($query, $categories) {
            $query->where('category', $categories);
        });        
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
