
function decreaseFontSize() {
    let currentSize = parseFloat(window.getComputedStyle(document.body, null).getPropertyValue('font-size'));
    document.body.style.fontSize = (currentSize - 2) + 'px'; // Mengurangkan 2 piksel dari saiz fon semasa
}


function resetFontSize() {
    document.body.style.fontSize = "initial";
}


function increaseFontSize() {
    let currentSize = parseFloat(window.getComputedStyle(document.body, null).getPropertyValue('font-size'));
    document.body.style.fontSize = (currentSize + 2) + 'px'; // Menambah 2 piksel kepada saiz fon semasa
}


document.getElementById("jfontsize-minus").addEventListener("click", () => {
    decreaseFontSize();
});

document.getElementById("jfontsize-default").addEventListener("click", () => {
    resetFontSize();
});


document.getElementById("jfontsize-plus").addEventListener("click", () => {
    increaseFontSize();
});


document.getElementById("white").addEventListener("click", () => {
    document.body.style.backgroundColor = "white";
});


document.getElementById("black").addEventListener("click", () => {
    document.body.style.backgroundColor = "black";
});


document.getElementById("blue").addEventListener("click", () => {
    document.body.style.backgroundColor = "blue";
});


document.getElementById("red").addEventListener("click", () => {
    document.body.style.backgroundColor = "red";
});
