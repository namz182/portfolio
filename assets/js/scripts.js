// Typing effect
document.addEventListener("DOMContentLoaded", function () {
    new Typed("#typed-text", {
        strings: [
            "Cybersecurity expert",
            "Full Stack Developer",
            "Music Producer ",
            "I'm Mainza Namangani"
        ],
        typeSpeed: 50, // Typing speed in milliseconds
        backSpeed: 30, // Backspace speed in milliseconds
        backDelay: 2000, // Delay before starting to backspace
        startDelay: 500, // Delay before typing starts
        loop: true // Enables looping of the typing effect
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const categoryBtns = document.querySelectorAll('.category-btn');
    const projectCards = document.querySelectorAll('.project-card-detailed');

    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const category = this.getAttribute('data-category');

            // Update active button
            categoryBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // Filter projects
            projectCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeIn 0.5s ease-in-out';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});

document.getElementById('downloadBtn').addEventListener('click', function () {
    const btnText = document.getElementById('btnText');
    const spinner = document.getElementById('spinner');
    btnText.textContent = "Downloading...";
    spinner.classList.remove('d-none');

    setTimeout(() => {
        const link = document.createElement('a');
        link.href = "assets/files/Mainza Namangani CV.pdf";
        link.download = "Mainza_Namangani.pdf";
        link.click();

        btnText.textContent = "Download Resume";
        spinner.classList.add('d-none');
    }, 2000);
});