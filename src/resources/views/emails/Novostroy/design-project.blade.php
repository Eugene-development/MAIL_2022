@component('mail::message')
    # Дизайн Интерьера с сайта Новострой
    Имя: {{$request->name}}
    Телефон: {{$request->phone}}
    Почта: {{$request->email}}
    Комментарий: {{$request->comment}}
@endcomponent
