
<div class="container">
    <h1>Review Details</h1>
    <p><strong>Product:</strong> {{ $review->product->name }}</p>
    <p><strong>User:</strong> {{ $review->user->name }}</p>
    <p><strong>Rating:</strong> {{ $review->rating }}</p>
    <p><strong>Comment:</strong> {{ $review->comment }}</p>
    <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Back</a>
</div>

