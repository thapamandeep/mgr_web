@extends('admin.layout.admin-tamplate')

@section('content')

<div class="container" style="padding: 20px;">

    <h2>Add Hero Section</h2>

    {{-- ✅ Success Message --}}
    @if(session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- ✅ Validation Errors --}}
    @if($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- ✅ Hero Form --}}
    <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div style="margin-bottom: 15px;">
            <label>Hero Image</label><br>
            <input type="file" name="image" >
        </div>

        <div style="margin-bottom: 15px;">
            <label>Title</label><br>
            <input type="text" name="title" placeholder="Enter title" style="width:100%;" value="{{old('title',$hero->title)}}" >
        </div>

        <div style="margin-bottom: 15px;">
            <label>Subtitle</label><br>
            <textarea name="subtitle" placeholder="Enter subtitle" style="width:100%; height:100px;">{{old('subtitle',$hero->subtitle)}}</textarea>
        </div>

      


        <button type="submit" style="padding: 10px 20px; background:black; color:white; border:none;">
            Save Hero
        </button>

    </form>

</div>

@endsection