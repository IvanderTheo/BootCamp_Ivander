import { useState } from 'react';
import '../styles/Header.css';

function Header() {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen);
  };

  return (
    <header className="header">
      <div className="header-container">
        <div className="logo">
          <span className="logo-icon">🎬</span>
          <span className="logo-text">StreamHub</span>
        </div>

        <button className="hamburger" onClick={toggleMenu}>
          <span></span>
          <span></span>
          <span></span>
        </button>

        <nav className={`nav ${isMenuOpen ? 'active' : ''}`}>
          <ul className="nav-list">
            <li><a href="#home">Home</a></li>
            <li><a href="#movies">Movies</a></li>
            <li><a href="#series">Series</a></li>
            <li><a href="#trending">Trending</a></li>
            <li><a href="#mylist">My List</a></li>
          </ul>
        </nav>

        <div className="header-actions">
          <input type="text" placeholder="Search..." className="search-input" />
          <div className="user-profile">
            <img src="https://via.placeholder.com/40" alt="Profile" className="profile-img" />
          </div>
        </div>
      </div>
    </header>
  );
}

export default Header;
