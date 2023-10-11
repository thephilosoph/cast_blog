@props(['name','type'=>'text'])
<div class="mb-6">
    <x-form.label name="{{$name}}"/>
    <input type="{{$type}}" class="border
     border-gray-400 p-2 w-full rounded-md
      focus:border-gray-400 focus:outline-none" 
      name="{{$name}}" id="{{$name}}" required value="{{old($name)}}">

      <x-form.error  name="{{$name}}"/>
  
</div>