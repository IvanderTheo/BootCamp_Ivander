import '../styles/Footer.css';

function Footer() {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="footer">
      <div className="footer-container">
        <div className="footer-section">
          <h4>StreamHub</h4>
          <p>Your ultimate streaming destination for movies and TV shows.</p>
        </div>

        <div className="footer-section">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#help">Help Center</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>

        <div className="footer-section">
          <h4>Legal</h4>
          <ul>
            <li><a href="#terms">Terms of Service</a></li>
            <li><a href="#privacy">Privacy Policy</a></li>
            <li><a href="#cookies">Cookie Settings</a></li>
          </ul>
        </div>

        <div className="footer-section">
          <h4>Follow Us</h4>
          <div className="social-links">
            <a href="#facebook" className="social-icon">📘</a>
            <a href="#twitter" className="social-icon">𝕏</a>
            <a href="#instagram" className="social-icon">📷</a>
            <a href="#youtube" className="social-icon">▶️</a>
          </div>
        </div>
      </div>

      <div className="footer-bottom">
        <p>&copy; {currentYear} StreamHub. All rights reserved.</p>
      </div>
    </footer>
  );
}

export default Footer;
