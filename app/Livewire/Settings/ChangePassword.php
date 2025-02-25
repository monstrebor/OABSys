<?php

namespace App\Livewire\Settings;

use Illuminate\Support\Facades\{Auth,Hash};
use Livewire\Attributes\Rule;
use Livewire\Component;

class ChangePassword extends Component
{
    #[Rule('required')]
    public $old_password;

    #[Rule('required|min:5')]
    public $new_password;

    public function change_password()
    {
        $this->form->validate();
        $user = Auth::user();

        if (Hash::check($this->form->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($this->form->new_password),
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
