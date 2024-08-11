let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;
const imageContainer = document.getElementById('imageContainer');

// Fungsi untuk menunjukkan slide berdasarkan indeks
function showSlide(index) {
    if (index >= totalSlides) {
        currentIndex = 0;
        imageContainer.style.transition = 'left 1.5s';
        imageContainer.style.left = '0px';
    } else if (index < 0) {
        currentIndex = totalSlides - 1;
        imageContainer.style.transition = 'none';
        imageContainer.style.left = -currentIndex * 900 + 'px';
        setTimeout(() => {
            imageContainer.style.transition = 'left 1.5s';
        }, 20);
    } else {
        currentIndex = index;
        imageContainer.style.left = -currentIndex * 900 + 'px';
    }
}

// Fungsi untuk menunjukkan slide semasa berdasarkan nombor slide
function currentSlide(index) {
    showSlide(index - 1);
}

// Fungsi untuk autoplay slide setiap 5 saat
function autoSlide() {
    currentIndex++;
    showSlide(currentIndex);
}

// Tetapan interval untuk autoplay slide
setInterval(autoSlide, 5000);

// Memaparkan slide semasa
showSlide(currentIndex);

// Fungsi untuk mengurangkan saiz fon
function decreaseFontSize() {
    let currentSize = parseFloat(window.getComputedStyle(document.body, null).getPropertyValue('font-size'));
    document.body.style.fontSize = (currentSize - 2) + 'px'; // Mengurangkan 2 piksel dari saiz fon semasa
}

// Fungsi untuk menetapkan semula saiz fon kepada nilai asal
function resetFontSize() {
    document.body.style.fontSize = "initial";
}

// Fungsi untuk menambah saiz fon
function increaseFontSize() {
    let currentSize = parseFloat(window.getComputedStyle(document.body, null).getPropertyValue('font-size'));
    document.body.style.fontSize = (currentSize + 2) + 'px'; // Menambah 2 piksel kepada saiz fon semasa
}

// Event listener untuk butang pengurangan saiz fon
document.getElementById("jfontsize-minus").addEventListener("click", () => {
    decreaseFontSize();
});

// Event listener untuk butang menetapkan semula saiz fon
document.getElementById("jfontsize-default").addEventListener("click", () => {
    resetFontSize();
});

// Event listener untuk butang penambahan saiz fon
document.getElementById("jfontsize-plus").addEventListener("click", () => {
    increaseFontSize();
});

// Fungsi untuk penukaran warna latar belakang kepada putih
document.getElementById("white").addEventListener("click", () => {
    document.body.style.backgroundColor = "white";
});

// Fungsi untuk penukaran warna latar belakang kepada hitam
document.getElementById("black").addEventListener("click", () => {
    document.body.style.backgroundColor = "black";
});

// Fungsi untuk penukaran warna latar belakang kepada biru
document.getElementById("blue").addEventListener("click", () => {
    document.body.style.backgroundColor = "blue";
});

// Fungsi untuk penukaran warna latar belakang kepada merah
document.getElementById("red").addEventListener("click", () => {
    document.body.style.backgroundColor = "red";
});
