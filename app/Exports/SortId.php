<?php

namespace App\Exports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromQuery;

class SortId implements FromQuery
{
    public function query()
    {
        // Define your query here
        return Project::query()->orderBy('id', 'desc');
    }
}
