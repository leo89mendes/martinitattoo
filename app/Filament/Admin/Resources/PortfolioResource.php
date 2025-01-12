<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PortfolioResource\Pages;
use App\Filament\Admin\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms\Components\FileUpload;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('img')->label('Imagem Desktop')->image()
                ->disk('public')
                ->imageEditor()
                ->imageResizeMode('cover')
                ->imageEditorViewportWidth('335')
                ->imageEditorViewportHeight('410')
                ->imageEditorMode(3)
                ->downloadable()
                ->directory('assets/img/portfolio')
                ->columnSpan(2),
                FileUpload::make('img_mobile')->label('Imagem Mobile')->image()
                ->disk('public')
                ->imageEditor()
                ->imageResizeMode('cover')
                ->imageEditorViewportWidth('320')
                ->imageEditorViewportHeight('180')
                ->imageEditorMode(3)
                ->downloadable()
                ->directory('assets/img/portfolio')
                ->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('img')->label('Banner Image'),
                ImageColumn::make('img_mobile')->label('Imagem Mobile'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePortfolios::route('/'),
        ];
    }
}
