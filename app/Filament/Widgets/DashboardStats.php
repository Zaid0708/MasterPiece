<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Course;
use App\Models\User;
use App\Models\Quiz;

class DashboardStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            // Total Courses
            Card::make('Total Courses', Course::count())
                ->description('All active courses')
                ->descriptionIcon('heroicon-s-academic-cap')
                ->color('primary'),
            
            // Total Users
            Card::make('Total Users', User::count())
                ->description('Registered users')
                ->descriptionIcon('heroicon-s-user')
                ->color('success'),
            
            // Total Revenue
            Card::make('Total Revenue', '$' . number_format(Course::whereHas('enrollments')->sum('price'), 2))
            ->description('Revenue from enrolled courses')
            ->descriptionIcon('heroicon-s-currency-dollar')
            ->color('warning'),
            // Completed Quizzes
            
        ];
    }
}
