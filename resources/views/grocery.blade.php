
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshMart | Grocery Store</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f9f5;
            color: #26352a;
        }

        header {
            background: #197443;
            color: white;
            padding: 22px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        header h1 {
            margin: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .hero {
            padding: 55px 8%;
            background: #e4f4d8;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
            flex-wrap: wrap;
        }

        .hero h2 {
            font-size: 40px;
            margin-bottom: 12px;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.6;
        }

        .hero a, .product button {
            display: inline-block;
            background: #197443;
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
        }

        .hero-icon {
            font-size: 100px;
        }

        .container {
            padding: 35px 8%;
        }

        .search {
            width: 100%;
            max-width: 450px;
            padding: 13px;
            border: 1px solid #ccd5ca;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 22px;
        }

        .product {
            background: white;
            padding: 22px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 3px 12px #0000000c;
        }

        .product .emoji {
            font-size: 65px;
            background: #f1f7ed;
            padding: 15px;
            border-radius: 10px;
        }

        .product h3 {
            margin-bottom: 8px;
        }

        .price {
            color: #197443;
            font-size: 20px;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 25px;
            background: #173d29;
            color: white;
            margin-top: 35px;
        }

        @media (max-width: 600px) {
            .hero h2 {
                font-size: 30px;
            }

            nav a {
                margin-left: 0;
                margin-right: 12px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>🥬 FreshMart</h1>
    <nav>
        <a href="/">Home</a>
        <a href="#products">Products</a>
        <a href="#contact">Contact</a>
        <a href="#products">🛒 Cart</a>
    </nav>
</header>

<section class="hero">
    <div>
        <h2>Fresh groceries,<br>delivered with care!</h2>
        <p>Shop fresh fruits, vegetables and everyday essentials.</p>
        <a href="#products">Shop Now →</a>
    </div>
    <div class="hero-icon">🛒🥦🍎</div>
</section>

<main class="container" id="products">
    <h2>Our Popular Products</h2>
    <p>Fresh picks for your everyday needs.</p>

    <input
        class="search"
        id="search"
        type="search"
        placeholder="Search for groceries..."
        oninput="searchProducts()"
    >

    <div class="products">
        <article class="product">
            <div class="emoji">🍎</div>
            <h3>Fresh Apples</h3>
            <p>Sweet and crunchy apples.</p>
            <p class="price">Rs. 250 / kg</p>
            <button onclick="addToCart('Fresh Apples')">Add to Cart</button>
        </article>

        <article class="product">
            <div class="emoji">🥛</div>
            <h3>Fresh Milk</h3>
            <p>Daily dairy essential.</p>
            <p class="price">Rs. 100 / litre</p>
            <button onclick="addToCart('Fresh Milk')">Add to Cart</button>
        </article>

        <article class="product">
            <div class="emoji">🥦</div>
            <h3>Broccoli</h3>
            <p>Fresh green vegetables.</p>
            <p class="price">Rs. 180 / kg</p>
            <button onclick="addToCart('Broccoli')">Add to Cart</button>
        </article>

        <article class="product">
            <div class="emoji">🍞</div>
            <h3>Fresh Bread</h3>
            <p>Soft bread for breakfast.</p>
            <p class="price">Rs. 80 / pack</p>
            <button onclick="addToCart('Fresh Bread')">Add to Cart</button>
        </article>
    </div>

    <h3 id="cart-count">🛒 Cart: 0 items</h3>
</main>

<footer id="contact">
    <p>FreshMart Grocery Store</p>
    <p>Fresh food for every home ❤️</p>
    <p>© 2026 FreshMart. Demo website.</p>
</footer>

<script>
    let cartCount = 0;

    function addToCart(product) {
        cartCount++;
        document.getElementById('cart-count').textContent =
            '🛒 Cart: ' + cartCount + ' items';

        alert(product + ' added to your demo cart!');
    }

    function searchProducts() {
        const query = document.getElementById('search')
            .value.toLowerCase();

        document.querySelectorAll('.product').forEach(product => {
            product.style.display =
                product.textContent.toLowerCase().includes(query)
                    ? ''
                    : 'none';
        });
    }
</script>

</body>
</html>