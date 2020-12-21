let options = {
    root: document.querySelector('#scrollArea'),
    rootMargin: '0px',
    threshold: 0
}

const images1 = document.querySelectorAll(".anim1");
observer1 = new IntersectionObserver(entries => {
    entries.forEach (entry => {
        if(entry.intersectionRatio > 0){
            entry.target.style.animation = 'anim1 2s forwards ease-out';
        }
    })

}, options)
images1.forEach(image => {
                observer1.observe(image);
            })

const images2 = document.querySelectorAll(".anim2");
observer2 = new IntersectionObserver(entries => {
    entries.forEach (entry => {
        if(entry.intersectionRatio > 0){
            entry.target.style.animation = 'anim2 2s forwards ease-out';
        }
    })

})
images2.forEach(image => {
                observer2.observe(image);
            })

const images3 = document.querySelectorAll(".anim3");
observer3 = new IntersectionObserver(entries => {
    entries.forEach (entry => {
        if(entry.intersectionRatio > 0){
            entry.target.style.animation = 'anim3 1s forwards ease-out';
        }
    })

},options)
images3.forEach(image => {
                observer3.observe(image);
            })