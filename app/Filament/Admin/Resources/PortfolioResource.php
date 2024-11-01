<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PortfolioResource\Pages;
use App\Filament\Admin\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\ImageColumn;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('categorie_id')
                ->label('Category')
                ->options(Category::all()->pluck('name', 'id'))
                ->searchable()->required(),
                FileUpload::make('images')->label('Image')->image()
                ->disk('public')
                ->imageEditor()
                ->downloadable()
                ->uploadingMessage('Uploading...')
                ->directory('assets/img/portfolio')
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SelectColumn::make('categorie_id')->label('Categorie')
                ->options(Category::all()->pluck('name', 'id'))->sortable(),
                ImageColumn::make('images')->label('Imagem')
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

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
