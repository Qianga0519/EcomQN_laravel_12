

function startCountdown() {
    const countdownElement = document.querySelector('.countdown-expired');
    let totalSeconds = parseInt(countdownElement.getAttribute('data-time'), 10) || 0;

    const hoursElement = countdownElement.querySelector('.countdown-hours');
    const minutesElement = countdownElement.querySelector('.countdown-minutes');
    const secondsElement = countdownElement.querySelector('.countdown-seconds');

    function slideChange(element, newValue) {
        if (element.textContent === newValue) return;

        element.classList.add('slide-down');

        setTimeout(() => {
            element.textContent = newValue;
            element.classList.remove('slide-down');
            element.classList.add('slide-up');
        }, 200);

        setTimeout(() => {
            element.classList.remove('slide-up');
        }, 400);
    }

    function updateCountdown() {
        if (totalSeconds <= 0) {
            // slideChange(hoursElement, "00");
            // slideChange(minutesElement, "00");
            // slideChange(secondsElement, "00");
            countdownElement.innerHTML = "<span>Expired</span>"
            return;
        }

        let hours = Math.floor(totalSeconds / 3600);
        let minutes = Math.floor((totalSeconds % 3600) / 60);
        let seconds = totalSeconds % 60;

        slideChange(hoursElement, String(hours).padStart(2, '0'));
        slideChange(minutesElement, String(minutes).padStart(2, '0'));
        slideChange(secondsElement, String(seconds).padStart(2, '0'));

        totalSeconds--;
        setTimeout(updateCountdown, 1000);
    }

    updateCountdown();
}


document.addEventListener("DOMContentLoaded", startCountdown);
const body = document.body;
const bodyHeight = body.scrollHeight;
const processPageElement = document.querySelector('.process-page');
window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;
    const maxScroll = body.scrollHeight - window.innerHeight;
    const widthPercentage = (scrollPosition / maxScroll) * 100;
    processPageElement.style.width = `${widthPercentage}%`;
});

