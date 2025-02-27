<?php

namespace App\Livewire\Settings;

use Illuminate\Support\Facades\{Auth,Hash};
use Livewire\Attributes\Rule;
use Livewire\Component;

class ChangePassword extends Component
{
    public $old_password, $new_password;

    protected $rules = [
        'old_password' => 'required',
        'new_password' => 'required|min:8',
    ];

    public function change_password()
    {
        // Validate input
        $this->validate(); // ✅ Correct way to validate

        $user = Auth::user();

        if (Hash::check($this->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($this->new_password),
            ]);
            session()->flash('success', 'Your password has been updated successfully.');
            return;
        }

        session()->flash('error', 'The old password did not match. Please try again.');
    }

    public function render()
    {
        return view('livewire.settings.change-password');
    }
}
