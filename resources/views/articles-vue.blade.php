@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <v-article article-id="{{ $articleId }}"></v-article>
    </div>
</div>
@endsection
