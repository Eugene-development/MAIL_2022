@component('mail::message')
    # Запрос на консультацию (Новострой)
    Имя: {{$request->name}}
    Телефон: {{$request->phone}}
    Почта: {{$request->email}}
    Комментарий: {{$request->comment}}
@endcomponent
