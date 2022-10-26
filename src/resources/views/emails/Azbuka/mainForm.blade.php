@component('mail::message')
    # Получен запрос на ЗАМЕР
    Имя: {{$request->nameForm}}
    Телефон: {{$request->phoneForm}}
    Адрес: {{$request->addressForm}}
    Время : {{$request->timeForm}}
    Комментарий : {{$request->commentForm}}
@endcomponent
