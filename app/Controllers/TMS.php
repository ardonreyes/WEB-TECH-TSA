<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TMS extends BaseController
{
    public function welcomePage(): string
    {
        $today = date('Y-m-d');
        $tasks = (new TaskModel())
            ->where('task_date', $today)
            ->orderBy('task_date', 'ASC')
            ->orderBy('id', 'ASC')
            ->findAll();

        return view('page/welcome.page.php', [
            'title' => 'Welcome',
            'description' => 'See the tasks scheduled for today.',
            'activePage' => 'welcome',
            'today' => $today,
            'tasks' => $tasks,
        ]);
    }

    public function tasksPage(): string
    {
        $tasks = (new TaskModel())
            ->orderBy('task_date', 'ASC')
            ->orderBy('id', 'ASC')
            ->findAll();

        return view('page/tasks.page.php', [
            'title' => 'Task List',
            'description' => 'View every task in date order.',
            'activePage' => 'tasks',
            'tasks' => $tasks,
        ]);
    }

    public function profilePage(): string
    {
        return view('page/profile.page.php', [
            'title' => 'Profile',
            'description' => 'View the system user profile.',
            'activePage' => 'profile',
            'user' => (new UserModel())->orderBy('id', 'ASC')->first(),
        ]);
    }

    public function aboutPage(): string
    {
        return view('page/about.page.php', [
            'title' => 'About',
            'description' => 'Learn more about the system.',
            'activePage' => 'about',
        ]);
    }
}
