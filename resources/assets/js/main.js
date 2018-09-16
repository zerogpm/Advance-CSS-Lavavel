let backdrop = document.querySelector('.backdrop');
let selectPlanButtons = document.querySelectorAll('.plan button');
let modal = document.querySelector('.modal');
let closeButton = document.querySelector('.modal__action--negative');
let toggleButton = document.querySelector('.toggle-button');
let mobileNav = document.querySelector('.mobile-nav');
//console.dir(mobileNav);
for (let i = 0; i < selectPlanButtons.length; i++) {
    selectPlanButtons[i].addEventListener('click', () => {
        // modal.style.display = 'block';
        backdrop.style.display = 'block';
        modal.classList.add('open');
        setTimeout(function () {
            backdrop.classList.add('open');
        }, 10);
    });
}

backdrop.addEventListener('click', () => {
    mobileNav.classList.remove('open');
    closeModal();
});

if (closeButton) {
    closeButton.addEventListener('click', closeModal);
}

function closeModal() {
    // modal.style.display = 'none';
    // backdrop.style.display = 'none';
    if (modal) {
        modal.classList.remove('open');
    }
    backdrop.classList.remove('open');
    setTimeout(function () {
        backdrop.style.display = 'none';
    }, 200);
}

toggleButton.addEventListener('click', () => {
    mobileNav.classList.add('open');
    backdrop.style.display = 'block';
    setTimeout(function () {
        backdrop.classList.add('open');
    }, 10);
});
