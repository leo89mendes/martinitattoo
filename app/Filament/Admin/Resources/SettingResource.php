<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SettingResource\Pages;
use App\Filament\Admin\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
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

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('logo')
                    ->label('Logo')
                    ->columnSpan(2)
                    ->image()
                    ->disk('public')
                    ->imageEditor()
                    ->downloadable()
                    ->directory('assets/img')
                    ->required(),
                FileUpload::make('bg_clients')->label('Imagem Feedback')->image()
                ->disk('public')
                ->imageEditor()
                ->imageResizeMode('cover')
                ->imageEditorViewportWidth('1920')
                ->imageEditorViewportHeight('1080')
                ->imageCropAspectRatio('16:9')
                ->imageEditorMode(3)
                ->downloadable()
                ->directory('assets/img/banners'),
                FileUpload::make('bg_footer')->label('Imagem Rodapé')->image()
                ->disk('public')
                ->imageEditor()
                ->imageResizeMode('cover')
                ->imageEditorViewportWidth('1920')
                ->imageEditorViewportHeight('350')
                ->imageCropAspectRatio('16:9')
                ->imageEditorMode(3)
                ->downloadable()
                ->directory('assets/img/banners'),
                TextInput::make('address')->label('Address'),
                TextInput::make('email')->label('Email')->suffix('@martinitattoo.com'),
                TextInput::make('telephone')->label("What's App")->prefix('+55'),
                TextInput::make('twitter')->label('Twitter')->prefix('https://'),
                TextInput::make('facebook')->label('Facebook')->prefix('https://'),
                TextInput::make('instagram')->label('Instagram')->prefix('https://'),
                TextInput::make('youtube')->label('Youtube')->prefix('https://'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')->label('logo')->columnSpan(2),
                TextColumn::make('address')->label('Address'),
                TextColumn::make('email')->label('Email')->suffix('@martinitattoo.com'),
                TextColumn::make('telephone')->label("What's App")->prefix('+55'),
                TextColumn::make('twitter')->label('Twitter')->prefix('https://'),
                TextColumn::make('facebook')->label('Facebook')->prefix('https://'),
                TextColumn::make('instagram')->label('Instagram')->prefix('https://'),
                TextColumn::make('youtube')->label('Youtube')->prefix('https://'),
                ImageColumn::make('bg_clients')->label('Imagem Feedback'),
                ImageColumn::make('bg_footer')->label('Imagem Rodapé')
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
            'index' => Pages\ManageSettings::route('/'),
        ];
    }
}
