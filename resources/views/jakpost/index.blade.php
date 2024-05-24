<!DOCTYPE html>
<html>
<head>
    <title>Jakpost Business Category</title>
</head>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    padding: 20px;
    justify-items: center;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.card img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 10px;
}

.card a {
    color: #333;
    text-decoration: none;
    font-weight: bold;
}

.card a:hover {
    color: #555;
}

.category {
    font-style: italic;
}

.published-at {
    font-size: 12px;
}

.premium-badge {
    color: #fff;
    background-color: #ff9900;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 12px;
}

</style>
<body>
    <h1 style="text-align: center;">Jakpost Business Category</h1>
    <div class="container">
        @foreach($posts as $post)
            <div class="card">
                <a href="{{ $post['link'] }}"><img src="{{ $post['image'] }}" alt="{{ $post['title'] }}"></a>
                <h2><a href="{{ $post['link'] }}">{{ $post['title'] }}</a></h2>
                <p>{{ $post['headline'] }}</p>
                <p class="category">Category: {{ $post['category'] }}</p>
                @if(isset($post['published_at']))
                    <p class="published-at">Published at: {{ $post['published_at'] }}</p>
                @endif
                @if(isset($post['premium_badge']) && $post['premium_badge'] == 'premium')
                    <span class="premium-badge">Premium Post</span>
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>
