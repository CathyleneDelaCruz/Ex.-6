body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #fa9a9a;
}

header {
    background: #f3d0e1;
    color: #c94f4f;
    padding: 20px 0;
    text-align: center;
}

nav a {
    color: #664646;
    margin: 0 15px;
    text-decoration: none;
}

nav a:hover {
    color: #c94f4f;
}

main {
    padding: 20px;
    text-align: center;
}

.artwork {
    margin: 20px;
    display: inline-block;
    border: 1px solid #fcf7f7;
    padding: 10px;
    background-color: #b88499da;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.artwork img {
    width: 250px; 
    height: auto;
    border-radius: 10px;
}

.artwork:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.artist-art {
    width: 350px; 
    height: auto;
    border-radius: 10px;
}

.hover-text {
    color: #fff;
    transition: color 0.3s ease, transform 0.3s ease;
}

.hover-text:hover {
    color: #ffeb3b;
    transform: scale(1.1);
}

footer {
    background: #470d25;
    color: #ffffff;
    text-align: center;
    padding: 10px 0;
    position: relative;
    bottom: 0;
    width: 100%;
}
