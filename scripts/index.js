const modal = document.querySelector(".modal");
const blanks = document.querySelectorAll(".blank");
const inputs = document.querySelectorAll(".input");
const renders = document.querySelectorAll(".render");
const stickers = document.querySelectorAll(".sticker");
const form = document.querySelector("form");
const html = document.querySelector("html");
const submit = document.querySelector('#submit');
const submitBtn = document.querySelector('[type=submit');
const overlay = document.querySelector('.overlay');
const closeBtn = document.querySelector('#ok');

// The active blank to be filled
var selected;
// Boolean to check whether or not modal is visible
var isModalVisible = false;
// Initial Click check (used for centering board when game begins)
var hasClicked = false;

// -----------------------------------------------------------------
// What happens when you click on a blank
const blankHandler = (e) => {
    // If clicked blank is already filled with a sticker do :
    if (e.target.firstElementChild.tagName == "IMG") {
        // place the sticker back in its slot and allow clicks
        const spot = document.getElementById(
            e.target.firstElementChild.dataset.name
        );
        spot.setAttribute(
            "src",
            `./assets/stickers/${e.target.firstElementChild.dataset.name}.png`
        );
        spot.style.pointerEvents = "all";
        // add a blank where sticker was
        const span = document.createElement("span");
        span.textContent = "Stickez ici";
        e.target.children[0].replaceWith(span);
        // clear hidden input
        const id = nbFilter(e.target.id);
        inputs[id - 1].value = "";
        // disable button
        document.querySelector('button').style.pointerEvents = "none";
        document.querySelector('button').setAttribute('disabled', '');
    }

    // If clicked blank is already selected hide modal and remove focus
    if (e.target == selected) {
        handleModal(e);
        removeFocus();
        return;
    }
    // Else open modal and set clicked blank as selected
    handleModal(e);
    setSelected(e);
    // Scroll the page if the element is bellow mid screen (covered by modal)
    if (hasClicked) scrollToNext();
    // On first click, center board unless clicked element bellow mid screen
    if (!hasClicked) {
        centerBoard();
        hasClicked = true;
    }
};

// Decide whether to hide or show modal
const handleModal = (e) => {
    if (selected == e.target) hideModal();
    else showModal();
};

// Hide modal and reset selected value
const hideModal = () => {
    modal.style.pointerEvents = "none";
    anime({
        targets: ".modal",
        translateY: "0",
        easing: "easeInCubic",
    });
    isModalVisible = false;
    selected = null;
    html.style.overflow = "auto";
    removeFocus();
};

// Calculate element offset from top of page (not viewport) and scroll to its coordinates
const centerBoard = () => {
    bodyRect = document.body.getBoundingClientRect();
    boardRect = document.querySelector(".board").children[0].getBoundingClientRect();
    if (selected) {
        selectedRect = selected.getBoundingClientRect();
        // if selected element is bellow mid viewport, center to it instead (else modal covers it)
        if (selectedRect.top - boardRect.top > window.innerHeight / 2) {
            scrollToNext();
            return;
        }
    }
    // removing 2vh to offset for white space
    offset = boardRect.top - bodyRect.top - (2 * window.innerHeight/100);
    window.scrollTo({ top: offset, behavior: "smooth" });
};

// Show modal if not already visible
const showModal = () => {
    modal.style.visibility = "visible";
    modal.style.pointerEvents = "all";
    if (!isModalVisible) {
        anime({
            targets: ".modal",
            translateY: "-85%",
        });
        isModalVisible = true;
    }
    html.style.overflow = "hidden";
};

// Turn all blanks to red (all red means no specific one is focused - initial state)
const removeFocus = () => {
    for (let i = 0; i < blanks.length; i++) {
        blanks[i].classList.add("focus");
    }
};

// Set the clicked blank as "selected" and focus on it by making other blanks grey
const setSelected = (e) => {
    selected = e.target;
    focus(e.target);
};

// Remove the 'focus' class on all blanks except the selected one
const focus = (target) => {
    for (let i = 0; i < blanks.length; i++) {
        blanks[i].classList.remove("focus");
        if (blanks[i] === target) {
            blanks[i].classList.add("focus");
        }
    }
};

// Extract 2 digit number from a string
const nbFilter = (string) => {
    let regex = /\d+/g;
    let nbAsString = regex.exec(string);
    return parseInt(nbAsString, 10);
};

//  Add click events to all blanks
for (let i = 0; i < blanks.length; i++) {
    blanks[i].addEventListener("click", blankHandler);
}

// -----------------------------------------------------------------
// What happens when you click on a sticker inside the modal
const handleStickers = (e) => {
    // First we place the sticker on the selected blank
    placeSticker(e);
    // Grey the used sticker slot
    greySlot(e);
    // Then we set the corresponding hidden input to this sticker ID
    setInput(e);
    // Then we select the next blank
    selectNext();
    // If the next blank is not in view, autoscroll
    scrollToNext();
};

