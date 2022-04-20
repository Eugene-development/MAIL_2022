@component('mail::message')
    # Получена заявка на консультацию
    Имя : {{$request->square}}
    Телефон клиента : {{$request->phone}}
    Адрес объекта : {{$request->type}}
    Удобное время: {{$request->destroy}}
@endcomponent
