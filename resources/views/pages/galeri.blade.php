@extends('layouts/app')
@section('content')
    <header class="masthead bg-4">
        <div class="container">
        </div>
    </header>

    <header class="masthead bg-2" id="profil">
        <div class="container" align="center">
                </br>
                </br>
                </br>
                </br>
                </br>
                <h1 class="font-weight-bold">Galeri</h1>
                UPTD Puskesmas Grobogan

            <div class="frame m-3">
                <img class="mx-auto d-block" src="/images/Frame6.png" width="200px">
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row mt-5">
                @foreach ($galeri as $item)
                    <div class="col-sm-4">
                        <div class="card" style="width: 23rem;">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="embed-responsive-item">
                                    <img class="card-img-top" id="myImg"
                                        src="{{ asset('storage/galeri/' . $item->image) }}" alt="Card image cap">
                                </div>
                            </div>

                            <div class="card-body">
                                <p class="card-text">{{ $item->keterangan }}</p>
                            </div>
                        </div>
                        </br>
                    </div>
                @endforeach

            </div>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
        </div>
    </section>


    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
@endsection
