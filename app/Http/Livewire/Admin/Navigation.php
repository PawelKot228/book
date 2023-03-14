<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Navigation extends Component
{
    public array $navigation = [];

    public function mount()
    {
        $this->navigation = config('admin.navigation');
    }

    public function render()
    {
        return view('livewire.admin.navigation', ['navigation' => $this->parseNavigation()]);
    }

    private function parseNavigation(): array
    {
        $navigation = [];

        foreach ($this->navigation as $label => $details) {
            $navigation[$label] = $details;

            $route = $details['route'] ?? null;
            $url = '#';

            if ($route && Route::has($route)) {
                $url = \route($route);
            }

            $navigation[$label]['url'] = $url;
        }

        return $navigation;
    }
}
