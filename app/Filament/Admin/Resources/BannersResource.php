<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BannersResource\Pages;
use App\Filament\Admin\Resources\BannersResource\RelationManagers;
use App\Models\Banners;
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
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;



class BannersResource extends Resource
{
    protected static ?string $model = Banners::class;

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = "Banners";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Título'),
                RichEditor::make('subtitle')->label('Descrição'),
                TextInput::make('btn_text')->label('Botão Texto'),
                FileUpload::make('img')->label('Imagem Banner')->image()
                ->disk('public')
                ->imageEditor()
                ->imageResizeMode('cover')
                ->imageEditorViewportWidth('1920')
                ->imageEditorViewportHeight('1080')
                ->imageCropAspectRatio('16:9')
                ->imageEditorMode(3)
                ->downloadable()
                ->uploadingMessage('Aguarde...')
                ->directory('assets/img/banners')
                ->columnSpan(2),
                FileUpload::make('img_mobile')->label('Imagem Mobile')->image()
                ->disk('public')
                ->imageEditor()
                ->imageResizeMode('cover')
                ->imageEditorViewportWidth('320')
                ->imageEditorViewportHeight('180')
                ->imageCropAspectRatio('16:9')
                ->imageEditorMode(3)
                ->downloadable()
                ->uploadingMessage('Aguarde...')
                ->directory('assets/img/banners')
                ->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Title'),
                TextColumn::make('subtitle')->label('Description')->html()->wrap(),
                TextColumn::make('btn_text')->label('Button Text'),
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
            'index' => Pages\ManageBanners::route('/'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
