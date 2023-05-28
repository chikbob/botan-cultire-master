<?php

namespace App\Providers;

use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use Illuminate\Support\ServiceProvider;
use App\MoonShine\Resources\BookResource;
use App\MoonShine\Resources\InfoResource;
use App\MoonShine\Resources\VisitorResource;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('Системне налаштування', [
                MenuItem::make('Адміністратори', new MoonShineUserResource())
                    ->translatable()
                    ->icon('users'),
                MenuItem::make('Ролі', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('bookmark'),
            ])->translatable(),

            MenuItem::make('Книги', new BookResource()),
            MenuItem::make('Опис книги', new InfoResource()),
            MenuItem::make('Користувачі', new VisitorResource()),
        ]);
    }
}
