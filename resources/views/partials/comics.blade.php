<section id="comic-list">
    <div class="container">
        <h2 class="text-center">COMIC LIST</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach($comics as $comic)
            <div class="col">
                <div class="card">


                    <img class="card-img-top" src="{{$comic['thumb']}}" alt="">


                    <div class="card-body py-3 bg-dark text-light">
                        <h4 class="mx-auto">{{$comic['title']}}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>