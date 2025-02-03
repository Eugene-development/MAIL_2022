@component('mail::message')
    # Заявка на монтаж (Новострой)
    Имя: {{$request->name}}
    Телефон: {{$request->phone}}
    Почта: {{$request->email}}
    Адрес: {{$request->address}}
    Комментарий: {{$request->comment}}
@endcomponent
