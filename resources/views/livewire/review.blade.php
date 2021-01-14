<div>
    @if(session()->has('message'))
      <div class="alert alert-success">
          {{session('message')}}
      </div>
    @endif
    <form wire:submit.prevent="store" class="review-form">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Konu</label>
          <input wire:model="subject" type="text" class="form-control"  placeholder="Konu">
        @error('subject') <span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mesaj</label>
          <textarea wire:model="review" class="form-control" placeholder="Mesajınız" > </textarea>
          @error('review') <span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group form-check">
          <input wire:model="like" type="number" id="exampleCheck1"   class="form-control" >
          @error('like') <span class="text-danger">{{$message}}</span>@enderror
        </div>
  
        <button type="submit" class="btn btn-primary">Submit</button>

        <span>yorum yapmak için lütfen <a href="{{route('login')}}">kayıt</a> olunuz</span>
      
      </form>
</div>
