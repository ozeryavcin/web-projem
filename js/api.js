document.addEventListener("DOMContentLoaded", function() {
    const apiKey = '50c82998638b688373307613589b2756'; 
    const apiUrl = `https://api.themoviedb.org/3/movie/popular?api_key=${apiKey}&language=tr-TR&page=1`;

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) throw new Error('Film verisi alınamadı.');
            return response.json();
        })
        .then(data => {
            const movies = data.results.slice(0, 4);
            let html = '';

            movies.forEach(movie => {
                html += `
                    <div class="col-md-6 col-lg-3">
                        <div class="media-card shadow-sm h-100 bg-white border-0">
                            <div class="media-img-wrapper" style="height: 350px; overflow: hidden; border-radius: 15px 15px 0 0;">
                                <img src="https://image.tmdb.org/t/p/w500${movie.poster_path}" 
                                     class="w-100 h-100 object-fit-cover" alt="${movie.title}" style="transition: 0.5s;">
                            </div>
                            <div class="p-3 text-center">
                                <h6 class="fw-bold mb-1 text-truncate">${movie.title}</h6>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <small class="text-muted">${movie.release_date.split('-')[0]}</small>
                                    <span class="badge bg-warning text-dark"><i class="bi bi-star-fill me-1"></i>${movie.vote_average.toFixed(1)}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });

            document.getElementById('movie-api-content').innerHTML = html;
            document.getElementById('api-loader').classList.add('d-none');
        })
        .catch(error => {
            console.error('API Hatası:', error);
            document.getElementById('api-loader').innerHTML = 
                '<div class="alert alert-danger mx-auto" style="max-width: 500px;">Popüler film verileri şu an yüklenemiyor.</div>';
        });
});