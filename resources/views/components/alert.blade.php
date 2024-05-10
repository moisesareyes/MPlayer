@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $class='text-blue-800  bg-blue-50';
            break;
        case 'succes':
            $class='text-green-800  bg-green-50';
            break;
        case 'dark':
            $class='text-gray-800  bg-gray-50';
            break;
        case 'warning':
            $class='text-yellow-800  bg-yellow-50';
            break;
        default:
            $class='text-blue-800  bg-blue-50';
            break;
    }
@endphp

<div {{$attributes -> merge(['class'=>"p-4 text-sm rounded-lg".$class])}} role="alert">
    <span class="font-medium">{{$head ?? "Dame valor"}}</span> {{$slot}}
</div>