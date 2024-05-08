<section id="comic-list">
    <div class="container">
        <div class="current-series text-center">CURRENT SERIES</div>
        <div class="row row-cols-1 row-cols-md-6 g-4 mt-3">
            @foreach ($comics as $index => $comic)
            <div class="col">
                <a href="{{route('comic',['id'=>$index])}}" class="text-decoration-none">
                    <div class="card border-0">

                        <div class="card-top">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>

                        <div class="card-body py-3">
                            <strong class="mx-auto">{{ $comic['series'] }}</strong>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>