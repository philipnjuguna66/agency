<?php

namespace App\Filament\Pages;

use App\Services\Auth\ERPService;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class Leads extends Page implements HasTable
{
    use InteractsWithTable;

    protected string $view = 'filament.pages.leads-page';


    public function table(Table $table): Table
    {
        return $table
            ->records(function (int $page, int $recordsPerPage,  ?string $sortColumn,
                                ?string $sortDirection,
                                ?string $search,
                               ?array $filters,ERPService $service): LengthAwarePaginator {
                $response = $service->getLeads(
                    page: $page,
                    perPage: $recordsPerPage
                );
                // Mapping the response to a LengthAwarePaginator
                return new LengthAwarePaginator(
                    items: $response['leads'],
                    total: $response['total'],
                    perPage: $recordsPerPage,
                    currentPage: $page,
                    options: [
                        'path' => request()->url(),
                        'query' => request()->query(),
                    ]
                );
            })
            ->deferLoading(true)
            ->columns([
                TextColumn::make('id')->label('id')
                    ->toggleable()
                    ->toggledHiddenByDefault()
                    ->searchable(),
                TextColumn::make('name')->label('Name')->searchable(),
                TextColumn::make('phone')->label('Phone')->searchable(),
                TextColumn::make('source')->label('Source')->searchable(),
                TextColumn::make('last_feedback.note')->limit(20)->label('Source')->searchable(),
                TextColumn::make('last_feedback.next_follow_date')
                    ->toggleable()
                    ->toggledHiddenByDefault()
                    ->label('Latest Follow up Date')->date()->searchable(),
                TextColumn::make('last_feedback.created_at')
                    ->toggleable()
                    ->toggledHiddenByDefault()
                    ->label('Last Updated')->date()->searchable(),
                TextColumn::make('email')->icon('heroicon-m-envelope'),
                TextColumn::make('status')
                    ->toggleable()
                    ->toggledHiddenByDefault()
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'new' => 'gray',
                        'contacted' => 'warning',
                        'qualified' => 'success',
                        default => 'secondary',
                    }),
            ])
            ->headerActions([
                CreateAction::make("create a new Lead")
                    ->slideOver()
                    ->modalWidth(width: Width::FiveExtraLarge)
                    ->closeModalByClickingAway(false)
                    ->schema(fn(Schema $schema): Schema => $schema->schema([]))
                    ->action(function (CreateAction $action, array $data, array $arguments) {

                    })
            ])
            ->recordActions([
                Action::make('edit')
                    ->slideOver()
                    ->fillForm(fn (array $record): array => $record)
                    ->mountUsing(fn(array $record, Schema $schema) =>  $schema->fill([
                        'name' => $record['name'],
                        'phone' => $record['phone'],
                        'email' => $record['email']
                    ]) )
                    ->modalWidth(width: Width::FiveExtraLarge)
                    ->closeModalByClickingAway(false)
                    ->schema(fn(Schema $schema): Schema => $schema->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('phone')->required(),
                        TextInput::make('email')->email(),
                    ]))
                    ->action(function (Action $action, array $data, array $record, ERPService $service) {

                        try {
                            $service
                                ->http
                                ->withHeaders($service->headers())
                                ->patch("/lead/{$record['id']}", $data);

                        }
                        catch (\Exception $e)
                        {
                            $action
                                ->failureNotificationTitle("Something went wrong")
                                ->failureNotificationBody($e->getMessage())
                                ->sendFailureNotification()
                                ->halt();
                        }
                    })
            ]);
    }
}
