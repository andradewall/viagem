<div class="space-y-8">
    @foreach ($tags as $tag)
        <livewire:tag.details :$tag :key="$tag['id']" />
    @endforeach
</div>
