const firstComment = document.querySelector(".countComments");

window.addEventListener('scroll', function () {
    let footer = document.querySelector('footer');
    let distanceToFooter = footer.getBoundingClientRect().top - window.innerHeight;

    if (distanceToFooter <= 0) {
        setTimeout(() => {
            const divComment = document.createElement("div");
            const divCommentContainer = document.createElement("div");
            const imgPhoto = document.createElement("img");
            const divCol8 = document.createElement("div");
            const pName = document.createElement("p");
            const pText = document.createElement("p");
            const buttonLike = document.createElement("button");
            const imgLike = document.createElement("img");
            const pNumLikes = document.createElement("p");


            divComment.className = "comment";
            divCommentContainer.className = "commentContainer";
            imgPhoto.className = "photo";
            divCol8.className = "col-8";
            pName.className = "name";
            pText.className = "text";
            buttonLike.className = "butLike";
            imgLike.className = "like";
            pNumLikes.className = "numLikes";
            buttonLike.addEventListener("click", sendLike)

            imgPhoto.src = "./images/img_6.png";
            imgPhoto.alt = "";
            pName.textContent = "mi-mi";
            pText.textContent = "Drôle de test) Je ne vous dirai pas quel est mon résultat)";
            imgLike.src = "./images/heart.png";
            imgLike.alt = "";
            pNumLikes.textContent = "0";

            divComment.appendChild(divCommentContainer);
            divCommentContainer.appendChild(imgPhoto);
            divCommentContainer.appendChild(divCol8);
            divCol8.appendChild(pName);
            divCol8.appendChild(pText);
            buttonLike.appendChild(imgLike);
            buttonLike.appendChild(pNumLikes);
            divCommentContainer.appendChild(buttonLike);


            firstComment.insertAdjacentElement("afterend", divComment)
        }, 2000)

        setTimeout(() => {

            const divComment = document.createElement("div");
            const divCommentContainer = document.createElement("div");
            const imgPhoto = document.createElement("img");
            const divCol8 = document.createElement("div");
            const pName = document.createElement("p");
            const pText = document.createElement("p");
            const buttonLike = document.createElement("button");
            const imgLike = document.createElement("img");
            const pNumLikes = document.createElement("p");

            divComment.className = "comment";
            divCommentContainer.className = "commentContainer";
            imgPhoto.className = "photo";
            divCol8.className = "col-8";
            pName.className = "name";
            pText.className = "text";
            buttonLike.className = "butLike";
            imgLike.className = "like";
            pNumLikes.className = "numLikes";
            buttonLike.addEventListener("click", sendLike)

            imgPhoto.src = "./images/img_3.png";
            imgPhoto.alt = "";
            pName.textContent = "Neverff";
            pText.textContent = "Je suis hétérosexuel !";
            imgLike.src = "./images/heart.png";
            imgLike.alt = "";
            pNumLikes.textContent = "0";

            divComment.appendChild(divCommentContainer);
            divCommentContainer.appendChild(imgPhoto);
            divCommentContainer.appendChild(divCol8);
            divCol8.appendChild(pName);
            divCol8.appendChild(pText);
            buttonLike.appendChild(imgLike);
            buttonLike.appendChild(pNumLikes);
            divCommentContainer.appendChild(buttonLike);


            firstComment.insertAdjacentElement("afterend", divComment)
        }, 8000)

        window.removeEventListener('scroll', arguments.callee);
    }
});
const inputPhoto = document.querySelector('input[type="file"]');
inputPhoto.addEventListener('change', () => {

    const file = inputPhoto.files[0];
    const reader = new FileReader();
    reader.onload = () => {
        const photo = reader.result;
        localStorage.setItem('photo', photo);
        console.log('Фото збережено в localStorage!');
    };
    reader.readAsDataURL(file);
});



const like = document.getElementById('like')
const numLikes = document.getElementById('numLikes')

let active = false;


const sendLike = () => {
    const imgFalse = !event.currentTarget.querySelector("img").classList.contains("filter")
    let currentNumber = event.currentTarget.querySelector("p").innerText
    if (imgFalse) {
        event.currentTarget.querySelector("img").classList.add('filter');
        event.currentTarget.querySelector("p").classList.add('filter');
        currentNumber++;
        event.currentTarget.querySelector("p").innerText = currentNumber
    }
    if (!imgFalse) {
        event.currentTarget.querySelector("img").classList.remove('filter');
        event.currentTarget.querySelector("p").classList.remove('filter');
        currentNumber--;
        event.currentTarget.querySelector("p").innerText = currentNumber
    }

    if (active === false) {
        active = true
    } else active = false
}

const input = document.getElementById('inputText');
const send = document.getElementById('send');
const pop = document.getElementById('Pop-up');
const form = document.getElementById('form');


input.addEventListener('input', () => {
    const inputValue = input.value
    if (inputValue) {
        send.classList.add('active')
    } else {
        send.classList.remove('active')
    }
})

form.addEventListener('submit', async (e) => {
    const input = document.getElementById('username')
    localStorage.setItem('username', input.value)
    console.log(input.value);
    event.preventDefault()
    pop.classList.remove('activeForm')
    const divComment = document.createElement("div");
    const divCommentContainer = document.createElement("div");
    const imgPhoto = document.createElement("img");
    const divCol8 = document.createElement("div");
    const pName = document.createElement("p");
    const pText = document.createElement("p");
    const buttonLike = document.createElement("button");
    const imgLike = document.createElement("img");
    const pNumLikes = document.createElement("p");


    divComment.className = "comment";
    divCommentContainer.className = "commentContainer";
    imgPhoto.className = "photo";
    divCol8.className = "col-8";
    pName.className = "name";
    pText.className = "text";
    buttonLike.className = "butLike";
    imgLike.className = "like";
    pNumLikes.className = "numLikes";
    buttonLike.addEventListener("click", sendLike)

    if (localStorage.getItem('photo')){
        imgPhoto.src = localStorage.getItem('photo');
    } else imgPhoto.src = "./images/question.png"
    imgPhoto.alt = "";
    pName.textContent = localStorage.getItem('username');
    pText.textContent = localStorage.getItem('message');
    imgLike.src = "./images/heart.png";
    imgLike.alt = "";
    pNumLikes.textContent = "0";

    await divComment.appendChild(divCommentContainer);
    await divCommentContainer.appendChild(imgPhoto);
    await divCommentContainer.appendChild(divCol8);
    await divCol8.appendChild(pName);
    await divCol8.appendChild(pText);
    await buttonLike.appendChild(imgLike);
    await buttonLike.appendChild(pNumLikes);
    await divCommentContainer.appendChild(buttonLike);


    firstComment.insertAdjacentElement("afterend", divComment)
})
const sendMessage = async () => {
    const input = document.getElementById('inputText');
    await localStorage.setItem('message', input.value);
    await pop.classList.add('activeForm');
}

const nonActive = () => {

     pop.classList.remove('activeForm');
}

const inputUsername = document.getElementById('username');
const inputFile = document.getElementById('file');

inputUsername.addEventListener('click', (e)=> {
    e.stopImmediatePropagation()
})

inputFile.addEventListener('click', (e)=> {
    e.stopImmediatePropagation()
})

