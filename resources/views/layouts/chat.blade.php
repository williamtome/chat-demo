@extends('layouts.app')

@section('content')

    <div id="app">
        <div class="container">
            <h1>Chat</h1>
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:messagesent="addMessage"></chat-composer>
        </div>
    </div>

@endsection