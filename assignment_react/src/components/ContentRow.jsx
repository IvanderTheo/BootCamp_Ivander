import Card from './Card';
import '../styles/ContentRow.css';

function ContentRow({ title, items, onItemClick }) {
  return (
    <section className="content-row">
      <h2 className="row-title">{title}</h2>
      <div className="row-container">
        <div className="cards-scroll">
          {items.map((item, index) => (
            <Card
              key={index}
              title={item.title}
              image={item.image}
              rating={item.rating}
              year={item.year}
              category={item.category}
              onCardClick={onItemClick}
            />
          ))}
        </div>
      </div>
    </section>
  );
}

export default ContentRow;
