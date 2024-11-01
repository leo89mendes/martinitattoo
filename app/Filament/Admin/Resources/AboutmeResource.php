<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AboutmeResource\Pages;
use App\Filament\Admin\Resources\AboutmeResource\RelationManagers;
use App\Models\Aboutme;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\Layout\Split;
use App\Tables\Columns\RenderVideo;

class AboutmeResource extends Resource
{
    protected static ?string $model = Aboutme::class;

    protected static ?string $pluralModelLabel = 'About Me';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'About Me';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Título'),
                RichEditor::make('description')->label('Descrição'),
                TextInput::make('btn_text')->label('Botão Texto'),
                TextInput::make('link')->label('Link Botão')->prefix('https://'),
                TextInput::make('link_video')->label('Youtube')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Título'),
                TextColumn::make('description')->label('Descrição')->lineClamp(10)->wrap()->html(),
                TextColumn::make('btn_text')->label('Botão Texto'),
                TextColumn::make('link')->label('Link Botão'),
                RenderVideo::make('link_video')->label('Youtube')->columnSpan(2),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
              //  Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ManageAboutmes::route('/'),
        ];
    }
}
