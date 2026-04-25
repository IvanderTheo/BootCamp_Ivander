# StreamHub - React Streaming Platform

## Project Overview

StreamHub adalah aplikasi streaming platform yang dibangun menggunakan React dengan Vite. Aplikasi ini menampilkan berbagai fitur modern termasuk komponen yang dapat digunakan kembali (reusable components), styling responsif, dan manajemen state yang efisien.

## ✨ Fitur Utama

### 1. **Komponen-komponen React**
- **Header**: Navigasi dengan logo, menu responsif, search bar, dan profil pengguna
- **Hero**: Section promosi dengan overlay, judul menarik, deskripsi, dan call-to-action buttons
- **Card**: Komponen reusable untuk menampilkan konten dengan gambar, rating, tahun, dan kategori
- **ContentRow**: Section untuk menampilkan koleksi kartu dalam layout horizontal yang scrollable
- **Footer**: Footer lengkap dengan informasi company, quick links, legal information, dan social media

### 2. **Penggunaan Props**
Seluruh komponen menggunakan props untuk melewatkan data:
- `Card` menerima props: `title`, `image`, `rating`, `year`, `category`, `onCardClick`
- `ContentRow` menerima props: `title`, `items`, `onItemClick`
- Props digunakan untuk membuat komponen yang fleksibel dan dapat digunakan di berbagai tempat

### 3. **Styling Modern**
- **Dark Theme**: Tema gelap yang elegan dengan aksen ungu/purple
- **Gradient**: Penggunaan gradient untuk logo, judul, dan button
- **Responsive Design**: Media queries untuk tablet dan mobile
- **Hover Effects**: Efek interaktif pada card dan button
- **Custom CSS**: Setiap komponen memiliki file CSS terpisah untuk organisasi yang lebih baik

### 4. **State Management**
- Menggunakan React `useState` untuk mengelola selected item
- State diperbarui ketika pengguna mengklik card
- Menampilkan informasi item yang dipilih dengan button untuk menutupnya

## 📁 Struktur Proyek

```
src/
├── components/
│   ├── Header.jsx          # Komponen header dengan navigasi
│   ├── Hero.jsx            # Komponen hero section
│   ├── Card.jsx            # Komponen card reusable
│   ├── ContentRow.jsx      # Komponen untuk row konten
│   └── Footer.jsx          # Komponen footer
├── styles/
│   ├── Header.css          # Styling header
│   ├── Hero.css            # Styling hero
│   ├── Card.css            # Styling card
│   ├── ContentRow.css      # Styling content row
│   └── Footer.css          # Styling footer
├── App.jsx                 # Komponen utama aplikasi
├── App.css                 # Styling aplikasi
├── index.css               # Global styling
├── main.jsx                # Entry point
└── index.html              # HTML template
```

## 🎨 Desain dan Styling

### Color Scheme
- **Background**: #0f0f17 (Dark Navy)
- **Primary Accent**: #c084fc (Purple)
- **Secondary Color**: #fbbf24 (Gold)
- **Text**: #f3f4f6 (Light Gray)
- **Border**: rgba(192, 132, 252, 0.2) (Subtle Purple)

### Responsive Breakpoints
- **Desktop**: Full width (1024px+)
- **Tablet**: Medium breakpoint (768px - 1024px)
- **Mobile**: Small breakpoint (<768px)

## 🚀 Cara Menjalankan

### Prerequisites
- Node.js (v16 atau lebih tinggi)
- npm atau yarn

### Installation
```bash
cd assignment_react
npm install
```

### Development Server
```bash
npm run dev
```
Server akan berjalan di `http://localhost:5173/`

### Build
```bash
npm run build
```

### Preview Build
```bash
npm run preview
```

## 📋 Data Konten

Aplikasi menggunakan data sample yang mencakup:
- **Trending Movies**: 6 film trending dengan rating, tahun, dan kategori
- **Popular Series**: 6 series populer
- **New Releases**: 6 rilis terbaru

Setiap item memiliki:
- Title (Judul)
- Image (URL gambar dari Unsplash)
- Rating (Rating 1-10)
- Year (Tahun rilis)
- Category (Kategori konten)

## 🔄 Alur Props dan State

```
App (State: selectedItem)
  ↓
  ├── Header
  ├── Hero
  ├── ContentRow (props: items, onItemClick)
  │   └── Card (props: title, image, rating, year, category, onCardClick)
  │       └── onClick → handleItemClick → setSelectedItem
  ├── Selected Item Display
  └── Footer
```

## ✅ Penilaian Assignment

### 1. **Styling pada React** ✅
- Menggunakan CSS modern dengan grid, flexbox, dan gradient
- Dark theme yang konsisten di seluruh aplikasi
- Responsive design untuk semua ukuran layar
- Hover effects dan transitions yang smooth
- Color scheme yang menarik dan professional

### 2. **Memecah Section menjadi Komponen Terpisah** ✅
- Header component (navigasi, search, profil)
- Hero component (section promosi)
- Card component (unit konten yang reusable)
- ContentRow component (koleksi kartu)
- Footer component (informasi dan link)
- Setiap komponen independen dan dapat digunakan kembali

### 3. **Penggunaan Props untuk Melempar Data** ✅
- Card component menerima props untuk data dinamis
- ContentRow component menggunakan props untuk items dan callback
- Props digunakan untuk event handling (onCardClick, onItemClick)
- Parent-child communication melalui props dan callbacks

## 🎯 Features Implementasi

- ✅ **Komponen Modular**: Setiap bagian adalah komponen yang independen
- ✅ **Props Pattern**: Data dilewatkan melalui props
- ✅ **State Management**: Menggunakan useState untuk interactivity
- ✅ **Event Handling**: Click handlers dengan proper callback
- ✅ **Responsive Design**: Mobile-first approach dengan media queries
- ✅ **Modern Styling**: CSS dengan gradient, transitions, dan effects
- ✅ **Dark Theme**: Professional dark mode interface
- ✅ **Accessibility**: Semantic HTML dan proper ARIA attributes

## 📝 Notes

- Aplikasi menggunakan Unsplash untuk gambar placeholder
- Data adalah static sample data yang dapat diganti dengan API calls
- Styling menggunakan vanilla CSS tanpa library eksternal
- Responsive design telah diuji untuk desktop, tablet, dan mobile

## 🎓 Learning Outcomes

Melalui project ini, telah mempelajari:
1. Membuat dan menggunakan komponen React yang reusable
2. Menggunakan props untuk passing data antar komponen
3. State management dengan useState hook
4. Event handling dan callbacks
5. Styling React components dengan CSS
6. Responsive design dengan media queries
7. Component composition dan parent-child relationships

---

**Status**: ✅ Complete  
**Development Environment**: Vite + React 19  
**Last Updated**: April 25, 2026
