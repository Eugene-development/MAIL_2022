@component('mail::message')
    # Получено коммерческое предложение
    Имя сотрудника : {{$request->name}}
    Должность : {{$request->position}}
    Почта: {{$request->email}}
    Телефон: {{$request->phone}}
    Предложение: {{$request->comment}}
@endcomponent
