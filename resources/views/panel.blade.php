<article class="message is-success">
    <div class="message-header">
        <p>{{ $heading ?? 'Laravist' }}</p>
        <button class="delete"></button>
    </div>
    <div class="message-body">
        {{ $slot }}
    </div>
</article>