@props(['name' , 'value' => ''])
<x-form.input-wrapper>
  <x-form.label :name="$name" />
  <textarea name="{{$name}}" id="{{$name}}" rows="10"
    class="editor p-3 rounded-lg focus:ring-0 border-darkSteelBlue focus:border-0 focus:outline-darkSteelBlue">
      {{old($name, $value)}}
    </textarea>
  <x-error name="{{$name}}" />
</x-form.input-wrapper>