<section id="feedback" class="feedback_section">
<div class="feedback-form-container container" x-data="{ showSuccess: {{ $success ? 'true' : 'false' }} }" x-init="if(showSuccess) {
    setTimeout(() => showSuccess = false, 5000);
}">
    <div class="feedback-success" x-show="showSuccess" x-transition>
        <svg viewBox="0 0 24 24">
            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
        </svg>
        <span>{{ session('feedback_success', 'Спасибо за ваше сообщение!') }}</span>
    </div>

    <form wire:submit.prevent="submit" class="feedback-form" x-show="!showSuccess">
        <h3 class="feedback-title">Обратная связь</h3>

        <div class="form-group">
            <input type="text" wire:model="name" placeholder="Ваше имя" required>
            <svg viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
        </div>

        <div class="form-group">
            <input type="email" wire:model="email" placeholder="Ваш email" required>
            <svg viewBox="0 0 24 24">
                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
        </div>

        <div class="form-group">
            <input
                type="tel"
                wire:model="phone"
                x-data="{}"
                x-init="
            IMask($el, {
                mask: '+{7} (000) 000-00-00',
                lazy: false
            });
        "
                placeholder="+7 (___) ___-__-__"
            >
            <svg viewBox="0 0 24 24">
                <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/>
            </svg>
        </div>

        <div class="form-group">
            <textarea wire:model="message" placeholder="Ваше сообщение" required></textarea>
            <svg viewBox="0 0 24 24">
                <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 9h12v2H6V9zm8 5H6v-2h8v2zm4-6H6V6h12v2z"/>
            </svg>
        </div>
        @if ($errors->any())
            <div class="feedback-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        @if( session('feedback_success')
        )
            <div class="feedback-success">
                <svg viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                </svg>
                <span>{{ session('feedback_success', 'Отправлено! Наш менеджер свяжется с вами') }}</span>
            </div>
        @endif
        <button type="submit" class="submit-btn">
            <span>Отправить</span>
            <svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
            </svg>
        </button>
    </form>
</div>
</section>
