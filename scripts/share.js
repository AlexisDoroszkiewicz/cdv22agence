const setBodyHeight = () => {
    document.querySelector('.flexcontainer').style.height = window.innerHeight + 'px';
}

setBodyHeight();

window.addEventListener('resize', setBodyHeight);

const blanks = document.querySelectorAll('.blank')

blanks.forEach((item) => {
    item.children[0].style.transform = `scale(1.3) rotate(${Math.ceil(Math.random() * 15) * (Math.round(Math.random()) ? 1 : -1)}deg)`
})

// exponential decorative elememnts position

const go = document.querySelector('#gofixed');
const heart = document.querySelector('#heartfixed');

const stickerPosition = () => {
    go.style.right = (window.innerWidth/100)*(window.innerWidth/100)+ 'px';
    if (heart) {
        heart.style.right = (window.innerWidth/100)*(window.innerWidth/100)+ 'px';
    }
    
}

window.addEventListener('resize', stickerPosition);
