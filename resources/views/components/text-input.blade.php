@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-green-500 focus:ring-green-500 focus:ring-1 focus:outline-none rounded-md shadow-sm']) !!}>