@component('mail::message')
    # Получена заявка на консультацию
    Имя : {{$request->name}}
    Телефон клиента : {{$request->phone}}
    Адрес объекта : {{$request->address}}
    Удобное время: {{$request->time}}
@endcomponent
