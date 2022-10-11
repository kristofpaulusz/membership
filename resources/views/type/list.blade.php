@foreach ($types as $type)
<form action="/api/types/{{$type->type_id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <input type="submit" value="{{$type->description}}">
    </div>
</form>
@endforeach