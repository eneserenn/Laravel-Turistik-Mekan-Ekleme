<div>
    <input wire:model="search" type="text" class="form-control mr-sm-2" list="mylist" placeholder="Mekan Ara" name="search">
    @if(!empty($query))
    <datalist id="mylist">
        @foreach ($datalist as $rs)
        <option value="{{$rs->title}}">{{$rs->category->title}}</option>
        @endforeach
    </datalist>
    @endif
</div>
