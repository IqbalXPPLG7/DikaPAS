<?php

namespace App\Filament\Resources\IdProductResource\Pages;

use App\Filament\Resources\IdProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIdProducts extends ListRecords
{
    protected static string $resource = IdProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
