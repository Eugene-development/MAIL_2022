@component('mail::message')
    # Замер с сайта Новострой
    Имя: {{$request->name}}
    Телефон: {{$request->phone}}
    Почта: {{$request->email}}
    Адрес: {{$request->address}}
    Проект имеется? - {{$request->project}}
    Комментарий: {{$request->comment}}
@endcomponent
