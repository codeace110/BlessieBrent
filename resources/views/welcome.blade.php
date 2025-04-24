<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BlessieBrent - Professional Device Repair Services</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <script type="module" src="../js/script.js"></script>
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
  body {
    font-family: system-ui, -apple-system, sans-serif;
    line-height: 1.6;
    color: #333;
  }
  
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 5%;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
  }
  
  .logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #FF9B17;
  }
  
  .nav-links {
    display: flex;
    gap: 2rem;
    align-items: center;
  }
  
  .nav-links a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    transition: color 0.3s ease;
  }
  
  .nav-links a:hover {
    color: #FF9B17;
  }
  
  .cta-button {
    background-color: #FF9B17;
    color: white !important;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    transition: background-color 0.3s ease;
  }
  
  .cta-button:hover {
    background-color: #FCB454;
  }
  
  .hero {
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                url('https://images.unsplash.com/photo-1531297484001-80022131f5a1?auto=format&fit=crop&q=80');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    padding: 0 1rem;
  }
  
  .hero-content {
    max-width: 800px;
  }
  
  .hero h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
  }
  
  .hero p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
  }
  
  section {
    padding: 5rem 5%;
  }
  
  h2 {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 3rem;
    color: #FF9B17;
  }
  
  .service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    max-width: 1400px;
    margin: 0 auto;
  }
  
  .service-card {
    background: #FFF085;
    padding: 2rem;
    border-radius: 1rem;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid #FCB454;
  }
  
  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
  }
  
  .service-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
  }
  
  .service-card h3 {
    color: #FF9B17;
    margin-bottom: 1rem;
    font-size: 1.5rem;
  }
  
  .service-card p {
    color: #333;
    margin-bottom: 1.5rem;
  }
  
  .service-features {
    list-style: none;
    text-align: left;
    margin-top: 1rem;
  }
  
  .service-features li {
    padding: 0.5rem 0;
    color: #333;
    position: relative;
    padding-left: 1.5rem;
  }
  
  .service-features li::before {
    content: "✓";
    color: #F16767;
    position: absolute;
    left: 0;
  }
  
  .features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    max-width: 1400px;
    margin: 0 auto;
  }
  
  .feature-card {
    background: #FFF085;
    padding: 2rem;
    border-radius: 1rem;
    text-align: center;
    transition: transform 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid #FCB454;
    position: relative;
    overflow: hidden;
  }
  
  .feature-card:hover {
    transform: translateY(-5px);
  }
  
  .feature-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
  }
  
  .feature-card h3 {
    color: #FF9B17;
    margin-bottom: 1rem;
    font-size: 1.5rem;
  }
  
  .feature-card p {
    color: #333;
  }
  
  .feature-highlight {
    background: #F16767;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    margin-top: 1rem;
    display: inline-block;
    font-weight: 500;
  }
  
  .contact {
    background-color: #FFF085;
  }
  
  .contact-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .contact-details, .business-hours {
    text-align: center;
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  
  .contact-details h3, .business-hours h3 {
    color: #FF9B17;
    margin-bottom: 1rem;
  }
  
  footer {
    text-align: center;
    padding: 2rem;
    background-color: #FF9B17;
    color: white;
  }
  
  @media (max-width: 768px) {
    .nav-links {
      display: none;
    }
    
    .hero h1 {
      font-size: 2rem;
    }
    
    section {
      padding: 3rem 5%;
    }
    
    .service-card, .feature-card {
      padding: 1.5rem;
    }
  }
  
  .services {
    background: url('https://images.unsplash.com/photo-1616077168079-7e09a677fb2c?auto=format&fit=crop&q=80') center/cover fixed;
    position: relative;
  }
  
  .services::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.9);
  }
  
  .services > * {
    position: relative;
    z-index: 1;
  }
  
  .about {
    background: url('https://images.unsplash.com/photo-1542751110-97427bbecf20?auto=format&fit=crop&q=80') center/cover fixed;
    position: relative;
  }
  
  .about::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.9);
  }
  
  .about > * {
    position: relative;
    z-index: 1;
  }

    </style>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="logo">BlessieBrent</div>
        <div class="nav-links">
          <a href="#services">Services</a>
          <a href="#shop">Shop</a>
          <a href="#about">About</a>
          <a href="#repairs">Repairs</a>
          <a href="#accessories">Accessories</a>
          <a href="#contact" class="cta-button">Contact Us</a>
        </div>
      </nav>
    </header>

    <main>
      <section class="hero">
        <div class="hero-content">
          <h1>Professional Device Repair Services</h1>
          <p>Expert repairs for phones, laptops, computers, and more</p>
          <a href="#contact" class="cta-button">Get Your Device Fixed Today</a>
        </div>
      </section>

      <section id="services" class="services">
        <h2>Our Services</h2>
        <div class="service-grid">
          <div class="service-card">
            <div class="service-icon">📱</div>
            <h3>Phone Repair</h3>
            <p>Screen replacement, battery service, and more</p>
            <ul class="service-features">
              <li>Screen Repairs</li>
              <li>Battery Replacement</li>
              <li>Water Damage Fix</li>
              <li>Software Issues</li>
            </ul>
          </div>
          <div class="service-card">
            <div class="service-icon">💻</div>
            <h3>Laptop Repair</h3>
            <p>Hardware upgrades, screen repairs, keyboard replacement</p>
            <ul class="service-features">
              <li>Screen Replacement</li>
              <li>Keyboard Fixes</li>
              <li>Hardware Upgrade</li>
              <li>OS Installation</li>
            </ul>
          </div>
          <div class="service-card">
            <div class="service-icon">🖥️</div>
            <h3>Computer Service</h3>
            <p>PC builds, upgrades, and maintenance</p>
            <ul class="service-features">
              <li>Custom Builds</li>
              <li>Part Upgrades</li>
              <li>Virus Removal</li>
              <li>Data Recovery</li>
            </ul>
          </div>
          <div class="service-card">
            <div class="service-icon">🔄</div>
            <h3>Second-Hand Devices</h3>
            <p>Quality refurbished laptops and PCs at great prices</p>
            <ul class="service-features">
              <li>Tested Quality</li>
              <li>Warranty Included</li>
              <li>Various Brands</li>
              <li>Budget Options</li>
            </ul>
          </div>
        </div>
      </section>

      <section id="about" class="about">
        <h2>Why Choose Us?</h2>
        <div class="features">
          <div class="feature-card">
            <div class="feature-icon">👨‍🔧</div>
            <h3>Expert Technicians</h3>
            <p>Our certified professionals bring years of experience and expertise to every repair</p>
            <div class="feature-highlight">Certified Repairs</div>
          </div>
          <div class="feature-card">
            <div class="feature-icon">⚡</div>
            <h3>Quick Service</h3>
            <p>Most repairs completed same day, getting you back up and running fast</p>
            <div class="feature-highlight">Same Day Service</div>
          </div>
          <div class="feature-card">
            <div class="feature-icon">✨</div>
            <h3>Quality Parts</h3>
            <p>We use only genuine replacement parts to ensure lasting repairs</p>
            <div class="feature-highlight">Genuine Parts</div>
          </div>
          <div class="feature-card">
            <div class="feature-icon">💰</div>
            <h3>Affordable Options</h3>
            <p>Wide selection of refurbished laptops and PCs to fit your budget</p>
            <div class="feature-highlight">Best Value</div>
          </div>
        </div>
      </section>

      <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <div class="contact-info">
          <div class="contact-details">
            <h3>Visit Our Shop</h3>
            <p>123 Tech Street</p>
            <p>Tech City, TC 12345</p>
            <p>Phone: (555) 123-4567</p>
            <p>Email: service@blessiebrent.com</p>
          </div>
          <div class="business-hours">
            <h3>Business Hours</h3>
            <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
            <p>Saturday: 10:00 AM - 4:00 PM</p>
            <p>Sunday: Closed</p>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <p>&copy; 2024 BlessieBrent. All rights reserved.</p>
    </footer>
  </body>
</html>