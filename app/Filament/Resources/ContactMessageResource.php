<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Filament\Resources\ContactMessageResource\Pages\CreateContactMessage;
use App\Filament\Resources\ContactMessageResource\Pages\EditContactMessage;
use App\Filament\Resources\ContactMessageResource\Pages\ListContactMessages;
use App\Filament\Resources\ContactMessageResource\RelationManagers;
use App\Helpers\SmsHelper;
use App\Models\ContactMessage;
use App\Models\ContactReply;
use App\Notifications\ContactMessageNotification;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

 public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('name')->searchable(),
            TextColumn::make('email'),
            TextColumn::make('subject'),
            TextColumn::make('message')->limit(50),
            TextColumn::make('created_at')->dateTime(),
        ])
        ->actions([
            Action::make('reply')
                ->label('Reply & Notify')
                ->icon('heroicon-o-chat-bubble-left-ellipsis')
                ->form([
                    Textarea::make('reply_message')
                        ->label('Reply Message')
                        ->required()
                        ->rows(5),
                ])
                ->action(function (array $data, ContactMessage $record) {
                    // Email reply
                    \Illuminate\Support\Facades\Notification::route('mail', $record->email)
                        ->notify(new ContactMessageNotification((object)[
                            'name' => $record->name,
                            'email' => $record->email,
                            'subject' => $record->subject,
                            'message' => $data['reply_message'],
                        ]));

                    // SMS reply
                    SmsHelper::send($record->phone ?? '233240161959', $data['reply_message']); // default if phone null

  // Save to DB
    ContactReply::create([
        'contact_message_id' => $record->id,
        'message' => $data['reply_message'],
        'sent_via' => 'both',
    ]);

                    FilamentNotification::make()
                        ->title('Reply sent via Email & SMS')
                        ->success()
                        ->send();
                }),
        ]);
}

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactMessages::route('/'),
       //     'create' => Pages\CreateContactMessage::route('/create'),
          //  'edit' => Pages\EditContactMessage::route('/{record}/edit'),
        ];
    }
}
