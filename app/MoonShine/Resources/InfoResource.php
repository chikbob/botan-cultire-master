<?php

namespace App\MoonShine\Resources;

use App\Models\Info;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class InfoResource extends Resource
{
	public static string $model = Info::class;

	public static string $title = 'Info';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            BelongsTo::make('Книга', 'book', 'name')
            ->required(),
            Text::make('Інформація', 'info')
            ->required(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
