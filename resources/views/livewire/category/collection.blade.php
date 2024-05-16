<div class="space-y-8">
    @foreach ($categories as $category)
        <livewire:category.details :$category :key="$category['id']" />
    @endforeach
</div>
