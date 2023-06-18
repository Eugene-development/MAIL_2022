@component('mail::message')
    # Заявка с сайта zov.top на консультацию
    Имя: {{$request->name}}
    Должность: {{$request->position}}
    Почта: {{$request->email}}
    Телефон: {{$request->phone}}
    Предложение: {{$request->sentence}}
@endcomponent
