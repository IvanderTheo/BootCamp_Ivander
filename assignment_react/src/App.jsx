import { useState } from 'react'
import Header from './components/Header'
import Hero from './components/Hero'
import ContentRow from './components/ContentRow'
import Footer from './components/Footer'
import './App.css'

// Sample data for different content categories
const trendingMovies = [
  {
    title: 'The Quantum Realm',
    image: 'https://images.unsplash.com/photo-1554224311-beee415c15cb?w=300&h=400',
    rating: 8.9,
    year: 2024,
    category: 'Sci-Fi'
  },
  {
    title: 'Cosmic Adventure',
    image: 'https://images.unsplash.com/photo-1516573895617-4ec443d70485?w=300&h=400',
    rating: 8.5,
    year: 2024,
    category: 'Action'
  },
  {
    title: 'Echoes of Tomorrow',
    image: 'https://images.unsplash.com/photo-1485846234645-a62644f84728?w=300&h=400',
    rating: 8.2,
    year: 2023,
    category: 'Drama'
  },
  {
    title: 'Digital Revolution',
    image: 'https://images.unsplash.com/photo-1440404653325-ab127d49abc1?w=300&h=400',
    rating: 8.7,
    year: 2024,
    category: 'Thriller'
  },
  {
    title: 'Midnight Chronicles',
    image: 'https://images.unsplash.com/photo-1518676590629-3dcbd9c5a5c9?w=300&h=400',
    rating: 9.1,
    year: 2023,
    category: 'Mystery'
  },
  {
    title: 'Parallel Lives',
    image: 'https://images.unsplash.com/photo-1489599849228-ed4dc6900cd4?w=300&h=400',
    rating: 8.4,
    year: 2024,
    category: 'Romance'
  }
]

const popularSeries = [
  {
    title: 'The Crown Chronicles',
    image: 'https://images.unsplash.com/photo-1522869635100-9f4c5e86aa37?w=300&h=400',
    rating: 8.8,
    year: 2023,
    category: 'Drama'
  },
  {
    title: 'Detective Minds',
    image: 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=300&h=400',
    rating: 9.0,
    year: 2024,
    category: 'Crime'
  },
  {
    title: 'Jungle Expedition',
    image: 'https://images.unsplash.com/photo-1489599849228-ed4dc6900cd4?w=300&h=400',
    rating: 8.6,
    year: 2023,
    category: 'Adventure'
  },
  {
    title: 'City Lights',
    image: 'https://images.unsplash.com/photo-1556910103-2b02b30015b2?w=300&h=400',
    rating: 8.3,
    year: 2024,
    category: 'Comedy'
  },
  {
    title: 'Lost Dimensions',
    image: 'https://images.unsplash.com/photo-1574375927938-d5a98e8ffe85?w=300&h=400',
    rating: 8.9,
    year: 2023,
    category: 'Sci-Fi'
  },
  {
    title: 'Heartbeat Stories',
    image: 'https://images.unsplash.com/photo-1533613220915-121e63e19b30?w=300&h=400',
    rating: 8.7,
    year: 2024,
    category: 'Drama'
  }
]

const newReleases = [
  {
    title: 'Future Dawn',
    image: 'https://images.unsplash.com/photo-1520763185298-1b434c919abe?w=300&h=400',
    rating: 8.5,
    year: 2024,
    category: 'Sci-Fi'
  },
  {
    title: 'Urban Legend',
    image: 'https://images.unsplash.com/photo-1498038432885-66e89b20caf6?w=300&h=400',
    rating: 8.1,
    year: 2024,
    category: 'Horror'
  },
  {
    title: 'Golden Hours',
    image: 'https://images.unsplash.com/photo-1505686994434-e3cc5abf1330?w=300&h=400',
    rating: 8.8,
    year: 2024,
    category: 'Romance'
  },
  {
    title: 'Neon Nights',
    image: 'https://images.unsplash.com/photo-1498940336202-9bbf1f6c4e8a?w=300&h=400',
    rating: 8.4,
    year: 2024,
    category: 'Thriller'
  },
  {
    title: 'Shadow Rising',
    image: 'https://images.unsplash.com/photo-1512070679279-338ba220b404?w=300&h=400',
    rating: 8.6,
    year: 2024,
    category: 'Action'
  },
  {
    title: 'Whispered Truth',
    image: 'https://images.unsplash.com/photo-1485846234645-a62644f84728?w=300&h=400',
    rating: 8.3,
    year: 2024,
    category: 'Drama'
  }
]

function App() {
  const [selectedItem, setSelectedItem] = useState(null)

  const handleItemClick = (item) => {
    setSelectedItem(item)
    console.log('Selected item:', item)
  }

  return (
    <div className="app">
      <Header />
      <Hero />
      
      <main className="main-content">
        <ContentRow 
          title="🔥 Trending Now" 
          items={trendingMovies}
          onItemClick={handleItemClick}
        />
        
        <ContentRow 
          title="📺 Popular Series" 
          items={popularSeries}
          onItemClick={handleItemClick}
        />
        
        <ContentRow 
          title="✨ New Releases" 
          items={newReleases}
          onItemClick={handleItemClick}
        />

        {selectedItem && (
          <section className="selected-info">
            <div className="info-card">
              <h3>Selected: {selectedItem.title}</h3>
              <p>Rating: ⭐ {selectedItem.rating}</p>
              <p>Year: {selectedItem.year}</p>
              <button onClick={() => setSelectedItem(null)} className="close-btn">
                ✕ Close
              </button>
            </div>
          </section>
        )}
      </main>

      <Footer />
    </div>
  )
}

export default App
