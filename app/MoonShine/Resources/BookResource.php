<?php

namespace App\MoonShine\Resources;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;

class BookResource extends Resource
{
    public static string $model = Book::class;

    public static string $title = 'Book';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'name')
            ->required(),
            Url::make('Ссылка на скриншот', 'screenshot')
            ->required()
            ->hideOnIndex(),
            Text::make('Описание', 'description')
            ->required()
            ->hideOnIndex(),
            Url::make('Ссылка на установку', 'url')
            ->required()
            ->hideOnIndex()
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
