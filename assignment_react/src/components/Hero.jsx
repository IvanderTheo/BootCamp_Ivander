import '../styles/Hero.css';

function Hero() {
  const handleWatchNow = () => {
    alert('Watch now clicked!');
  };

  const handleMoreInfo = () => {
    alert('More info clicked!');
  };

  return (
    <section className="hero">
      <div 
        className="hero-background"
        style={{
          backgroundImage: 'url(https://images.unsplash.com/photo-1535016120754-10d2455f7038?w=1200&h=600)',
        }}
      >
        <div className="hero-overlay"></div>
      </div>

      <div className="hero-content">
        <h1 className="hero-title">Experience Premium Entertainment</h1>
        <p className="hero-description">
          Stream thousands of movies and TV shows from around the world. Watch anytime, anywhere.
        </p>
        <div className="hero-buttons">
          <button className="btn btn-primary" onClick={handleWatchNow}>
            ▶ Watch Now
          </button>
          <button className="btn btn-secondary" onClick={handleMoreInfo}>
            ℹ More Info
          </button>
        </div>
      </div>
    </section>
  );
}

export default Hero;
