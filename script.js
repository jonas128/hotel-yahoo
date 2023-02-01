// reset room constants
let roomIndex = 0;
const roomText = [
  'Cheap room Closer to Nature (4$) ->',
  'The Old B(o)y Standard room (5$) ->',
  'Yahoo Delux-API double room (6$) ->',
];
const roomImage = [
  'images/room1.jpeg',
  'images/room2.jpeg',
  'images/room3.jpeg',
];
// roomTag: r1=room1 r2=room2 r3=room3
const roomTag = ['r1', 'r2', 'r3'];
// reset text, image and calendar for first room
let header = document.querySelector('h3');
let img = document.querySelector("img[src='images/room1.jpeg']");
const calendarElement = document.getElementsByTagName('td');
const calendarTable = document.getElementsByClassName('r1');
for (let i = 0; i < calendarTable.length; i++) {
  calendarTable[i].style.backgroundColor = 'yellowgreen';
}

// hotel light switch button
let button = document.querySelector('light');
light.addEventListener('click', () => {
  if (document.body.style.backgroundColor == 'black') {
    document.body.style.backgroundColor = 'white';
  } else {
    document.body.style.backgroundColor = 'black';
  }
});

// change room script
newroom.addEventListener('click', () => {
  roomIndex++;

  const $select = document.querySelector('#choose-room');
  $select.value = roomIndex + 1;

  header.innerText = roomText[roomIndex];
  img.src = roomImage[roomIndex];

  for (let i = 0; i < calendarElement.length; i++) {
    calendarElement[i].style.backgroundColor = 'white';
  }

  let calendarTable = document.getElementsByClassName(roomTag[roomIndex]);
  for (let i = 0; i < calendarTable.length; i++) {
    calendarTable[i].style.backgroundColor = 'yellowgreen';
  }

  if (roomIndex == 2) {
    roomIndex = -1;
  }
});
