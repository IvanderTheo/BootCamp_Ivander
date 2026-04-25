import '../styles/Card.css';

function Card({ title, image, rating, year, category, onCardClick }) {
  const handleClick = () => {
    if (onCardClick) {
      onCardClick({ title, rating, year });
    }
  };

  return (
    <div className="card" onClick={handleClick}>
      <div className="card-image-container">
        <img 
          src={image} 
          alt={title} 
          className="card-image"
        />
        <div className="card-overlay">
          <button className="card-play-btn">▶ Play</button>
        </div>
      </div>

      <div className="card-content">
        <h3 className="card-title">{title}</h3>
        <div className="card-meta">
          <span className="card-year">{year}</span>
          <span className="card-rating">⭐ {rating}</span>
        </div>
        <p className="card-category">{category}</p>
      </div>
    </div>
  );
}

export default Card;
