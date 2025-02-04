@component('mail::message')
    # Запрос на цену (Новострой)
    Имя: {{$request->name}}
    Телефон: {{$request->phone}}
    Почта: {{$request->email}}
    Проект: {{$request->project}}
    Комментарий: {{$request->comment}}
@endcomponent
