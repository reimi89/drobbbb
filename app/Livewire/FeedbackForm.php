<?php

namespace App\Livewire;

use App\Models\Feedback;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class FeedbackForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $success = false;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'nullable|starts_with:+7',
        'message' => 'required|min:10',
    ];

    protected $messages = [
        'name.required' => 'Поле имя обязательно',
        'name.min' => 'Минимум 3 символа',
        'email.required' => 'Поле email обязательно',
        'email.email' => 'Введите корректный email',
        'phone.regex' => 'Введите корректный номер телефона',
        'message.required' => 'Поле сообщение обязательно',
        'message.min' => 'В сообщении минимум 10 символов',
    ];

    public function submit()
    {
        $this->validate();

        Feedback::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        $this->success = true;
        $this->reset(['name', 'email', 'phone', 'message']);

        Session::flash('feedback_success', 'Мы свяжемся с вами в ближайшее время.');
    }


    public function render()
    {
        return view('livewire.feedback-form');
    }
}
