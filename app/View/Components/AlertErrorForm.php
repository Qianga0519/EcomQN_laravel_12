<?php



namespace App\View\Components;

use Illuminate\View\Component;

class AlertErrorForm extends Component
{
    public function render()
    {
        return view('notifications.alert-error-form');
    }
}