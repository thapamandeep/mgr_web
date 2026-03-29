@extends('layout.app')

@section('content')

<div class="container" style="margin-top:40px;">

```
<h2 style="text-align:center; margin-bottom:30px;">Our Members</h2>

<div style="display:flex; flex-wrap:wrap; gap:25px; justify-content:center;">

    @foreach($users as $user)

    <div style="width:220px; background:#fff; padding:20px; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.1); text-align:center;">

        <img src="{{ asset('storage/profile/'.$user->image) }}" 
             style="width:90px; height:90px; border-radius:50%; object-fit:cover; margin-bottom:10px;">

        <h4 style="margin:5px 0;">{{ $user->name }}</h4>

        <p style="font-size:14px; color:#666;">{{ $user->email }}</p>

        <p style="font-size:14px; color:#666;">{{ $user->phone }}</p>
        <p style="font-size:14px; color:#666;">{{ $user->role->name }}</p>

    </div>

    @endforeach

</div>
```

</div>

@endsection
