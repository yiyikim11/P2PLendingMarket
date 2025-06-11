@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'p-2 border border-gray-200 focus:border-green-500 focus:ring-green-500 focus:ring-1 focus:outline-none rounded-md shadow-sm']) !!}>