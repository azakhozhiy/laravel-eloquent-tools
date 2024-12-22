<?php

declare(strict_types=1);

namespace AZakhozhiy\Laravel\Eloquent\Tools;

use AZakhozhiy\Laravel\Eloquent\Tools\Exception\FilterNotRealisedException;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static Builder filter(array $data = [], string|null $customFilter = null)
 * @see FilterableModel::modelFilter()
 */
abstract class FilterableModel extends Model
{
    use Filterable;

    public function modelFilter(): string
    {
        throw new FilterNotRealisedException('No filter realisation.');
    }
}
