@props(['name', 'type' => 'text', 'value' => ''])
<x-form.input-wrapper>
  <x-form.label :name="$name" />
  <input type="{{$type}}" id="{{$name}}" name="{{$name}}" value="{{old($name, $value)}}"
    class="{{$type != 'file' ? 'p-3 focus:ring-0 focus:border-transparent' : 'p-0 rounded-lg focus:ring-0 border-darkSteelBlue focus:border-0 focus:outline-darkSteelBlue'}}"
    required>
  <x-error name="{{$name}}" />
</x-form.input-wrapper>