// Replace blank and render's first child with a copy of clicked sticker
const placeSticker = (e) => {
    let img = document.createElement("img");
    img.setAttribute("src", "./assets/stickers/" + e.target.id + ".png");
    let img2 = document.createElement("img");
    img2.setAttribute("src", "./assets/stickers/" + e.target.id + ".png");
    // set a data-name to target the element easily (ID already used by original)
    img2.setAttribute("data-name", e.target.id);
    id = nbFilter(selected.id);
    renders[id - 1].children[0].replaceWith(img);
    selected.children[0].replaceWith(img2);
    anime({
        targets: [img, img2],
        rotateZ: anime.random(-12, 12),
        scale: 1.3,
    });
};

// Grey the used sticker slot and disable pointer events
const greySlot = (e) => {
    e.target.setAttribute("src", `./assets/used/${e.target.id}.png`);
    e.target.style.pointerEvents = "none";
};

// Set the hidden input value to clicked sticker's id
const setInput = (e) => {
    currentID = nbFilter(selected.id);
    let input = document.querySelector("[name='i" + currentID + "']");
    input.value = e.target.id;
};

// Select next blank
const selectNext = () => {
    nextIndex = getNextIndex();
    selected = blanks[nextIndex];
    focus(selected);
};

// Select the first empty blank - If none, run board filled code
const getNextIndex = () => {
    for (i = 0; i < inputs.length; i++) {
        if (inputs[i].value == "") {
            return i;
        }
    }
    filled();
};

// Handle autoscroll
const scrollToNext = () => {
    if (selected == null) return;
    // center board if selected is above viewport
    else if (selected.getBoundingClientRect().top < 0) {
        centerBoard();
        return;
    }
    // scroll to selected if bellow mid viewport
    else if (selected.getBoundingClientRect().bottom > window.innerHeight / 2) {
        selected.scrollIntoView({ block: "center", behavior: "smooth" });
    }
};

// Code to be executed when board entirely filled
const filled = () => {
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value == "") {
            return;
        }
    }
    // reset selection, activate button, hide modal and set dataURL
    selected = null;
    document.querySelector('button').style.pointerEvents = "all";
    document.querySelector('button').removeAttribute('disabled');
    hideModal();
    scrollToSubmit();
    setDataUrl();
};

// Scroll to submit button
const scrollToSubmit = () => {
    submitBtn.scrollIntoView({behavior: 'smooth'});
}

// Create a canvas containing rendered image and set hidden input to said image data. dataURL is then used by PHP to create the image server side
const setDataUrl = () => {
    html2canvas(document.querySelector(".rendererContainer"), {
        scale: 2,
        width: 600,
        height: 315,
    }).then((canvas) => {
        const dataURL = canvas.toDataURL("image/jpg", 1);
        document.querySelector(".dataUrl").value = dataURL;
    });      
};

// Add click events to all stickers
for (let i = 0; i < stickers.length; i++) {
    stickers[i].addEventListener("click", handleStickers);
}

// -----------------------------------------------------------------
// Form Submition

// Change the form action in order to pass some GET args while still sending the dataURL via POST (dataURL too long to be passed via GET)
const setGet = () => {
    form.setAttribute(
        "action",
        `share.php?i1=${inputs[0].value}&i2=${inputs[1].value}&i3=${inputs[2].value}&i4=${inputs[3].value}&i5=${inputs[4].value}&i6=${inputs[5].value}&i7=${inputs[6].value}&i8=${inputs[7].value}&i9=${inputs[8].value}&i10=${inputs[9].value}`
    );
};

form.addEventListener("submit", setGet);

// Hide Modal if clicking on board or HTML or card
html.addEventListener("click", (e) => {
    if (
        (e.target.tagName == "P" && isModalVisible) ||
        (e.target.tagName == "HTML" && isModalVisible) ||
        (e.target.classList[0] == "card" && isModalVisible) ||
        (e.target.classList[0] == "board" && isModalVisible)
    ) {
        hideModal();
    }
});

// Randomly handling header margin bottom here since css doesnt allow vw inside calc() ¯\_(ツ)_/¯
const header = document.querySelector("header");

const headermargin = () => {
    const maxW = 1190;
    const minW = 375;
    const medianW = (maxW + minW) /2;
    const maxWMargin = 45;
    const minWMargin = 78;
    const medianMargin = (maxWMargin + minWMargin) /2;
    const result = medianMargin * medianW;
    let calc = result / window.innerWidth;
    header.style.setProperty("--marginBottom", `${calc}px`);
};
headermargin();
window.addEventListener("resize", headermargin);

// Error message when clicking disabled button
const submitHandler = () => {
    if (submitBtn.disabled) {
        overlay.style.display = 'grid';
        centerBoard();
    }
}

const closeError = () => {
    overlay.style.display = 'none';
}

submit.addEventListener('click', submitHandler);
closeBtn.addEventListener('click', closeError);
overlay.addEventListener('click', closeError);