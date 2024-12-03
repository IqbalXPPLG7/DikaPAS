<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/filament/globals.css" />
    <link rel="stylesheet" href="/css/filament/styleguide.css" />
    <link rel="stylesheet" href="/css/filament/landing.css" />
    <style>
      .product {
          display: flex;
          align-items: center;
          margin-bottom: 20px;
      }
      .product img {
          width: 100px; /* Atur lebar gambar */
          height: 100px; /* Atur tinggi gambar */
          object-fit: cover; /* Memastikan gambar tidak terdistorsi */
      }
      .product-info {
          margin-left: 20px;
      }
  </style>
   <title>Landing - Bernada Coffee</title>
   <link rel="icon" href="{{ asset('img/logos12.png') }}" type="image/png">
  </head> 
  <body>
  </div>
    <div class="landing-page">

      <div class="div">
        <img class="body" src="img/body.svg" />
        
        <div class="overlap">
          <div class="text-wrap201">Our Beans Coffee!</div> <!-- Judul utama produk -->

          <div class="product-container">
            
            @foreach($products as $product)
                <div class="product">
                    <img src="{{ asset('storage/' . $product->images) }}" alt="{{ $product->nama }}">
                    <div class="product-info">
                        <h2>{{ $product->nama }}</h2>
                        <p>Harga: {{ $product->harga }}</p>
                        <p>Stok: {{ $product->stock }}</p>
                    </div>
                </div>
            @endforeach
        </div>
          <div class="offer">
              <div class="overlap-group">
                  <div class="text-wrapper">What Bernada Offer!</div>
                  <img class="line" src="img/line-3-1.svg" />
              </div>
              <div class="overlap-2">
                  <img class="image" src="img/image-7.png"/>
                  <p class="p">
                      Merupakan Biji Kopi import langsung dari luar negeri.
                  </p>
              </div>
              <div class="overlap-3">
                  <img class="img" src="img/image-11.png" />
                  <p class="text-wrapper-2">
                      Biji Kopi asli import dari luar negeri jika tidak asli, 100% Guarantee kembali!
                  </p>
              </div>
              <div class="overlap-group-2">
                  <img class="image-2" src="img/image.png" />
                  <p class="text-wrapper-3">
                      Delivery yaitu dengan Box Kayu tergantung dari pembeliannya, dan terjamin aman!
                  </p>
              </div>
              
              <!-- Product Container -->
              <div class="overlap-4">
                  <img class="image-3" src="img/image-12.png" />
                  <p class="text-wrapper-4">
                      Aman dan Terpercaya, jika anda tidak percaya kami ada beberapa bukti transaksi dari pembeli maka terjamin aman  
                  </p>
              </div>
          </div>
          
          <img class="desain-tanpa-judul" src="img/desain-tanpa-judul-1-1.png" />
      
        <div class="overlap-5">
          
          <div class="overlap-6">
            <img
              class="whatsapp-image"
              src="img/whatsapp-image-2024-08-22-at-14-39-51-defbb557-removebg-preview-2.png"
            />
        
            <p class="text-wrapper-5">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.
            </p>

          </div>
          <img
            class="whatsapp-image-2"
            src="img/whatsapp-image-2024-08-22-at-14-39-51-defbb557-removebg-preview-3.png"
          />    
          <div class="service-contact-us">Service<br /><br />Contact Us<br /><br />Help</div>
          <p class="contact-business">
            <span class="span">Contact Business : </span> <span class="text-wrapper-6">bernada@example.co.id</span>
          </p>
          <div class="text-wrapper-7">NEED HELP?</div>
        </div>
        <div class="header">
          
          <div class="overlap-7">
            
            <div class="overlap-group-wrapper">
              <div class="overlap-group-3">
                
                <img class="rectangle" src="img/rectangle-6.svg" />
                <img
                class="toppng-com-shopping"
                src="img/toppng-com-shopping-cart-sign-shopping-cart-empty-ico-980x734-1-1.png"
                />
                
                
                <div class="nav">
                  <nav>
                <div class="text-wrapper-8"><a href="#">RECOMEDATION</a></div>
                <div class="text-wrapper-9"><a href="#">COFFE BEAN</a></div>
                <div class="text-wrapper-10"><a href="#">COFFE TOOLS</a></div>
                  </nav>
                </div>
                <img
                class="whatsapp-image-3"
                src="img/whatsapp-image-2024-08-22-at-14-39-51-defbb557-removebg-preview.png"
                />
                <img class="rectangle-2" src="img/rectangle-5.svg" />
                <img class="image-4" src="img/image-6.png" />
              </div>
            </div>
            <img class="image-5" src="img/image-14.png" />
            <div class="menu-icon"> <i class="ph ph-list"></i></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
