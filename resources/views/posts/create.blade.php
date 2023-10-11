<x-layout>
<x-setting heading="Publish New Post !">

    <form action="/admin/posts" method="post" enctype="multipart/form-data">

        @csrf
        
        <x-form.input name="title"/>
        <x-form.input name="slug"/>
        <x-form.input name="thumbnail" type="file"/>
        <x-form.textarea name="excerpt" />
        <x-form.textarea name="body" /> 
        
        <div class="mb-6">
            <x-form.label name="Category"/>
        
            <select class="rounded-md focus:outline-none focus:ring text-center" name="category_id" id="category_id">
         
                @foreach (\App\Models\Category::all() as $category)
                    <option value="{{$category->id}}" {{old("category_id")==$category->id ? "selected" : ""}}>{{$category->name}}</option>
                @endforeach
            </select>
            <x-form.error  name="category_id"/>
        
        </div>
        
        
        
        <x-submit-button>Publish</x-submit-button>
        </form>
</x-setting>

</x-layout>