 // Установите дату, до которой будет идти отсчет
 const targetDate = new Date('September 28, 2024 15:00:00').getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate - now;

        // Расчет времени
        const weeks = Math.floor(distance / (1000 * 60 * 60 * 24 * 7));
        const days = Math.floor((distance % (1000 * 60 * 60 * 24 * 7)) / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Отображение результатов
        document.getElementById('weeks').textContent = weeks;
        document.getElementById('days').textContent = days;
        document.getElementById('hours').textContent = hours;
        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;

        // Если отсчет завершен
        if (distance < 0) {
            clearInterval(countdownInterval);
            document.querySelector('.timer').textContent = 'Мы поженились!';
        }
    }

    // Обновление каждую секунду
    const countdownInterval = setInterval(updateCountdown, 1000);

const mapBtn = document.querySelector('.map-btn')
const map = document.querySelector('.map')

mapBtn.addEventListener('click', (e) => {
    e.preventDefault()
    map.style.display = 'block'
})