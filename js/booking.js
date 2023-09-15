
const d = new Date();
let time = d.getHours();
// Lấy ngày, tháng và năm từ đối tượng Date
var day = d.getDate();
var month = d.getMonth() + 1;
var year = d.getFullYear();

var formattedDay = day < 10 ? "0" + day : day;
var formattedMonth = month < 10 ? "0" + month : month;
var fullDate = year + '-' + formattedMonth + '-' + formattedDay;

function getValue() {
    // Lấy giá trị từ input
    return document.getElementById('date').value;
}



function createTime(time) {
    return `
        <button  type="button" onclick="getInnerText(' ${time}')" id="view-text" class="box_time_item"> ${time}:00  </button> 
    `
}
function createTime2(time) {
    return `
        <button  type="button" onclick="getInnerText(' ${time}')" id="view-text" class="timezone"> ${time}:00  </button> 
    `
}
const arrtime = [7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21];

function listProduct() {
    const inputValue = getValue();
    var cardBig = document.getElementById('card');
    var cardSmall = ' ';
    for (var i = 0; i < arrtime.length; i++) {
        if (time >= arrtime[i] && inputValue == fullDate) {
            cardSmall += createTime2(arrtime[i]);
        } else {
            cardSmall += createTime(arrtime[i]);
        }
    }
    cardBig.innerHTML = cardSmall;
    const selectTime = selectCss();
}
// listProduct();

function selectCss() {
    const hourBoxes = document.querySelectorAll('.box_time_item');
    hourBoxes.forEach(box => {
        box.addEventListener('click', () => {
            // Remove the 'selected' class from all hour boxes
            console.log("helle");
            hourBoxes.forEach(box => {
                box.classList.remove('selected');
            });

            // Add the 'selected' class to the clicked hour box
            box.classList.add('selected');
        })
    })
}
document.getElementById('date').onchange = listProduct;






