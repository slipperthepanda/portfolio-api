<?php

namespace App\Portfolio\Activities;

use Illuminate\Support\Collection;

class Activities
{
    /**
     * @param int $limit
     * @return Collection
     */
    public function get(int $limit = 5): Collection
    {
        $query = Activity::orderBy('start_date', 'desc');
        if ($limit) {
            $query->limit($limit);
        }
        return $query->get();
    }
}
