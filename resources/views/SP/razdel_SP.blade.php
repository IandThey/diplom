<div class="col">
    <div itemscope="" itemtype="https://schema.org/Product" class="card h-100 text-center shadow">
        <h2>
            <span itemprop="name">
                {{ $name_razdel }}
            </span>
        </h2>
            <a href="{{ $a_razdel }}">
                <img itemprop="image" src="{{ $img_razdel }}" class="card-img-top" loading="lazy">
            </a>
        <div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="card-body">
            <p>
                {{ $text_razdel }}
            </p>
        </div>
    </div>
</div>