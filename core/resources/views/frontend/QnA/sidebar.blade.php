<aside class="sidebar">
    <div class="list-group">
        <span class="list-group-item list-group-item-action list-group-item-success active">List Kategori</span>
        @foreach($kategori as $k)
            <a href="{{ route('QA.kategori', $k->slug) }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">{{ $k->nama }}</a>
        @endforeach
    </div>
</aside><!-- /.sidebar -->
