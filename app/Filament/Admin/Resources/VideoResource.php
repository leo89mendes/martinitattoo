<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\VideoResource\Pages;
use App\Filament\Admin\Resources\VideoResource\RelationManagers;
use App\Models\Video;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use App\Tables\Columns\RenderVideo;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static ?string $navigationIcon = 'heroicon-o-film';

    protected static ?string $navigationLabel = "Video";

    protected static ?string $pluralModelLabel = 'Video';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('link')->label('Youtube')->prefix('https://'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                RenderVideo::make('link')->label('Youtube')->width(200)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageVideos::route('/'),
        ];
    }
}
