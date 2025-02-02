@component('mail::message')
    # Установка с сайта Новострой
    Имя: {{$request->name}}
    {{-- Телефон: {{$request->phone}}
    Почта: {{$request->email}}
    Комментарий: {{$request->comment}}

    ## Заявка на замер
    Адрес: {{$request->address}}

    ## Запись в салон
    Метро: {{$request->metro}}

    ## Консультация дизайнера
    Проект имеется? - {{$request->project}}

    ## Просчёт проекта
    Проект - {{$request->selectedProject}} --}}

@endcomponent
