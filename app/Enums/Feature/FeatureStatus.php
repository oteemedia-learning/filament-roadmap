<?php

namespace App\Enums\Feature;

use App\Enums\Traits\UseValueAsLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum FeatureStatus: string implements HasColor, HasLabel
{
    use UseValueAsLabel;
    case Proposed = 'Proposed';
    case Planned = 'Planned';
    case InProgress = 'In Progress';
    case Completed = 'Completed';
    case Cancelled = 'Cancelled';

    public function getColor(): string|array|null
    {
        return match ($this) {
            FeatureStatus::Proposed => 'gray',
            FeatureStatus::Planned => 'info',
            FeatureStatus::InProgress => 'primary',
            FeatureStatus::Completed => 'success',
            FeatureStatus::Cancelled => 'danger',
        };

    }
}
