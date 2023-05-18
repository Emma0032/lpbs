@extends('layouts.api')

@section('content')
<div class="container">
  <p class="text-success">Askira Chats</p>
  @foreach ($askirachats as $chat)
    @if (Auth::user()->id !== $chat->user_id)
      <div class="d-flex align-items-start flex-column bd-highlight">
        <p class="fw-bold fs-5">{{ $chat->user->fullname }}</p>
        <p class="small p-1 rounded-3" style="background-color: #f5f6f7;">{{ $chat->message }}</p>
        <p class="small mb-1 rounded-3 text-muted">{{ $chat->created_at->diffForHumans() }}</p>
      </div>
    @else
      <div class="d-flex align-items-end flex-column">
        <p class="fw-bold fs-5">{{ $chat->user->fullname }}</p>
        <p class="small p-1 text-white rounded-3 bg-primary">{{ $chat->message }}</p>
        <p class="small mb-1 rounded-3 text-muted d-flex justify-content-end">{{ $chat->created_at->diffForHumans() }}</p>
      </div>
    @endif
  @endforeach

  <form method="POST" action="{{ route('send.chat') }}" class="text-muted d-flex justify-content-start align-items-center p-1 bg-white" id="sendChat"
   style="bottom: 0; position: fixed; width: 90em;">
    @csrf

    <input type="text" class="form-control form-control-lg" placeholder="Type message" name="message">
    <input type="image" class="form-control form-control-lg" id="image" name="message" hidden>
    {{-- <textarea class="form-control form-control-lg" id="editor" placeholder="Type message" name="message"></textarea> --}}

    <a class="ms-1 text-muted" href="javascript:void()" id="imageLink"><i class="im im-paper-clip" onclick="document.getElementById('image').click()"></i></a>
    <a class="ms-1 text-muted" href="javascript:void()"><i class="im im-smiley-o"></i></a>
    <a class="ms-1 button text-primary" href="#!" onclick="event.preventDefault(); document.getElementById('sendChat').submit();"><i class="im im-paperplane"></i></a>
  </form>
</div>
@endsection

{{-- @section('script')
    <script>
      $(document).ready(function () {
        $('#imageLink').on('click', function () {
          $('#image').click();
        });
      });
    </script>
@endsection --}}
