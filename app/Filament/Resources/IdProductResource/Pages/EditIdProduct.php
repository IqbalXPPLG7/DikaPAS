<?php

namespace App\Filament\Resources\IdProductResource\Pages;

use App\Filament\Resources\IdProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIdProduct extends EditRecord
{
    protected static string $resource = IdProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
