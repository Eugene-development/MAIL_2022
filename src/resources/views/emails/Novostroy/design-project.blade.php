@component('mail::message')
    # Запрос на Дизайн Интерьера (Новострой)
    Имя: {{$request->name}}
    Телефон: {{$request->phone}}
    Адрес: {{$request->address}}
    Почта: {{$request->email}}
    Комментарий: {{$request->comment}}
@endcomponent
