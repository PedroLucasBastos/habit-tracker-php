<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Habit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // um hábito pertence a um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }

    // um hábito pode ter muitos registros de hábitos
    public function habitLogs(): HasMany
    {
        return $this->hasMany(related: HabitLog::class);
    }

    public function wasCompletedToday(): bool
    {
        return $this->habitLogs()
            ->whereDate('completed_at', Carbon::today()->toDateString())
            ->exists();
    }
}
