<div class="card" style="{{ isset($cardStyle) ? $cardStyle : null }}">
    {{ isset($cardImage) ? '<img class="card-img-top" src="' . $cardImage .'" alt="' . isset($cardImageAlt) ? $cardImageAlt : null .'">' : null }}
    <div class="card-body">
        <h5 class="card-title">{{ $cardTitle }}</h5>
        {{ $cardContent }}
        {{ isset($cardText) ? '<p class="card-text">' . $cardText . '</p>' : null }}
    </div>
</div>