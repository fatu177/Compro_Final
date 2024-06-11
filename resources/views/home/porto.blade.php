<div class="section-title">
    <h2>Portfolio</h2>
    <p>My Works</p>
</div>

{{--  <div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app" id="tombol">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
        </ul>
    </div>
</div>  --}}

<div class="row portfolio-container">
    @foreach ($project as $project)
        @php
            $id = $project->id;
            $gambar = $gambar->where('id_project', $project->id);

        @endphp

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src=" {{ asset('images/' . $gambar->first()->image) }} " class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{ $project->name }}</h4>
                    <div class="portfolio-links">
                        <a href=" {{ asset('images/' . $gambar->first()->image) }} " data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="{" data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                            class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
