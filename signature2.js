const canvas2 = document.querySelector('#canv2');
const form2 = document.querySelector('#form');
const clarButton2 = document.querySelector('#clear2');
const ctx2 = canvas2.getContext('2d');
const image2 = document.querySelector('#idSignTec2');
let writingMode2 = false;

form2.addEventListener('submit', () => {
    const image2URL = canvas2.toDataURL();
    image2.value = image2URL;
    image2.height = canvas2.height;
    image2.width = canvas2.width;
    image2.style.display = 'block';
    form2.appendChild(image2);
    clearPad2();
})

const clearPad2 = () => {
    ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
}

clarButton2.addEventListener('click', (event) => {
    event.preventDefault();
    clearPad2();
})

const getTargetPositionMobile2 = (event) => {
    positionX = event.touches[0].clientX - event.target.getBoundingClientRect().x;
    positionY = event.touches[0].clientY - event.target.getBoundingClientRect().y;
  
    return [positionX, positionY];
  }

const getTargetPosition2 = (event) => {
    positionX = event.clientX - event.target.getBoundingClientRect().x;
    positionY = event.clientY - event.target.getBoundingClientRect().y;

    return [positionX, positionY];
}

const handlePointerMove2 = (event) => {
    if (!writingMode2) return

    if (event.type == 'touchmove') {
        const [positionX, positionY] = getTargetPositionMobile2(event);
    } else {
        const [positionX, positionY] = getTargetPosition2(event);
    }
    ctx2.lineTo(positionX, positionY);
    ctx2.stroke();
}

const handlePointerUp2 = () => {
    writingMode2 = false;
}

const handlePointerDown2 = (event) => {
    writingMode2 = true;
    ctx2.beginPath();

    if (event.type == 'touchmove') {
        const [positionX, positionY] = getTargetPositionMobile2(event);
    } else {
        const [positionX, positionY] = getTargetPosition2(event);
    }
    ctx2.moveTo(positionX, positionY);
}

ctx2.lineWidth = 2;
ctx2.lineJoin = ctx2.lineCap = 'round';

canvas2.addEventListener('mousedown', handlePointerDown2, {passive: true});
canvas2.addEventListener('touchstart', handlePointerDown2, {passive: true});
canvas2.addEventListener('mouseup', handlePointerUp2, {passive: true});
canvas2.addEventListener('touchend', handlePointerUp2, {passive: true});
canvas2.addEventListener('mouseout', handlePointerUp2, {passive: true});
canvas2.addEventListener('mousemove', handlePointerMove2, {passive: true});
canvas2.addEventListener('touchmove', handlePointerMove2, {passive: true});