@component('mail::message')
    # Заявка с сайта zov.top на консультацию
    Имя: {{$request->name}}
    Телефон: {{$request->phone}}
    Адрес: {{$request->address}}
    Почта: {{$request->email}}
    Комментарий: {{$request->comment}}
    Проект имеется? - {{$request->project}}
@endcomponent
