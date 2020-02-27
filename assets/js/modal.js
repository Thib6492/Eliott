const modalVimeo = (function() {
    let iframe = document.getElementById('vimeo');
    let player = new Vimeo.Player(iframe);
    let triggers = document.querySelectorAll('[data-target]');
    triggers.forEach(function(element) {
        element.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            let id = this.getAttribute('data-target');
            if (this.getAttribute('data-toggle') == id) {
                toggleModal(id);
                player.play()
            } else if (this.getAttribute('data-dismiss') == id) {
                toggleModal(id);
                player.pause()
            }
        })
    });

    function toggleModal(id) {
        let modal = document.getElementById(id);
        if (modal != null) {
            modal.classList.toggle('is-open')
        }
    }
})();

const resizeVideo = (function() {
    let windowWidth = window.innerWidth;
    const videoWrapper = document.querySelector('.modal .modal__content');
    calculRatio();

    function calculRatio() {
        if (windowWidth < 1200) {
            let videoHeight = Math.round((windowWidth / 16) * 9);
            videoWrapper.style.width = windowWidth + 'px';
            videoWrapper.style.height = videoHeight + 'px'
        }
    }
    window.addEventListener('resize', function() {
        windowWidth = window.innerWidth;
        calculRatio()
    })
})()