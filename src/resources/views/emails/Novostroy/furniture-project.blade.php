@component('mail::message')
    # Проект Мебели с сайта Новострой
    Имя: {{$request->name}}
    Телефон: {{$request->phone}}
    Почта: {{$request->email}}
    Проект имеется? - {{$request->project}}
    Комментарий: {{$request->comment}}
@endcomponent
