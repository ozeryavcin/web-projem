document.addEventListener("DOMContentLoaded", function() {
    const movieContent = document.getElementById('movie-api-content');
    const loader = document.getElementById('api-loader'); // Spinner'ı yakalıyoruz
    const IMG_PATH = 'https://image.tmdb.org/t/p/w500';

    async function getMovies() {
        try {
            const res = await fetch('get_movies.php'); 
            
            if (!res.ok) throw new Error('PHP dosyasına ulaşılamadı.');

            const data = await res.json();
            
            if (data.results && data.results.length > 0) {
                // Veri geldiğinde spinner'ı gizlemek için
                if(loader) loader.style.display = 'none';
                showMovies(data.results.slice(0, 4));
            }
        } catch (error) {
            console.error('Hata:', error);
            if(loader) loader.style.display = 'none';
            movieContent.innerHTML = '<p class="text-danger text-center w-100">Film verileri şu an yüklenemiyor. (Hata: ' + error.message + ')</p>';
        }
    }

    function showMovies(movies) {
        movieContent.innerHTML = '';
        movies.forEach(movie => {
            const { title, poster_path, vote_average, release_date } = movie;
            const movieEl = document.createElement('div');
            movieEl.className = 'col-md-6 col-lg-3 mb-4';
            movieEl.innerHTML = `
                <div class="card h-100 media-card shadow-sm border-0 overflow-hidden">
                    <img src="${IMG_PATH + poster_path}" class="card-img-top" alt="${title}" style="height: 350px; object-fit: cover;">
                    <div class="card-body p-3 bg-white text-dark">
                        <h6 class="fw-bold text-truncate mb-2">${title}</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-warning text-dark"><i class="bi bi-star-fill me-1"></i>${vote_average.toFixed(1)}</span>
                            <small class="text-muted fw-bold">${release_date ? release_date.split('-')[0] : '-'}</small>
                        </div>
                    </div>
                </div>
            `;
            movieContent.appendChild(movieEl);
        });
    }

    getMovies();
});