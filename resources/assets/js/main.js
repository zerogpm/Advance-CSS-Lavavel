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
        // backdrop.style.display = 'block';
        modal.classList.add('open');
        backdrop.classList.add('open');
    });
}

backdrop.addEventListener('click', () => {
    mobileNav.classList.remove('open');
    backdrop.classList.remove('open');
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
}

toggleButton.addEventListener('click', () => {
    mobileNav.classList.add('open');
    backdrop.classList.add('open');
});
