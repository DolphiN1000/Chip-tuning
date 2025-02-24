// Функція для завантаження HTML-файлів у потрібні секції
function loadPartial(id, url) {
  fetch(url)
    .then((response) => response.text())
    .then((data) => {
      document.getElementById(id).innerHTML = data;
    })
    .catch((error) => console.error(`Помилка завантаження ${url}:`, error));
}

// Завантаження частин сторінки
document.addEventListener("DOMContentLoaded", function () {
  loadPartial("header", "./partials/header.html");
  loadPartial("footer", "./partials/footer.html");
});
