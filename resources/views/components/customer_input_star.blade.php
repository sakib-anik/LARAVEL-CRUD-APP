<div class="form-group">
    <label for="{{$id}}">{{$label}}<span style="color:red">*</span></label>
    <input type="{{$type}}" name="{{$name}}" id="{{$id}}" class="form-control border" placeholder="" aria-describedby="helpId" value="{{old($name)}}">
    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
</div>